<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Car Owners</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="{{ route("cars.index") }}"
                       class="nav-link active" aria-current="page"><span class="h4">Cars</span></a>
                    <a href="{{ route("owners.index") }}" class="nav-link"><span class="h4">Owners</span></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="row">
        @yield("content")
    </div>
</div>
</body>
</html>
