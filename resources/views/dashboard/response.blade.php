
@extends('dashboard.layout')

@section('content')

    <h2 class="text-4xl mt-6 mb-3 font-extrabold text-gray-700 dark:text-white">Responses</h2>
    
    <table class="table">
        <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Shoe Size</th>
            <th>Region</th>
            <th>Avatar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($formulirs as $formulir)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $formulir->name }}</td>
                <td>{{ $formulir->email }}</td>
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
