@extends('layouts.admin2')
@section('content')
<div class="content">
  <div class="content">
    <div class="row m-b-10">
      <div class="col-lg-12">
          <a class="btn btn-success" href="{{ route("admin.abilities.create") }}">
              {{ trans('global.add') }} {{ trans('cruds.ability.title_singular') }}
          </a>
      </div>  
    </div>
    <div class="row">
      <div class="col-lg-12"> 
        <div class="card-box">
          <h4>{{ trans('cruds.ability.title_singular') }} {{ trans('global.list') }}</h4>

          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table id="datatable-buttons" class=" table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.ability.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.ability.fields.name') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($abilities as $key => $ability)
                            <tr data-entry-id="{{ $ability->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $ability->id ?? '' }}
                                </td>
                                <td>
                                    {{ $ability->name ?? '' }}
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.abilities.show', $ability->id) }}">
                                        {{ trans('global.view') }}
                                    </a>

                                    <a class="btn btn-xs btn-info" href="{{ route('admin.abilities.edit', $ability->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>

                                    <form action="{{ route('admin.abilities.destroy', $ability->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  </div>
</div>
@endsection
{{-- @include('partials.datatable') --}}
@section('javascript')
<script>
TableManageButtons.init();  
</script>
@endsection