@extends('layouts.admin-modern')
@section('content')
<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('global.show') }} {{ trans('cruds.menu.title') }}</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.menu.fields.id') }}
                                </th>
                                <td>
                                    {{ $menu->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.menu.fields.label') }}
                                </th>
                                <td>
                                    {{ $menu->label }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.menu.fields.ikon') }}
                                </th>
                                <td>
                                    <span class="la la-{{ $menu->ikon }}"></span> 
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.menu.fields.type') }}
                                </th>
                                <td>
                                    {{ $menu->type }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.menu.fields.url') }}
                                </th>
                                <td>
                                    {{ $menu->url }}
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
@endsection