<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUnitManagementRequest;
use App\Http\Requests\UpdateUnitManagementRequest;
use App\Http\Resources\Admin\UnitManagementResource;
use App\Models\UnitManagement;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnitManagementApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('unit_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UnitManagementResource(UnitManagement::with(['unit', 'owner'])->get());
    }

    public function store(StoreUnitManagementRequest $request)
    {
        $unitManagement = UnitManagement::create($request->all());

        return (new UnitManagementResource($unitManagement))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(UnitManagement $unitManagement)
    {
        abort_if(Gate::denies('unit_management_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UnitManagementResource($unitManagement->load(['unit', 'owner']));
    }

    public function update(UpdateUnitManagementRequest $request, UnitManagement $unitManagement)
    {
        $unitManagement->update($request->all());

        return (new UnitManagementResource($unitManagement))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(UnitManagement $unitManagement)
    {
        abort_if(Gate::denies('unit_management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $unitManagement->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
