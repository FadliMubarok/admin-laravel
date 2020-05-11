@extends('layouts.admin-modern')
@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h4>Monitoring Aktivitas Sistem</h4>
        </div>
        <div class="card-content collapse show">
          <div class="card-body card-dashboard">              
              <div class="table-responsive">
                  <table class="table table-striped table-bordered zero-configuration">
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
@section('javascript')
<script>
$('.zero-configuration').DataTable();  
</script>
@endsection