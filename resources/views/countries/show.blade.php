
<x-layout>

    <div class="container">
        <h1>Country Details: {{ $country->name }}</h1>

        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> {{ $country->name }}</li>
            <li class="list-group-item"><strong>Area (km²):</strong> {{ $country->area }}</li>
            <li class="list-group-item"><strong>Population:</strong> {{ $country->population }}</li>
        </ul>

        <a href="{{ route('countries.edit', $country) }}" class="btn btn-primary mt-3">Edit</a>
        <a href="{{ route('countries.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</x-layout>
