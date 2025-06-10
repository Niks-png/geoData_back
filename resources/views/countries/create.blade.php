<?php
use App\Http\Controllers\CountryController;
?>
<x-layout>
    <div class="container">
        <h1>Create New Country</h1>

        <form action="{{ route('countries.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" required
                       class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label>Area (km²):</label>
                <input type="number" name="area" step="0.01" required
                       class="form-control" value="{{ old('area') }}">
            </div>

            <div class="form-group">
                <label>Population:</label>
                <input type="number" name="population" required
                       class="form-control" value="{{ old('population') }}">
            </div>

            <button type="submit" class="btn btn-success">Create Country</button>
        </form>
    </div>
</x-layout>
