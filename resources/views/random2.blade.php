<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Random Character</title>
    <style>
        body {
            background: url('{{ asset('images/Home.png') }}') no-repeat center center;
            background-size: cover;
        }

        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            padding: 20px;
        }

        .loading {
            text-align: center;
            margin-top: 20px;
            position: relative; 
        }

        .character {
            display: none;
        }

        .warp-button {
            display: none;
        }

        .skip-button {
            position: absolute;
            top: 20px;
            left: 20px; 
            cursor: pointer;
            z-index: 10;
        }

        .btn-back-home {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-back-home:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="text-right" style="position: relative;">
        <div style="position: absolute; right: 20px; top: 20px;">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/Home.gif') }}" alt="Back to Home" style="width: 150px; height: auto;">
            </a>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Random Character</h1>

        <div class="loading text-center">
            @if ($stars == 3)
                <img src="{{ asset('images/gif3.gif') }}" alt="Loading..." width="800" height="700">
            @elseif ($stars == 4)
                <img src="{{ asset('images/gif1.gif') }}" alt="Loading..." width="800" height="700">
            @else
                <img src="{{ asset('images/gif2.gif') }}" alt="Loading..." width="800" height="700">
            @endif
            <img src="{{ asset('images/skip_button.png') }}" alt="Skip GIF" class="skip-button" style="width: 100px; height: auto;">
        </div>

        <div class="character text-center mt-4">
            <img src="{{ asset('images/' . $character['image']) }}" alt="{{ $character['name'] }}" width="200" class="mb-3">
            <h4>{{ $character['name'] }}</h4>
            <p>Stars: 
                @for($i = 0; $i < $character['stars']; $i++) 
                    ★ 
                @endfor
            </p>
        </div>

        <div class="button-container text-center" style="margin: 20px;">
            <a href="{{ route('randomCharacter') }}">
                <img src="{{ asset('images/warp1.png') }}" alt="Warp 1" class="warp-button" style="width: 150px; height: auto; margin-right: 20px;">
            </a>
            <a href="{{ route('randomTenCharacters') }}">
                <img src="{{ asset('images/warp10.png') }}" alt="Warp 10" class="warp-button" style="width: 150px; height: auto;">
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.loading').show();
            setTimeout(function() {
                $('.character').fadeIn();  
                $('.loading').hide();
                $('.warp-button').fadeIn(); 
            }, 11000); 

            $('.skip-button').click(function() {
                $('.character').fadeIn();
                $('.loading').hide();
                $('.warp-button').fadeIn();
            });
        });
    </script>
</body>
</html>
