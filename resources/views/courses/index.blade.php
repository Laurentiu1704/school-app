@extends('welcome')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-bold mb-6">All Courses</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($courses as $course)
                    <div class="bg-gray-50 p-6 rounded-lg shadow">
                        <h2 class="text-xl font-semibold">{{ $course->name }}</h2>
                        <p class="text-gray-600 mt-2">
                            <span class="font-medium">Description:</span> 
                            {{ $course->description }}
                        </p>
                        <div class="mt-4">
                            <h3 class="font-medium">Teacher:</h3>
                            <p class="mt-2">
                                {{ $course->teacher->name }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection