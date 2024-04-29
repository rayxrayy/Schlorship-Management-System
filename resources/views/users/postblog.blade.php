<x-app-layout>
    <!-- Display courses -->
    <h2>Courses</h2>
    <ul>
        @foreach ($courses as $course)
        <li>{{ $course->coursename }}</li>
        @endforeach

    </ul>
    // Search for colleges
    $colleges = User::where('name', 'LIKE', "%{$query}%")->get();

    // Search for students
    $students = Form::where('fullname', 'LIKE', "%{$query}%")->get();

    $selectedstudents = ApprovedStudents::where('fullname', 'LIKE', "%{$query}%")->get();

</x-app-layout>