@extends('layouts.admin-modern')
@section('content')
<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('global.show') }} {{ trans('cruds.user.title') }}</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.id') }}
                                </th>
                                <td>
                                    {{ $user->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.name') }}
                                </th>
                                <td>
                                    {{ $user->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.email') }}
                                </th>
                                <td>
                                    {{ $user->email }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Roles
                                </th>
                                <td>
                                    @foreach($user->roles->pluck('name') as $role)
                                        <span class="badge badge-info">{{ $role }}</span>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection