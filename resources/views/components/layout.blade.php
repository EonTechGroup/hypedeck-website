<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resource/js/app.js'])
</head>
<body>
<header>
    <x-header></x-header>
</header>

<main class="pt-20">
    <x-footer></x-footer>
</main>
</body>
</html>
