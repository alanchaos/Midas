@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.statusControl.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.status-controls.update", [$statusControl->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="status">{{ trans('cruds.statusControl.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $statusControl->status) }}" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusControl.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="desctiption">{{ trans('cruds.statusControl.fields.desctiption') }}</label>
                <input class="form-control {{ $errors->has('desctiption') ? 'is-invalid' : '' }}" type="text" name="desctiption" id="desctiption" value="{{ old('desctiption', $statusControl->desctiption) }}" required>
                @if($errors->has('desctiption'))
                    <div class="invalid-feedback">
                        {{ $errors->first('desctiption') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.statusControl.fields.desctiption_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection