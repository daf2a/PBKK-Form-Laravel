@foreach($formulirs as $formulir)
    <div>
        <h3>{{ $formulir->nama }}</h3>
        <p>{{ $formulir->email }}</p>
        <p>{{ $formulir->alamat }}</p>
        <p>Nilai: {{ $formulir->nilai }}</p>
        <img src="{{ asset('uploads/' . $formulir->gambar) }}" alt="{{ $formulir->nama }}" width="200">
    </div>
@endforeach

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
