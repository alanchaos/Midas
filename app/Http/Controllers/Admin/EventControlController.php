<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEventControlRequest;
use App\Http\Requests\StoreEventControlRequest;
use App\Http\Requests\UpdateEventControlRequest;
use App\Models\EventCategory;
use App\Models\EventControl;
use App\Models\Role;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventControlController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('event_control_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventControls = EventControl::all();

        return view('admin.eventControls.index', compact('eventControls'));
    }

    public function create()
    {
        abort_if(Gate::denies('event_control_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = EventCategory::all()->pluck('cateogey', 'id')->prepend(trans('global.pleaseSelect'), '');

        $audience_groups = Role::all()->pluck('title', 'id');

        return view('admin.eventControls.create', compact('categories', 'audience_groups'));
    }

    public function store(StoreEventControlRequest $request)
    {
        $eventControl = EventControl::create($request->all());
        $eventControl->audience_groups()->sync($request->input('audience_groups', []));

        return redirect()->route('admin.event-controls.index');
    }

    public function edit(EventControl $eventControl)
    {
        abort_if(Gate::denies('event_control_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = EventCategory::all()->pluck('cateogey', 'id')->prepend(trans('global.pleaseSelect'), '');

        $audience_groups = Role::all()->pluck('title', 'id');

        $eventControl->load('category', 'audience_groups');

        return view('admin.eventControls.edit', compact('categories', 'audience_groups', 'eventControl'));
    }

    public function update(UpdateEventControlRequest $request, EventControl $eventControl)
    {
        $eventControl->update($request->all());
        $eventControl->audience_groups()->sync($request->input('audience_groups', []));

        return redirect()->route('admin.event-controls.index');
    }

    public function show(EventControl $eventControl)
    {
        abort_if(Gate::denies('event_control_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventControl->load('category', 'audience_groups');

        return view('admin.eventControls.show', compact('eventControl'));
    }

    public function destroy(EventControl $eventControl)
    {
        abort_if(Gate::denies('event_control_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventControl->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventControlRequest $request)
    {
        EventControl::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
