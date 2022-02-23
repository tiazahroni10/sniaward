<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @if (session()->has('sukses'))
				<div class="alert alert-success solid alert-dismissible fade show">
					<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
					<strong>{{ session('sukses') }}</strong>
					<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
					</button>
				</div>
				@endif
    @if (session()->has('gagal'))
				<div class="alert alert-warning solid alert-dismissible fade show">
					<strong>{{ session('gagal') }}</strong>
					<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
					</button>
				</div>
				@endif
    <form action="{{ route('simpanPasswordBaru',$id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="password" class="pe-3 m-3">password baru</label>
                <input type="password" name="password" id="password">
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <label for="konfirmasi_password" class="pe-3 m-3">konfirmasi password</label>
                <input type="password" name="konfirmasi_password" id="konfirmasi_password">
            </div>
        </div>
        <button type="submit" class="m-3 btn btn-primary">Simpan</button>
    </form>
</body>
</html>