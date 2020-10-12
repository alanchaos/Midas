@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.defectCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.defect-categories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="defect_cateogry">{{ trans('cruds.defectCategory.fields.defect_cateogry') }}</label>
                <input class="form-control {{ $errors->has('defect_cateogry') ? 'is-invalid' : '' }}" type="text" name="defect_cateogry" id="defect_cateogry" value="{{ old('defect_cateogry', '') }}" required>
                @if($errors->has('defect_cateogry'))
                    <div class="invalid-feedback">
                        {{ $errors->first('defect_cateogry') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.defectCategory.fields.defect_cateogry_helper') }}</span>
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