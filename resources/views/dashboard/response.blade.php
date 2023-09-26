
@extends('dashboard.layout')

@section('content')

    <h2 class="text-4xl mt-3 mb-3 font-extrabold text-gray-700 dark:text-white">Responses</h2>
    
    <table class="table">
        <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Shoe Size</th>
            <th>Region</th>
            <th>Picture</th>
        </tr>
        </thead>
        <tbody>
        @foreach($formulirs as $formulir)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $formulir->name }}</td>
                <td>{{ $formulir->brand }}</td>
                <td>{{ $formulir->size }}</td>
                <td>{{ $formulir->region }}</td>
                <td>
                    <img src="{{ asset('storage/' . $formulir->avatar) }}" alt="{{ $formulir->name }}" width="100">
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
