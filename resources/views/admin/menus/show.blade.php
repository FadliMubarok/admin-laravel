@extends('layouts.adminTo')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4>{{ trans('global.show') }} {{ trans('cruds.menu.title') }}</h4>

                    <div class="row">
                        <div class="col-lg-12">
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
                                            <span class="fa fa-{{ $menu->ikon }}"></span> 
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
    </div>
</div>
@endsection