@vite('resources/js/app.js')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.min.js"></script>
    <script src="{{ asset("assets/js/app.js") }}"></script>
    <link rel='stylesheet' href="{{ asset("assets/css/app.css") }}"/>
</head>
<body>