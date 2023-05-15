@extends('layouts.master')

@section('content')
 <div class="p-20">
     <h1 class="font-bold text-2xl">
         Course name : {{ $course->name }}
     </h1>
  <div class="flex flex-col ">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead
              class="border-b bg-white font-medium">
              <tr>
                <th scope="col" class="px-6 py-4">lesson name </th>
              </tr>
            </thead>
            <tbody>
                @forelse ($course->lessons as $lesson)
                    <tr class="border-b bg-neutral-100">
                      <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $lesson->name }}</td>
                    </tr>
                @empty
                    <p class="text-center text-muted">There is no lesson</p>
                @endforelse
               </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
 </div>
@endsection
