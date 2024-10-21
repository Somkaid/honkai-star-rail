<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honkai Star Rail</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: url('{{ asset('images/Home.png') }}') no-repeat center center;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
        }

        .container {
            display: flex;
            height: 80vh;
            padding: 10px;
            justify-content: space-between;
        }

        .left-panel {
            width: 10%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-radius: 10px;
        }

        .left-panel a {
            display: block;
            margin-bottom: 20px;
        }

        .left-panel img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            cursor: pointer;
        }

        .main-panel {
            width: 75%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }

        .main-panel h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .main-panel img {
            width: 400px;
            height: auto;
            margin-bottom: 20px;
        }

        .main-panel p {
            font-size: 1.2rem;
        }

        .button-group {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            width: 100%;
        }

        .button-group .action-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 20px;
        }

        .button-group button {
            margin: 10px 0;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 200px;
        }

        .button-group button:hover {
            background-color: #45a049;
        }
    </style>
    <div class="text-right" style="position: relative;">
        <div style="position: absolute; right: 20px; top: 20px;">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/home.gif') }}" alt="Back to Home" style="width: 150px; height: auto;">
            </a>
        </div>
    </div>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/character1.png') }}" alt="Character 1">
            </a>
            <a href="{{ route('home2') }}">
                <img src="{{ asset('images/character2.png') }}" alt="Character 2">
            </a>
            <a href="{{ route('home3') }}">
                <img src="{{ asset('images/character3.png') }}" alt="Character 3">
            </a>
        </div>
        <div class="main-panel">
            <h1>Butterfly on Swordtip</h1>
            <p> Every 10 Warps guarantees a 4-star or above entity </p>
            <img src="{{ asset('images/seele.png') }}" alt="Seele Character">

            <div style="margin-right: 20px;">
                <a href="{{ route('randomCharacter2') }}">
                    <img src="{{ asset('images/warp1.png') }}" alt="Warp 1" class="warp-button" style="width: 150px; height: auto; margin-right: 5cm;">
                </a>
                <a href="{{ route('randomTenCharacters2') }}">
                    <img src="{{ asset('images/warp10.png') }}" alt="Warp 10" class="warp-button" style="width: 150px; height: auto;">
                </a>
            </div>
        </div>
    </div>
</body>
</html>
