@extends('welcome')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-bold mb-6">All Teachers</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($teachers as $teacher)
                    <div class="bg-gray-50 p-6 rounded-lg shadow">
                        <h2 class="text-xl font-semibold">{{ $teacher->name }}</h2>
                        <p class="text-gray-600 mt-2">
                            <span class="font-medium">Hobbies:</span> 
                            {{ $teacher->hobbies ?? 'None specified' }}
                        </p>
                        <p class="text-gray-600 mt-2">
                            <span class="font-medium">Member since:</span> 
                            {{ $teacher->entry_date->format('d M Y') }}
                        </p>
                        <div class="mt-4">
                            <h3 class="font-medium">Courses:</h3>
                            <ul class="list-disc list-inside mt-2">
                                @forelse($teacher->courses as $course)
                                    <li>{{ $course->name }}</li>
                                @empty
                                    <li>No courses assigned</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection