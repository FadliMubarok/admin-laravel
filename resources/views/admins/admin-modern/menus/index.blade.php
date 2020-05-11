@extends('layouts.admin-modern')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('cruds.menu.title_singular') }} {{ trans('global.list') }}</h4>
                <a class="btn btn-success float-md-right" href="{{ route("admin.menus.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.menu.title_singular') }}
                </a>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    {{-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> --}}
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th width="10">
                                        #
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
                                            {{ ++$key }}
                                        </td>
                                        <td>
                                            {{ $menu->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $menu->label ?? '' }}
                                        </td>
                                        <td>
                                            <span class="la la-{{ $menu->ikon ?? '' }}"></span> 
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
@endsection
@section('javascript')
<script>
TableManageButtons.init();  
</script>
@endsection