@extends('layouts.admin2')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4>{{ trans('global.create') }} {{ trans('cruds.menu.title_singular') }}</h4>

                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route("admin.menus.update", $menu->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group {{ $errors->has('parent') ? 'has-error' : '' }}">
                                    <label for="parent">{{ trans('cruds.menu.fields.parent') }}*</label>
                                    <select class="form-control" name="parent">
                                        <option value=" ">-- Silahkan Pilih --</option>
                                        @foreach($parents as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->label }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('parent'))
                                        <em class="text text-danger">
                                            {{ $errors->first('parent') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.menu.fields.parent_helper') }}
                                    </p>                                    
                                </div>
                                <div class="form-group {{ $errors->has('label') ? 'has-error' : '' }}">
                                    <label for="label">{{ trans('cruds.menu.fields.label') }}*</label>
                                    <input type="text" id="label" name="label" class="form-control" value="{{ old('label', isset($menu) ? $menu->label : '') }}" required>
                                    @if($errors->has('label'))
                                        <em class="text text-danger">
                                            {{ $errors->first('label') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.menu.fields.label_helper') }}
                                    </p>
                                </div>
                                <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                                    <label for="type">{{ trans('cruds.menu.fields.url') }}*</label>
                                    <input type="text" id="url" name="url" class="form-control" value="{{ old('url', isset($menu) ? 
                                    $menu->url : '') }}" required>
                                    @if($errors->has('url'))
                                        <em class="text text-danger">
                                            {{ $errors->first('url') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.menu.fields.url_helper') }}
                                    </p>
                                </div>
                                <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                                    <label for="type">{{ trans('cruds.menu.fields.type') }}*</label>                                
                                    <select class="form-control" name="type">
                                        <option value=" ">-- Silahkan Pilih --</option>
                                        <option value="parent" {{ $menu->type == 'parent' ? "selected" : '' }}>Parent</option>
                                        <option value="single" {{ $menu->type == 'single' ? "selected" : '' }}>Single</option>
                                        <option value="submenu" {{ $menu->type == 'submenu' ? "selected" : '' }}>SubMenu</option>
                                    </select>
                                    @if($errors->has('type'))
                                        <em class="text text-danger">
                                            {{ $errors->first('type') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.menu.fields.type_helper') }}
                                    </p>
                                </div>
                                <div class="form-group {{ $errors->has('ikon') ? 'has-error' : '' }}">
                                    <label for="ikon">{{ trans('cruds.menu.fields.ikon') }}*</label>
                                    <input type="text" id="ikon" name="ikon" class="form-control" value="{{ old('ikon', isset($menu) ? $menu->ikon : '') }}" required>
                                    @if($errors->has('ikon'))
                                        <em class="text text-danger">
                                            {{ $errors->first('ikon') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.menu.fields.ikon_helper') }} <a href="https://fontawesome.com/v4.7.0/icons/"> https://fontawesome.com/v4.7.0/icons/</a>
                                    </p>
                                </div>
                                <div class="form-group {{ $errors->has('order') ? 'has-error' : '' }}">
                                    <label for="order">{{ trans('cruds.menu.fields.order') }}*</label>
                                    <input type="number" id="order" name="order" class="form-control" value="{{ old('order', isset($menu) ? $menu->order : '') }}" >
                                    @if($errors->has('order'))
                                        <em class="text text-danger">
                                            {{ $errors->first('order') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.menu.fields.order_helper') }}
                                    </p>
                                </div>
                                <div>
                                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
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