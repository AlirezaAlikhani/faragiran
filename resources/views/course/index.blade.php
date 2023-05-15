@extends('layouts.master')

@section('content')
 <div class="p-20">
  <a href="{{ route('courses.create') }}" class="bg-green-500 mb-10 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
    New Course
  </a>
  <div class="flex flex-col ">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead
              class="border-b bg-white font-medium">
              <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4">Course name</th>
                <th scope="col" class="px-6 py-4">Price</th>
                <th scope="col" class="px-6 py-4">creation date</th>
                <th scope="col" class="px-6 py-4">Setting</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr
                        class="border-b bg-neutral-100 ">
                      <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                      <td class="whitespace-nowrap px-6 py-4">{{ $course->name }}</td>
                      <td class="whitespace-nowrap px-6 py-4">$ {{ $course->price }}</td>
                      <td class="whitespace-nowrap px-6 py-4">{{ $course->created_at }}</td>
                      <td class="flex mt-2">
                          <a href="{{ route('courses.edit' , $course->id) }}" class="bg-blue-500 mr-2  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                              Edit
                          </a>

                          <a href="{{ route('lessons.create' , $course->id) }}" class="bg-yellow-400 mr-2  hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                              Add Lesson
                          </a>

                          <a href="{{ route('courses.show' , $course->id) }}" class="bg-cyan-400 mr-2  hover:bg-cyan-500 text-white font-bold py-2 px-4 rounded">
                              Show
                          </a>

                       <form action="{{  route('courses.destroy' , $course->id) }}"
                          class="d-inline" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" x-data="{{ $course->id }}"
                              class="delete border-none bg-transparent text-decoration-none text-danger">
                              <button href="" class="bg-red-400 mr-2  hover:bg-red-500 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                      </form>

                      </td>
                    </tr>
                @endforeach
               </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
 </div>
@endsection
