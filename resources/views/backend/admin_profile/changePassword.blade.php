@extends('backend.master')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>User Profile</h2>
            </div>            
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
            </div>
        </div>
    </div>    
    <div class="container-fluid">           

        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="card">
                    <div class="header">
                        <h2>Change Password</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post" novalidate="" action="{{ route('admin.update.password') }}">{{ csrf_field() }}
                            <div class="form-group">
                                <label>Current Password :</label>
                                @if(Session::has('current_password'))
									<div class="alert alert-success">
										{{ Session::get('current_password')}}
									</div>
								@endif
                                <input type="password" class="form-control" id="current_password" name="oldpassword" required="">
                                @error('oldpassword')
									<p class="text-danger">{{ $message  }}</p>
								@enderror
                            </div>
                            <div class="form-group">
                                <label>New Password :</label>
                                <input type="password" id="password" name="password" class="form-control" required="">
                                @error('password')
									<p class="text-danger">{{ $message  }}</p>
								@enderror
                            </div>
                            <div class="form-group">
                                <label>Confirm Password :</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required="">
                                @error('password')
									<p class="text-danger">{{ $message  }}</p>
								@enderror
                            </div>
                            
                            
                            <br>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>




            
            </div>

            
        </div>
    </div>
</div>
@endsection