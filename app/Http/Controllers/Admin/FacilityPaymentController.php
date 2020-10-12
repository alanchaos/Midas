<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyFacilityPaymentRequest;
use App\Http\Requests\StoreFacilityPaymentRequest;
use App\Http\Requests\UpdateFacilityPaymentRequest;
use App\Models\FacilityManagement;
use App\Models\FacilityPayment;
use App\Models\PaymentMethod;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FacilityPaymentController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('facility_payment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilityPayments = FacilityPayment::all();

        return view('admin.facilityPayments.index', compact('facilityPayments'));
    }

    public function create()
    {
        abort_if(Gate::denies('facility_payment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilities = FacilityManagement::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $usernames = User::all()->pluck('username', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_methods = PaymentMethod::all()->pluck('method', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.facilityPayments.create', compact('facilities', 'usernames', 'payment_methods'));
    }

    public function store(StoreFacilityPaymentRequest $request)
    {
        $facilityPayment = FacilityPayment::create($request->all());

        if ($request->input('reciept', false)) {
            $facilityPayment->addMedia(storage_path('tmp/uploads/' . $request->input('reciept')))->toMediaCollection('reciept');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $facilityPayment->id]);
        }

        return redirect()->route('admin.facility-payments.index');
    }

    public function edit(FacilityPayment $facilityPayment)
    {
        abort_if(Gate::denies('facility_payment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilities = FacilityManagement::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $usernames = User::all()->pluck('username', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_methods = PaymentMethod::all()->pluck('method', 'id')->prepend(trans('global.pleaseSelect'), '');

        $facilityPayment->load('facility', 'username', 'payment_method');

        return view('admin.facilityPayments.edit', compact('facilities', 'usernames', 'payment_methods', 'facilityPayment'));
    }

    public function update(UpdateFacilityPaymentRequest $request, FacilityPayment $facilityPayment)
    {
        $facilityPayment->update($request->all());

        if ($request->input('reciept', false)) {
            if (!$facilityPayment->reciept || $request->input('reciept') !== $facilityPayment->reciept->file_name) {
                if ($facilityPayment->reciept) {
                    $facilityPayment->reciept->delete();
                }

                $facilityPayment->addMedia(storage_path('tmp/uploads/' . $request->input('reciept')))->toMediaCollection('reciept');
            }
        } elseif ($facilityPayment->reciept) {
            $facilityPayment->reciept->delete();
        }

        return redirect()->route('admin.facility-payments.index');
    }

    public function show(FacilityPayment $facilityPayment)
    {
        abort_if(Gate::denies('facility_payment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilityPayment->load('facility', 'username', 'payment_method');

        return view('admin.facilityPayments.show', compact('facilityPayment'));
    }

    public function destroy(FacilityPayment $facilityPayment)
    {
        abort_if(Gate::denies('facility_payment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facilityPayment->delete();

        return back();
    }

    public function massDestroy(MassDestroyFacilityPaymentRequest $request)
    {
        FacilityPayment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('facility_payment_create') && Gate::denies('facility_payment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new FacilityPayment();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
