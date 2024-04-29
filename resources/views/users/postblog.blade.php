<x-app-layout>
    <!-- Display courses -->
    <h2>Courses</h2>
    <ul>
        @foreach ($courses as $course)
        <li>{{ $course->coursename }}</li>
        @endforeach
    </ul>

</x-app-layout>