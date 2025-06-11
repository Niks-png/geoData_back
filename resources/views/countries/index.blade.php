<x-layout>
</x-layout>
<div class="container">
    <h1>Countries List</h1>


    @isset($countries)
        @if($countries->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name:</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($countries as $country)
                        <tr>
                            <td>
                                <a href="{{ route('countries.show', $country->id) }}">
                                    {{ $country->name }}
                                </a>
                            </td>
                            <td>
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
