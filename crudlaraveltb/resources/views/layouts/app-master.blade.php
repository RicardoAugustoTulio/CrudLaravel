<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Paulo Vieira">
    <meta name="generator" content="ifpr 1.0">
    <title>Super WEB APP</title>

    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center align-items-center">
    
    @auth
    	@include('layouts.partials.navbarlogged')
    @endauth
    
    @guest
    	@include('layouts.partials.navbar')
	@endguest
    <main class="form-signin">

        @yield('content')
        
    </main>
    

</body>
</html>
