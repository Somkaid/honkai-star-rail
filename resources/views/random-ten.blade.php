<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Random 10 Characters</title>
    <style>
        .container {
            margin-top: 50px; 
        }
        .character-card {
            border: 1px solid #ddd; 
            padding: 15px; 
            border-radius: 8px;
            text-align: center; 
            margin-bottom: 20px; 
        }
        .btn {
            margin-top: 20px; 
        }
        .loading {
            text-align: center;
            margin-top: 20px;
        }
        .characters {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Random 10 Characters</h1>

        <div class="loading">
            @if (collect($result)->contains('stars', 5)) 
                <img src="{{ asset('images/gif2.gif') }}" alt="Loading..." width="1000" height="800"> 
            @else
                <img src="{{ asset('images/gif1.gif') }}" alt="Loading..." width="1000" height="800">
            @endif
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
                                        <p>Stars: @for($j = 0; $j < $result[$i]['stars']; $j++) ★ @endfor</p>
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
                                        <p>Stars: @for($j = 0; $j < $result[$i]['stars']; $j++) ★ @endfor</p>
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('randomCharacter') }}" class="btn btn-primary">สุ่มตัวละคร 1 ตัว</a>
            <a href="{{ route('randomTenCharacters') }}" class="btn btn-success">สุ่มตัวละคร 10 ตัว</a>
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
            }, 10000); 
        });
    </script>
</body>
</html>