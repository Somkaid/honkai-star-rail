<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>สุ่มตัวละคร</title>
    <style>
        .btn {
            font-size: 1.2rem; 
            padding: 10px 20px; 
            border-radius: 8px; 
        }

        .btn-primary {
            background-color: #007bff; 
            border-color: #007bff; 
        }

        .btn-success {
            background-color: #28a745; 
            border-color: #28a745; 
        }

        .btn:hover {
            opacity: 0.8; 
        }

        .container {
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h1>สุ่มตัวละคร</h1>
    <a href="{{ route('randomCharacter') }}" class="btn btn-primary btn-lg mx-2">สุ่มตัวละคร 1 ตัว</a>
    <a href="{{ route('randomTenCharacters') }}" class="btn btn-success btn-lg mx-2">สุ่มตัวละคร 10 ตัว</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
