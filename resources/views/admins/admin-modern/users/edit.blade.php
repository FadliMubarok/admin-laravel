@extends('layouts.admin-modern')
@section('content')
<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <form action="{{ route("admin.users.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                            @if($errors->has('name'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.user.fields.email') }}*</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                            @if($errors->has('email'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.email_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                            <input type="password" id="password" name="password" class="form-control">
                            @if($errors->has('password'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.password_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                            <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                                <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                            <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                                @foreach($roles as $id => $roles)
                                    <option value="{{ $id }}" {{ in_array($id, old('roles', [])) || $user->roles()->pluck('name', 'name')->contains($roles) ? 'selected' : '' }}>{{ $roles }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('roles'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('roles') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.roles_helper') }}
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

@section('javascript')
<script type="text/javascript">
    $('.select-all').click(function () {
      let $select2 = $(this).parent().siblings('.select2')
      $select2.find('option').prop('selected', 'selected')
      $select2.trigger('change')
    })
    $('.deselect-all').click(function () {
      let $select2 = $(this).parent().siblings('.select2')
      $select2.find('option').prop('selected', '')
      $select2.trigger('change')
    })

    $('.select2').select2()
</script>
@endsection