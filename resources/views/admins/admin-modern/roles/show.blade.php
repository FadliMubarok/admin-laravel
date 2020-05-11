@extends('layouts.admin-modern')
@section('content')
<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('global.show') }} {{ trans('cruds.role.title') }}</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.role.fields.id') }}
                                </th>
                                <td>
                                    {{ $role->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.role.fields.name') }}
                                </th>
                                <td>
                                    {{ $role->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Abilities
                                </th>
                                <td>
                                    @foreach($role->abilities as $id => $abilities)
                                        <span class="badge badge-info">{{ $abilities->name }}</span>
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