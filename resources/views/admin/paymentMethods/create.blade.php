@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.paymentMethod.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.payment-methods.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="method">{{ trans('cruds.paymentMethod.fields.method') }}</label>
                <input class="form-control {{ $errors->has('method') ? 'is-invalid' : '' }}" type="text" name="method" id="method" value="{{ old('method', '') }}" required>
                @if($errors->has('method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentMethod.fields.method_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status">{{ trans('cruds.paymentMethod.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', '') }}" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentMethod.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.paymentMethod.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}" required>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.paymentMethod.fields.description_helper') }}</span>
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