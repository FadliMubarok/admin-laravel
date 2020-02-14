@extends('layouts.admin2')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4>{{ trans('global.show') }} {{ trans('cruds.ability.title') }}</h4>

                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.ability.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $ability->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.ability.fields.name') }}
                                        </th>
                                        <td>
                                            {{ $ability->name }}
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