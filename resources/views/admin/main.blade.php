@extends('admin.master')
@section('title')
  Admin
@endsection
@section('content')
		
<div class="header_top">
	<div class="container-fluid no_padding">
		<div class="header_left">
			<a href="#"><p>MU-Booster</p>
			</a>
		</div>
		<div class="admin_sidebar_menu">
			<div class="user_panel">
				<img src="{{ asset('public/admin/images/prof2.jpg') }}" alt="" />
				<p>Rupa</p>
			</div>
			<div class="menu text-left">
				<ul>
					<li><a href="admin.html"><i class="fas fa-columns"></i>deshboard</a></li>
					<li><a href="faculty.html"><i class="far fa-user"></i>faculty</a></li>
					<li><a href="department.html"><i class="fab fa-accusoft"></i>departments</a></li>
					<li><a href="semester.html"><i class="far fa-bookmark"></i>semester</a></li>
					<li><a href=""><i class="fas fa-book-open"></i>course details</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="admin_area">
	<div class="container-fluid no_padding">
		<div class="header_right">
			<ul>
				<li><a href="">admin</a></li>
				<li><a href="#"><img src="{{ asset('public/admin/images/user.jpg') }}" alt="" /><i class="fas fa-arrow-down"></i>
				</a>
					<ul>
						<li><a href="">logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
      @endsection