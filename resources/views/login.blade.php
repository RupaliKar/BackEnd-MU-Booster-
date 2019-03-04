@extends('layouts.master')
@section('title')
    LogIn
@endsection
@section('content')
		<!-- Start Bannere Area -->
		<section class="banner_area programmes_bg margin-40">
			<div class="container">
				<div class="banner_content p-250 text-left">
					<p><a href="index.html">home<i class="fas fa-angle-right"></i></a>login</p>
				</div>
			</div>
		</section> 
		<!-- End Bannere Area -->
		<!-- Start LogIn Area -->
		<div class="login_area">
			<div class="container">
				<nav>
					<div class="login_menu">
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">LogIn</a>
							
							<a class="nav-item nav-link" id="nav-regis-tab" data-toggle="tab" href="#nav-regis" role="tab" aria-controls="nav-regis" aria-selected="false">Registration</a>
						</div>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				  <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
					<form method="POST" action="{{ route('login') }}">
                        @csrf

						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted"></small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
					</form>
				  </div>
				  <div class="tab-pane fade" id="nav-regis" role="tabpanel" aria-labelledby="nav-regis-tab">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted"></small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="exampleInputRepassword1">Re-Password</label>
							<input type="re-password" class="form-control" id="exampleInputRepassword1" placeholder="re-Password">
						</div>
						<button type="submit" class="btn">Submit</button>
					</form>
				  </div>
				  
				</div>
			</div>
		</div>
		<!-- End LogIn Area -->
   @endsection