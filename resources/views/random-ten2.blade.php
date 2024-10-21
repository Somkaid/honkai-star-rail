<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Random 10 Characters</title>

    <style>
        body {
            background: url('{{ asset('images/Home.png') }}') no-repeat center center;
            background-size: cover;
        }

        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 20px;
        }

        .character-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }

        .character-card:hover {
            transform: scale(1.05);
        }

        .loading {
            text-align: center;
            margin-top: 20px;
            position: relative; 
        }

        .characters {
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
    <div class="text-right" style="position: relative;">
        <div style="position: absolute; right: 20px; top: 20px;">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/Home.gif') }}" alt="Back to Home" style="width: 150px; height: auto;">
            </a>
        </div>
    </div>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Random 10 Characters</h1>

        <div class="loading">
            <img src="{{ collect($result)->contains('stars', 5) ? asset('images/gif2.gif') : asset('images/gif1.gif') }}" 
                 alt="Loading..." width="800" height="700">
            <img src="{{ asset('images/skip_button.png') }}" alt="Skip GIF" class="skip-button" style="width: 100px; height: auto;">
        </div>

        <div class="characters">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center">Left Characters</h3>
                    <div class="row">
                        @for ($i = 0; $i < 5; $i++)
                            @if (isset($result[$i]))
                                <div class="col-md-12 mb-4">
                                    <div class="character-card">
                                        <img src="{{ asset('images/' . $result[$i]['image']) }}" alt="{{ $result[$i]['name'] }}" width="100">
                                        <p>Name: {{ $result[$i]['name'] }}</p>
                                        <p>Stars: @for ($j = 0; $j < $result[$i]['stars']; $j++) ★ @endfor</p>
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="text-center">Right Characters</h3>
                    <div class="row">
                        @for ($i = 5; $i < 10; $i++)
                            @if (isset($result[$i]))
                                <div class="col-md-12 mb-4">
                                    <div class="character-card">
                                        <img src="{{ asset('images/' . $result[$i]['image']) }}" alt="{{ $result[$i]['name'] }}" width="100">
                                        <p>Name: {{ $result[$i]['name'] }}</p>
                                        <p>Stars: @for ($j = 0; $j < $result[$i]['stars']; $j++) ★ @endfor</p>
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.loading').show();
            setTimeout(function() {
                $('.characters').fadeIn();
                $('.loading').hide();
                $('.warp-button').fadeIn();
            }, 10000); 

            $('.skip-button').click(function() {
                
                $('.characters').fadeIn();
                $('.loading').hide();
                $('.warp-button').fadeIn();
            });
        });
    </script>
</body>

</html>
