@extends('layouts.admin-modern')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('cruds.role.title_singular') }} {{ trans('global.list') }}</h4>
                <a class="btn btn-success float-md-right" href="{{ route("admin.roles.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.role.title_singular') }}
                </a>                
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">                    
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th width="10">
                                        #
                                    </th>
                                    <th>
                                        {{ trans('cruds.role.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.role.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.role.fields.abilities') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $key => $role)
                                    <tr data-entry-id="{{ $role->id }}">
                                        <td>
                                            {{ ++$key }}
                                        </td>
                                        <td>
                                            {{ $role->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $role->name ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($role->abilities->pluck('name') as $ability)
                                                <span class="badge badge-info">{{ $ability }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a class="btn btn-xs btn-primary" href="{{ route('admin.roles.show', $role->id) }}">
                                                {{ trans('global.view') }}
                                            </a>
                                            <a class="btn btn-xs btn-info" href="{{ route('admin.roles.edit', $role->id) }}">
                                                {{ trans('global.edit') }}
                                            </a>
                                            <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
<script type="text/javascript">
  TableManageButtons.init();
</script>
@endsection