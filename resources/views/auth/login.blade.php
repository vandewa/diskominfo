{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <center>
            <img style="margin-top:4px; width:150px;" src="front/assets/images/pemda.png" >
            <br>
            <p>DISKOMINFO WONOSOBO</p>
            </center>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if(session('statuss'))
        <div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            {{ session('statuss') }}
        </div>
        @endif

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<!doctype html>
<html lang="en">
<head>
	<base href="./">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Diskominfo Wonosobo Login">
	<meta name="author" content="Diskominfo Wonosobo">
	<meta name="keyword" content="Diskominfo Wonosobo Login">
	<link rel="shortcut icon" href="{{ asset('image/pemda.ico')}}">
	<title>Login Diskominfo Wonosobo</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="img js-fullheight" style="background-image:url({{ asset('image/bggg.png') }})">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-0 mt-4">
					<img src="{{ asset('image/pemda.png') }}" style="width: 80px;">
					<h2 class="heading-section">
						<span style="margin-left: 10px; font-weight: bold; font-family: 'Teko', sans-serif; color: #ffffff; font-size: 40pt">Diskominfo Wonosobo</span>
					</h2>
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h6 class="mb-4 text-center" style="color: #ffffff;">Masukkan Email dan Password Anda</h6>
						<form action="{{ route('login') }}" class="signin-form" id="flogin" onsubmit="return lsogin();" method="post" accept-charset="utf-8">
							 @csrf
							 
							{{-- <div id="notif_login"></div> --}}
							<x-jet-validation-errors class="mb-4" />
							@if (session('status'))
							<div class="alert alert-danger">
								{{ session('status') }}
							</div>
							@endif

							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" id="flogin_username" autofocus required>
							</div>
							<div class="form-group">
								<input name="password" placeholder="Password" id="flogin_password" type="password" class="form-control" required>
								<span toggle="#flogin_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn submit px-3" id="flogin_tb_ok" style="background-color: rgb(51, 88, 244) !important;
								background-image: linear-gradient(to left bottom, rgb(29, 140, 248), rgb(51, 88, 244), rgb(29, 140, 248)) !important;
								background-size: 210% 210%;
								background-position: 100% 0;
								transition: all .15s ease;
								box-shadow: none;
								color: #fff;"><b>Login</b></button>
							</div>
						</form>						
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script>
		$(function(){
			$(".alert").delay(3000).slideUp(300);
		});
	</script>
    <script type="text/javascript">
		(function ($) {
				"use strict";
				var fullHeight = function () {
					$('.js-fullheight').css('height', $(window).height());
					$(window).resize(function () {
						$('.js-fullheight').css('height', $(window).height());
					});
				};
				fullHeight();
				$(".toggle-password").click(function () {
					$(this).toggleClass("fa-eye fa-eye-slash");
					var input = $($(this).attr("toggle"));
					if (input.attr("type") == "password") {
						input.attr("type", "text");
					} else {
						input.attr("type", "password");
					}
				});
		})(jQuery);
	</script>
</body>
</html>