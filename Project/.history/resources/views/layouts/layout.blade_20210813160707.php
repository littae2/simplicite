<!--This is the Main layout page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="mlxnBRgEB1AbPWkhP1fOm5sUhDzONcfLGmqMOlHY">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/b07d89ef49.js" crossorigin="anonymous"></script>

    <!--  JQUEURY-->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        
    <!--  BS -->
    <link rel="stylesheet" href="{{asset('css/simplicite.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <!--JS -->
    

    
    
</head>
<body>

  @include('layouts.navbar')

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

@yield('content')
@
</body>
</html>


