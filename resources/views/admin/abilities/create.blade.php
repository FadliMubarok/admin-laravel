@extends('layouts.adminTo')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4>{{ trans('global.create') }} {{ trans('cruds.ability.title_singular') }}</h4>

                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route("admin.abilities.store") }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="name">{{ trans('cruds.ability.fields.name') }}*</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', '') }}" required>
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
                                    <button class="btn btn-primary" type="submit">
                                        <span class="fa fa-plus-square"></span>
                                        {{ trans('global.save') }}
                                    </button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection