{{-- @extends('layouts.backoffice') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container p-5">

        
    @yield('content')


        <div class="d-flex justify-content-end">
            <a class="btn "  href="/">Return WebSite</a>
        </div>
    </div>

    
</body>
</html>
