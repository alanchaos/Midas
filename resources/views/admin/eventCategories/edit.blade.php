@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.eventCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.event-categories.update", [$eventCategory->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="cateogey">{{ trans('cruds.eventCategory.fields.cateogey') }}</label>
                <input class="form-control {{ $errors->has('cateogey') ? 'is-invalid' : '' }}" type="text" name="cateogey" id="cateogey" value="{{ old('cateogey', $eventCategory->cateogey) }}" required>
                @if($errors->has('cateogey'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cateogey') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.eventCategory.fields.cateogey_helper') }}</span>
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