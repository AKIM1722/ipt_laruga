<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEw3lA6y5u7FuKFaKq5I5GzF6m6eL" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-QL8yr3HKI6xbQ/x66UKIqJOGgP5N1MlvB+p2WVXb8KxIGWWzK4VfTBZRe3CwrtjI" crossorigin="anonymous"></script>
</body>
</html>
