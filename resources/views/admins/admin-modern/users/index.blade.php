@extends('layouts.admin-modern')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}</h4>                
                <a class="btn btn-success float-md-right" href="{{ route("admin.users.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}
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
                                        {{ trans('cruds.user.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.user.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.user.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.user.fields.roles') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                    <tr data-entry-id="{{ $user->id }}">
                                        <td>
                                            {{ ++$key }}
                                        </td>
                                        <td>
                                            {{ $user->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->email ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($user->roles->pluck('name') as $role)
                                                <span class="badge badge-info">{{ $role }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">
                                                {{ trans('global.view') }}
                                            </a>

                                            <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                                {{ trans('global.edit') }}
                                            </a>

                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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