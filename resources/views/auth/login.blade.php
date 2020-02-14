@extends('layouts.auth')
@section('content')
<div class="text-center">
    <a href="index.html" class="logo"><span>Admin<span>to</span></span></a>
    <h5 class="text-muted m-t-0 font-600">Responsive Admin Dashboard</h5>
</div>
<div class="m-t-40 card-box">
    <div class="text-center">
        <h4 class="text-uppercase font-bold m-b-0">Log In</h4>
    </div>
    <div class="panel-body">
        @if(\Session::has('message'))
            <p class="alert alert-info">
                {{ \Session::get('message') }}
            </p>
        @endif
        <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h1>{{ trans('panel.site_title') }}</h1>
            <p class="text-muted">{{ trans('global.login') }}</p>

            <div class="form-group">            
                <div class="col-xs-12">
                    <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>            
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>                           
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-custom">
                        <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                        <label class="form-check-label" for="remember" style="vertical-align: middle;">
                            {{ trans('global.remember_me') }}
                        </label>
                    </div>                    
                </div>
            </div>

            <div class="form-group text-center m-t-30">
                <div class="col-xs-12">
                    <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                        {{ trans('global.login') }}
                    </button>
                </div>
            </div>

            <div class="form-group m-t-30 m-b-0">
                <div class="col-sm-12">
                    <a href="page-recoverpw.html" class="text-muted">
                        <i class="fa fa-lock m-r-5"></i> {{ trans('global.forgot_password') }}
                    </a>
                </div>
            </div>        
        </form>
    </div>
</div>                                                    
@endsection