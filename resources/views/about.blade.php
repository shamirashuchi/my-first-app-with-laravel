<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/')}}css/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-expand  navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav>


<section class="bg-info-subtle py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>This is about page</h1>
            </div>
        </div>
    </div>
</section>





<script src="{{ asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>

