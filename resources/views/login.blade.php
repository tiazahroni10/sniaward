<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('assets') }}/css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>SNI AWARD | Login</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			@if (session()->has('sukses'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('sukses') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
			@if (session()->has('loginError'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close h-100" data-bs-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button>
					<strong>{{ session('loginError') }}</strong>
				</div>
			@endif
			<form action="/login" method="POST">
				@csrf
				<h1 >SNI AWARD</h1>
				<h5>Login Akun Anda</h5>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Email</strong></label>
                            <input type="email" name="email" id="email" class="form-control @error('email')is-invalid  @enderror" value="{{ old('email') }}" autofocus required>
							@error('email')
								<div class="invalid-feedback">
									{{  $message }}
								</div>
							@enderror
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Password</strong></label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                            <div class="form-group">
                                <a class="text-white" href="page-forgot-password.html">Lupa Password?</a>
                            </div>
                        </div>
                        <!-- <div class="text-center"> -->
                            <button type="submit" class="btn bg-white text-primary btn-block mt-3">Masuk</button>
                        <!-- </div> -->
                    
                        <p class="text-white">Belum memiliki akun ? <a class="text-white" href="/register">Daftar</a></p>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<img src="{{ asset('assets') }}/img/login.png" >
				</div>
			</div>
		</div>
	</div>
</body>
</html>