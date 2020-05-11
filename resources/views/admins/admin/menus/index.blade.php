@extends('layouts.adminTo')
@section('content')
<div class="content">
  <div class="content">
    <div class="row m-b-10">
      <div class="col-lg-12">
          <a class="btn btn-success" href="{{ route("admin.menus.create") }}">
              {{ trans('global.add') }} {{ trans('cruds.menu.title_singular') }}
          </a>
      </div>  
    </div>
    <div class="row">
      <div class="col-lg-12"> 
        <div class="card-box">
          <h4>{{ trans('cruds.menu.title_singular') }} {{ trans('global.list') }}</h4>

          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table id="datatable-buttons" class=" table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.menu.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.menu.fields.label') }}
                            </th>
                            <th>
                                {{ trans('cruds.menu.fields.ikon') }}
                            </th>
                            <th>
                                {{ trans('cruds.menu.fields.order') }}
                            </th>
                            <th>
                                {{ trans('cruds.menu.fields.type') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $key => $menu)
                            <tr data-entry-id="{{ $menu->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $menu->id ?? '' }}
                                </td>
                                <td>
                                    {{ $menu->label ?? '' }}
                                </td>
                                <td>
                                    <span class="fa fa-{{ $menu->ikon ?? '' }}"></span> 
                                </td>
                                <td>
                                    {{ $menu->order ?? '' }}
                                </td>
                                <td>
                                    {{ $menu->type ?? '' }}
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.menus.show', $menu->id) }}">
                                        {{ trans('global.view') }}
                                    </a>

                                    <a class="btn btn-xs btn-info" href="{{ route('admin.menus.edit', $menu->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>

                                    <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('javascript')
<script>
TableManageButtons.init();  
</script>
@endsection