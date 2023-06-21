<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">

    <!-- Styles -->
    <style>

    </style>
</head>

<body>

    <div class="form-control text-center p-5 container mt-4 bg-dark">
        <div class="bg-warning m-5 p-5">
            <h3>Gerakan Infak Beras <br>--SOLO--</h3>
        </div>
        <div class="text-center m-5">
            <div class=''>
                @auth
                <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
                @endauth
                @guest
                <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                <a href="/calon-anggota/create" class="btn btn-success">Daftar Anggota</a>
                @endguest
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
