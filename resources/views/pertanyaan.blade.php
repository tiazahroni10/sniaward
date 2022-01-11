<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>    
    <form action="/pertanyaan" method="POST" class="mt-4">
        @csrf
        @foreach ($data as $item)
            <div class="container">
                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">{{ $item->pertanyaan }}</label>
                    <input type="text" name="jawaban{{ $item->id }}" class="form-control" id="jawaban{{ $item->id }}" placeholder="Jawaban">
                </div>
            </div>
        @endforeach
        
        <button type="submit" class="btn btn-primary">Primary</button>
    </form>
</body>
</html>