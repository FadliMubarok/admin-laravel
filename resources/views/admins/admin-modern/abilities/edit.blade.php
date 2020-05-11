@extends('layouts.admin-modern')
@section('content')
<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('global.edit') }} {{ trans('cruds.ability.title_singular') }}</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <form action="{{ route("admin.abilities.update", [$ability->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('cruds.ability.fields.name') }}*</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($ability) ? $ability->name : '') }}" required>
                            @if($errors->has('name'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.ability.fields.name_helper') }}
                            </p>
                        </div>
                        <div>
                            <a href="{{ url()->previous() }}" class="btn btn-warning">
                                <span class="fa fa-arrow-left"></span> 
                                 Kembali
                            </a>
                            <button class="btn btn-danger" type="submit">
                                <span class="fa fa-check-square"></span>
                                {{ trans('global.save') }}
                            </button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection