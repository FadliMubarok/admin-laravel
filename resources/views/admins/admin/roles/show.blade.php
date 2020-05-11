@extends('layouts.adminTo')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4>{{ trans('global.show') }} {{ trans('cruds.role.title') }}</h4>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-2">
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
                                <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection