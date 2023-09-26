@extends('dashboard.layout')

@section('content')
    <form action="{{ route('formulir.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

                
        <div class="mt-6 mr-3">
            <label for="username" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Your name</label>
            <input type="text" id="username" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Muh Daffa">
        </div>
                
        <div class ="mt-3 mr-3">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                </span>
                <input type="text" id="email" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="muhdaffa@gmail.com">
            </div>
        </div>

        <div class="flex flex-wrap mr-3">
            <div class="flex-grow w-1/2 pr-3">
                <div class="mt-3">
                    <label for="size" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Shoe Size</label>
                    <input type="text" id="size" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="7.5">
                </div>
            </div>

            <div class="flex-grow w-1/2 pl-3">
                <div class="mt-3">
                    <label for="region" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                    <select id="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Amerika Serikat (US)</option>
                        <option>Inggris (UK)</option>
                        <option>Eropa (EU)</option>
                        <option>Asia (AS)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class ="mt-3 mr-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">File must be png/jpg/jpeg with maximum size 2 MB</div>
        </div>

        <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

@endsection
