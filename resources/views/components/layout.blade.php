
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
<header class="bg-gray-800 text-white p-4 mb-6">
    <nav class="container mx-auto">
        <ul class="flex space-x-6">
            <li><a href="{{ route('countries.index') }}" class="hover:text-gray-300">All Countries</a></li>
            <li><a href="{{ route('countries.create') }}" class="hover:text-gray-300">Add Country</a></li>
        </ul>
    </nav>
</header>
