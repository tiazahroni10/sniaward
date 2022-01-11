<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('assets') }}/css/pertanyaan.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>SNI AWARD | Pertanyaan</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#">
				<h1 class="center" >SNI AWARD</h1>
				<h5>Lengkapi Pertanyaan berikut!</h5>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Dari mana anda memperoleh informasi tentang SNI Award?</strong></label>
                            <input type="text" class="form-control" placeholder="jawaban ...">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Apa yang paling memotivasi Organisasi Anda mengikuti SNI Award?</strong></label>
                            <input type="text" class="form-control" placeholder="jawaban ...">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Apa manfaat yang paling Anda harapkan dengan mengikuti SNI Award?</strong></label>
                            <input type="text" class="form-control" placeholder="jawaban ...">
                        </div>
                        
                        <!-- <div class="text-center"> -->
                            <button type="submit" class="btn bg-white text-primary btn-block mt-3">Submit</button>
                        <!-- </div> -->
                
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<img src="{{ asset('assets') }}/img/daftar.png" >
				</div>
			</div>
		</div>
	</div>
</body>
</html>