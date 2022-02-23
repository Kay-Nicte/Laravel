<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Principal.blade.php</title>
</head>
<body>
    <div>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/planets') }}">Planetes</a>
        <a href="{{ url('/superpowers') }}">Superpoders</a>
        <a href="{{ url('/supers') }}">Superheroes</a>
    </div>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>