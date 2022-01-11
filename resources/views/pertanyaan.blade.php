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
			<form action="/pertanyaan" method="POST">
				@csrf
				<h1 class="center" >SNI AWARD</h1>
				<h5>Lengkapi Pertanyaan berikut!</h5>
				@if (session()->has('userid'))
				<input type="text" name="user_id" value="{{ session('userid') }}" hidden>
				@endif
				@foreach ($data as $item)
					<div class="form-group">
						<label class="mb-1 text-white"><strong>{{ $item->pertanyaan }}</strong></label>
						<input type="text" name="pertanyaan[{{ $item->id }}]" class="form-control" id="j_{{ $item->id }}"  placeholder="jawaban ..." required maxlength="100">
					</div>
				@endforeach

                        
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