@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.gate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.gates.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.gate.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gate.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_active">{{ trans('cruds.gate.fields.last_active') }}</label>
                <input class="form-control {{ $errors->has('last_active') ? 'is-invalid' : '' }}" type="text" name="last_active" id="last_active" value="{{ old('last_active', '') }}">
                @if($errors->has('last_active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('last_active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gate.fields.last_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location_id">{{ trans('cruds.gate.fields.location') }}</label>
                <select class="form-control select2 {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location_id" id="location_id" required>
                    @foreach($locations as $id => $location)
                        <option value="{{ $id }}" {{ old('location_id') == $id ? 'selected' : '' }}>{{ $location }}</option>
                    @endforeach
                </select>
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.gate.fields.location_helper') }}</span>
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