<div class="container">
    <h1>Countries List</h1>

    <a href="{{ route('countries.create') }}" class="btn btn-success mb-3">Add New Country</a>

    @isset($countries)
        @if($countries->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Area (km²)</th>
                        <th>Population</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($countries as $country)
                        <tr>
                            <td>{{ $country->name }}</td>
                            <td>{{ number_format($country->area) }}</td>
                            <td>{{ number_format($country->population) }}</td>
                            <td>
                                <!-- Action buttons -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info">No countries found.</div>
        @endif
    @else
        <div class="alert alert-warning">Countries data not available.</div>
    @endisset
</div>