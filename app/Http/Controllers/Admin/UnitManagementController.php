<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUnitManagementRequest;
use App\Http\Requests\StoreUnitManagementRequest;
use App\Http\Requests\UpdateUnitManagementRequest;
use App\Models\AddUnit;
use App\Models\UnitManagement;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnitManagementController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('unit_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $unitManagements = UnitManagement::all();

        return view('admin.unitManagements.index', compact('unitManagements'));
    }

    public function create()
    {
        abort_if(Gate::denies('unit_management_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $units = AddUnit::all()->pluck('unit', 'id')->prepend(trans('global.pleaseSelect'), '');

        $owners = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.unitManagements.create', compact('units', 'owners'));
    }

    public function store(StoreUnitManagementRequest $request)
    {
        $unitManagement = UnitManagement::create($request->all());

        return redirect()->route('admin.unit-managements.index');
    }

    public function edit(UnitManagement $unitManagement)
    {
        abort_if(Gate::denies('unit_management_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $units = AddUnit::all()->pluck('unit', 'id')->prepend(trans('global.pleaseSelect'), '');

        $owners = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $unitManagement->load('unit', 'owner');

        return view('admin.unitManagements.edit', compact('units', 'owners', 'unitManagement'));
    }

    public function update(UpdateUnitManagementRequest $request, UnitManagement $unitManagement)
    {
        $unitManagement->update($request->all());

        return redirect()->route('admin.unit-managements.index');
    }

    public function show(UnitManagement $unitManagement)
    {
        abort_if(Gate::denies('unit_management_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $unitManagement->load('unit', 'owner');

        return view('admin.unitManagements.show', compact('unitManagement'));
    }

    public function destroy(UnitManagement $unitManagement)
    {
        abort_if(Gate::denies('unit_management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $unitManagement->delete();

        return back();
    }

    public function massDestroy(MassDestroyUnitManagementRequest $request)
    {
        UnitManagement::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
