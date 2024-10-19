<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Pull</title>
    <style>
        .character-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .character {
            width: 18%;
            text-align: center;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h1>Character Pull</h1>

    <div class="container">
        @for ($i = 0; $i < 2; $i++) 
            <div class="character-row">
                @for ($j = 0; $j < 5; $j++) 
                    <div class="character">
                        {{ $characters[$i * 5 + $j] }}
                    </div>
                @endfor
            </div>
        @endfor
    </div>

</body>
</html>
