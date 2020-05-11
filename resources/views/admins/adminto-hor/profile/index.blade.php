@extends('layouts.adminTo-hor')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="bg-picture card-box">
            <div class="profile-info-name">
            	<h4 class="header-title m-t-0 m-b-10 m-l-15">Profile {{ auth()->user()->name }}
					&nbsp;&nbsp;
				</h4>                        
                <div class="profile-info-detail">                    
                    <h4 class="m-t-0 m-b-0">Email : {{ auth()->user()->email }}</h4>
                    <p class="text-muted m-b-20">
                        Anda Sudah Login, Sebanyak : 
                        <i>
                    	   {{ auth()->user()->login_count }} Kali
                        </i>
                   	</p>                                                      
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>				
</div>	
@endsection