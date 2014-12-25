<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Master Template</title>
    
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
   
</head>
<body>
    <div class="container">
    @yield('content')
    </div>
</body>
</html>
