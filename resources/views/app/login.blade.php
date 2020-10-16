@extends('layouts.app')

@section('description', trans('global.app.sections.login.description'))
@section('featured_img', asset(trans('global.app.sections.login.featured_img')))
@section('keywords', trans('global.app.sections.login.keywords'))
@section('title', trans('global.app.sections.login.title'))

@section('content')
<div class="content-wrap py-0">

	<div class="section p-0 m-0 h-100 position-absolute" style="background: url('{{ asset('assets/app/images/parallax/home/1.jpg') }}') center center no-repeat; background-size: cover;"></div>

	<div class="section bg-transparent min-vh-100 p-0 m-0">
		<div class="vertical-middle">
			<div class="container-fluid py-5 mx-auto">
				<div class="center">
					<a href="/"><img src="{{ asset('assets/app/images/micontabilidad-logo-dark.png') }}" alt="Mi Contabilidad Logo"></a>
				</div>

				<div class="card mx-auto rounded-0 border-0" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
					<div class="card-body" style="padding: 40px;">
						<form id="login-form" name="login-form" class="mb-0" action="{{ url("/login") }}" method="post">
							@csrf

							<h3>Login to your Account</h3>

							<div class="row">
								<div class="col-12 form-group">
									<label for="login-form-username">Username:</label>
									<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" />
								</div>

								<div class="col-12 form-group">
									<label for="login-form-password">Password:</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" />
								</div>

								<div class="col-12 form-group">
									<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
									<a href="#" class="float-right">Forgot Password?</a>
								</div>
							</div>
						</form>

						<!--
						<div class="line line-sm"></div>

						<div class="w-100 text-center">
							<h4 style="margin-bottom: 15px;">or Login with:</h4>
							<a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
							<span class="d-none d-md-inline-block">or</span>
							<a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>
						</div>
						-->
					</div>
				</div>

				<div class="text-center dark mt-3"><small>Copyrights &copy; All Rights Reserved by Mi Contabilidad.</small></div>
			</div>
		</div>
	</div>

@endsection
