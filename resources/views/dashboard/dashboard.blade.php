@extends('dashboard.layout')

@section('content')
<h2 class="text-4xl mt-3 mb-3 font-extrabold text-gray-700 dark:text-white">Dashboard</h2>

<a href="#" class="block p-6 mr-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Assignment Week 4 PBKK - Form in Laravel</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Buatlah satu halaman formulir dan halaman hasil isian dengan ketentuan sebagai berikut:</p>
    <div>
    <ul class="list-disc pl-6">
        <li class="font-normal text-gray-700 dark:text-gray-400">Berisi minimal 5 field isian</li>
        <li class="font-normal text-gray-700 dark:text-gray-400">Dapat mengunggah dan menampilkan file gambar</li>
        <li class="font-normal text-gray-700 dark:text-gray-400">File yang diunggah harus berekstensi .png/.jpg/.jpeg dan berukuran maksimal 2 MB</li>
        <li class="font-normal text-gray-700 dark:text-gray-400">Ada validasi</li>
        <li class="font-normal text-gray-700 dark:text-gray-400">Ada 1 field yang bisa menginputkan nilai double antara 2.50 s.d. 99.99</li>
        <li class="font-normal text-gray-700 dark:text-gray-400">Memberikan flash message success jika form berhasil diinputkan sesuai ketentuan</li>
    </ul>
    </div>
</a>

@endsection
