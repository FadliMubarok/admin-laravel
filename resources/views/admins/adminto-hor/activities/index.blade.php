@extends('layouts.adminTo-hor')
@section('content')    
<div class="row">
  <div class="col-lg-12"> 
    <div class="card-box">
      <h4>Monitoring Aktivitas Sistem</h4>

      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table id="datatable-buttons" class=" table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                      <th>No.</th>
                      <th>Subject</th>
                      <th>URL</th>
                      <th>Method</th>
                      <th>IP</th>                 
                      <th>User Agent</th>
                      <th>Username</th> 
                    </tr>
                </thead>
                <tbody>                      
                    @foreach($dataLog as $key => $log)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $log->subject ?? '' }}</td>
                        <td class="text-success">{{ $log->url ?? '' }}</td>
                        <td><label class="label label-info">{{ $log->method ?? '' }}</label></td>
                        <td class="text-warning">{{ $log->ip ?? '' }}</td>
                        <td class="text-danger">{{ $log->agent ?? '' }}</td>
                        <td>{{ $log->user->name ?? '' }}</td>
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
{{-- @include('partials.datatable') --}}
@section('javascript')
<script>
TableManageButtons.init();  
</script>
@endsection