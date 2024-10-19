<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Random Character</title>
    <style>
        .character {
            display: none; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Random Character</h1>

        <div class="loading text-center">
            @if ($stars == 3)
                <img src="{{ asset('images/gif3.gif') }}" alt="Loading..." width="1000" height="800"> 
            @elseif ($stars == 4)
                <img src="{{ asset('images/gif1.gif') }}" alt="Loading..." width="1000" height="800"> 
            @else
                <img src="{{ asset('images/gif2.gif') }}" alt="Loading..." width="1000" height="800"> 
            @endif
        </div>

        <div class="character text-center">
            <img src="{{ asset('images/' . $character['image']) }}" alt="{{ $character['name'] }}" width="200">
            <p>Name: {{ $character['name'] }}</p>
            <p>Stars: @for($i = 0; $i < $character['stars']; $i++) ★ @endfor</p>
        </div>

        <div class="text-center">
            <a href="{{ route('randomCharacter') }}" class="btn btn-primary">สุ่มตัวละคร 1 ตัว</a>
            <a href="{{ route('randomTenCharacters') }}" class="btn btn-success">สุ่มตัวละคร 10 ตัว</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
  
            $('.loading').show();

            setTimeout(function() {
                $('.character').fadeIn(); 
                $('.loading').hide();
            }, 11000);
        });
    </script>
</body>
</html>