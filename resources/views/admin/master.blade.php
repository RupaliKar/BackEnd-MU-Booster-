<!DOCTYPE HTML>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin|@yield('title')</title> 
      <!-- Google font -->
	  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
	  <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('public/admin/css/fontawesome-all.min.css') }}" />
	  <!-- Site favicon -->
      <link rel="shortcut icon" href="{{ asset('public/admin/images/favicon.ico') }}">
      <!-- Animate Css -->
      <link rel="stylesheet" href="{{ asset('public/admin/css/animate.css') }}" />
      <!-- Bootstrap Css -->
      <link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap.min.css') }}" />
      <!-- Main Css -->
      <link rel="stylesheet" href="{{ asset('public/admin/css/style.css') }}" />
	  <!-- Responsive -->
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
   </head>
   <body>
			@yield('content')
		 

      <!-- LinkUp Js -->
      <script type="text/javascript" src="{{ asset('public/admin/js/jquery-1.12.4.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('public/admin/js/active.js') }}"></script> 
   </body>
</html>