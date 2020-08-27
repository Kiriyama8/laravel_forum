<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inside Aju</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark-gray">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
				<a class="nav-link" href="#">Home</a>
			</li>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				@if (Route::has('login'))
					@auth
						<li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('/home') }}">Home</a>
						</li>
					@else
						<li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
							<a class="nav-link" href="{{ route('login') }}">Login</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
								<a class="nav-link" href="{{ route('register') }}">Criar Conta</a>
							</li>
						@endif
					@endauth
				@endif
			</div>
		</ul>
	</nav>

	<main role="main">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 col-xl-8 offset-lg-2">
					<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark-box rounded shadow">
						<img class="mr-3" src="{{ asset('assets/images/fake-2.svg') }}" alt="" width="50" height="50">
						<div class="lh-100">
							<h6 class="mb-0 text-white font-weight-bold lh-100">Dica do Dia</h6>
							<small>Para quem está se afogando jacaré é tronco.</small>
						</div>
					</div>

					@yield('content')

					<footer class="footer mt-auto py-3">
						<div class="text-center">
							<small class="text-muted">Copyright © {{ date('Y') }}, Copia não comédia! - Todos os direitos reservados.</small>
						</div>
					</footer>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
