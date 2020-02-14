@extends('layouts.admin2')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4>{{ trans('global.create') }} {{ trans('cruds.role.title_singular') }}</h4>

                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route("admin.roles.store") }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="name">{{ trans('cruds.role.fields.name') }}*</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($role) ? $role->name : '') }}" required>
                                    @if($errors->has('name'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.role.fields.name_helper') }}
                                    </p>
                                </div>
                                <div class="form-group {{ $errors->has('abilities') ? 'has-error' : '' }}">
                                    <label for="abilities">{{ trans('cruds.role.fields.abilities') }}*
                                        <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                        <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                                    <select name="abilities[]" id="abilities" class="form-control select2" multiple="multiple" required>
                                        @foreach($abilities as $id => $abilities)
                                            <option value="{{ $id }}" {{ in_array($id, old('abilities', [])) ? 'selected' : '' }}>{{ $abilities }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('abilities'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('abilities') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.role.fields.abilities_helper') }}
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