@extends('layouts.master')

@section('content')

    <form action="{{ route('courses.store') }}" method="post">
        @csrf
        <div class="p-20">

        <div class="mb-3">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Name Course</label>
            <input type="text" name="name" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        </div>

        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900">Price Course</label>
            <input type="text" name="price" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        </div>

            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                submit
            </button>
        </div>
    </form>


@endsection
