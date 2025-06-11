
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoData App</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
    <x-navigation />

    <main class="py-8">
        {{ $slot }}
    </main>
</body>
</html>

