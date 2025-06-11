<x-layout>
    <div class="container">
        <h1>Edit Country: {{ $country->name }}</h1>

        <form action="{{ route('countries.update', $country) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" required
                       class="form-control" value="{{ old('name', $country->name) }}">
            </div>

            <div class="form-group">
                <label>Area (km²):</label>
                <input type="number" name="area" step="0.01" required
                       class="form-control" value="{{ old('area', $country->area) }}">
            </div>

            <div class="form-group">
                <label>Population:</label>
                <input type="number" name="population" required
                       class="form-control" value="{{ old('population', $country->population) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Country</button>
        </form>

        <!-- Destroy/Delete form -->
        <form action="{{ route('countries.destroy', $country) }}" method="POST" style="margin-top: 20px;">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this country?')">
                Delete Country
            </button>
        </form>
    </div>
</x-layout>
