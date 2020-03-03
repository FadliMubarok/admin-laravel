@extends('layouts.auth')
@section('content')
<div class="text-center">
    <a href="{{ route('login') }}" class="logo"><span>ADMIN<span>Panel</span></span></a>
    {{-- <h5 class="text-muted m-t-0 font-600">SISTEM INFORMASI AKUNTANSI PERUMAHAN</h5> --}}
</div>
<div class="m-t-40 card-box">
    <div class="text-center">
        <h4 class="text-uppercase font-bold m-b-0">Log In</h4>
    </div>
    <div class="panel-body">
        <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}    

            @if(\Session::has('message'))
                <p class="alert alert-info">
                    {{ \Session::get('message') }}
                </p>
            @endif

            <div class="form-group">
                <div class="input-group">
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                            type="email" 
                            name="email" 
                            required autofocus 
                            placeholder="{{ trans('global.login_email') }}" 
                            value="{{ old('email', null) }}">
                    <span class="input-group-addon bg-info b-0 text-white">
                        <i class="ti-email"></i>
                    </span>
                </div>        
            </div>

            @if($errors->has('email'))        
                <div class="text-center p-t-12">
                    <span class="txt1" style="color: red;">
                        {{ $errors->first('email') }}
                    </span>        
                </div>
            @endif    

            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" 
                        type="password" name="password" 
                        required 
                        placeholder="{{ trans('global.login_password') }}">
                    <span class="input-group-addon bg-info b-0 text-white">
                        <i class="ti-lock"></i>
                    </span>
                </div>        
            </div>

            @if($errors->has('password'))        
                <div class="text-center p-t-12">
                    <span class="txt1" style="color: red;">
                        {{ $errors->first('password') }}
                    </span>        
                </div>
            @endif    
            
            <div class="form-group text-center m-t-30">
                <div class="col-xs-12">
                    <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                        <span class="fa fa-sign-in m-r-5"></span>
                        {{ trans('global.login') }}                 
                    </button>
                </div>
            </div>

            <div class="form-group m-t-30 m-b-0">
                <div class="col-sm-12">
                    <a href="{{ url('/password/reset') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> 
                        {{ trans('global.forgot_password') }}
                    </a>
                </div>
            </div>    
        </form>
    </div>
</div>                                                    
@endsection