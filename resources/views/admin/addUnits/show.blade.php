@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.addUnit.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.add-units.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.addUnit.fields.id') }}
                        </th>
                        <td>
                            {{ $addUnit->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addUnit.fields.unit') }}
                        </th>
                        <td>
                            {{ $addUnit->unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addUnit.fields.floor') }}
                        </th>
                        <td>
                            {{ $addUnit->floor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addUnit.fields.block') }}
                        </th>
                        <td>
                            {{ $addUnit->block->block ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.add-units.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection