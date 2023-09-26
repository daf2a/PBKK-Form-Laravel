@extends('dashboard.layout')

@section('content')
    <form action="{{ route('formulir.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

        <h2 class="text-4xl mt-3 mb-3 font-extrabold text-gray-700 dark:text-white">Form</h2>
    
        <div class="mt-3 mr-3">
            <label for="name" class="block mb-2 text-sm font-medium">Your name</label>
            <input value="{{old('name')}}" type="text" id="name" name="name" class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Muh Daffa">
        </div>
                
        <div class ="mt-3 mr-3">
            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
            <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>    
                    </svg>
                </span>
                <input value="{{old('brand')}}" type="text" id="brand" name="brand" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nike">
            </div>
        </div>

        <div class="flex flex-wrap mr-3">
            <div class="flex-grow w-1/2 pr-3">
                <div class="mt-3">
                    <label for="size" class="block mb-2 text-sm font-medium">Shoe Size</label>
                    <input value="{{old('size')}}" type="text" name="size" id="size" class="rounded-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="7.5">
                </div>
            </div>

            <div class="flex-grow w-1/2 pl-3">
                <div class="mt-3">
                    <label for="region" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                    <select id="region" name="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Amerika Serikat (US)</option>
                        <option>Inggris (UK)</option>
                        <option>Eropa (EU)</option>
                        <option>Asia (AS)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class ="mt-3 mr-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="picture">Upload file</label>
            <input value="{{old('picture')}}" name="picture" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="picture_help" id="picture" type="file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="picture_help">File must be png/jpg/jpeg with maximum size 2 MB</div>
        </div>

        <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

@endsection
