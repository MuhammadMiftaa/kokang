<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-hidde">

    <x-navbar />

    {{ $slot }}

    <x-scrolling-logo />

    <x-footer />

    <script src="https://kit.fontawesome.com/68cfd0271a.js" crossorigin="anonymous"></script>
</body>

</html>
