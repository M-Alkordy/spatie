<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Mohammed Alkordy spatie</title>
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
<div class="container">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
@guest
<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
@else
<li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
<li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
<li class="nav-item">
<a class="nav-link" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" >
@csrf
</form>
</li>
<li><a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
    HI {{ Auth::user()->name }} <span class="caret"></span>
</a></li>
@endguest
</ul>
</div>
</div>
</nav>
<main class="py-4">
<div class="container">
@yield('content')
</div>
</main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
