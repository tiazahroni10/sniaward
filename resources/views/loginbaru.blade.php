<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>SNI AWARD | Login</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#">
				<h1 >SNI AWARD</h1>
				<h5>Login Akun Anda</h5>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Email</strong></label>
                            <input type="email" class="form-control" value="hello@example.com">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Password</strong></label>
                            <input type="password" class="form-control" value="Password">
                        </div>
                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                            <div class="form-group">
                                <a class="text-white" href="page-forgot-password.html">Lupa Password?</a>
                            </div>
                        </div>
                        <!-- <div class="text-center"> -->
                            <button type="submit" class="btn bg-white text-primary btn-block mt-3">Masuk</button>
                        <!-- </div> -->
                    
                        <p class="text-white">Belum memiliki akun ? <a class="text-white" href="./page-register.html">Daftar</a></p>
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