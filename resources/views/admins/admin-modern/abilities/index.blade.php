@extends('layouts.admin-modern')
@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ trans('cruds.ability.title_singular') }} {{ trans('global.list') }}</h4>
                    <a class="btn btn-success float-md-right" href="{{ route("admin.abilities.create") }}">
                        {{ trans('global.add') }} {{ trans('cruds.ability.title_singular') }}
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
                                              {{ ++$key }}
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
                                <tfoot>
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
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('javascript')
<script>

</script>
@endsection