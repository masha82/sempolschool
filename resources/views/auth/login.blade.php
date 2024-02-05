<!doctype html>
<html lang="en">
  <head>
  	<title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets-login/css/style.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{ asset('assets-login/images/bg2.jpg') }});">
	<section class="ftco-section">
		<div class="container">
			<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">LOGIN ADMIN</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Silakan isi username dan password</h3>
		      	<form action="#" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" id="email" type="email"
                           class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                           required autocomplete="email" autofocus>
						   @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control input100 @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password" placeholder="Masukkan password">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				  @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
	            </div>
				{{-- <div class="form-group wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                    <span class="label-input100">Email</span>
                    <input placeholder="Masukkan alamat email" id="email" type="email"
                           class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                           required autocomplete="email" autofocus>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password" placeholder="Masukkan password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div> --}}
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	          </form>
				</div>
			</div>
		</div>
	</section>

  <script src="{{ asset('assets-login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets-login/js/popper.js') }}"></script>
  <script src="{{ asset('assets-login/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets-login/js/main.js') }}"></script>
</body>
</html>