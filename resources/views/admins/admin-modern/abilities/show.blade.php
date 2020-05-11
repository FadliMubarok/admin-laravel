@extends('layouts.admin-modern')
@section('content')
<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ trans('global.show') }} {{ trans('cruds.ability.title') }}</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
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
@endsection