<x-app-layout>
    <h1>These are the students that got selected!</h1>
    <h2>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2>

    <div class="recent-orders">
        <table id="category_data">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Number</th>
                </tr>
            </thead>

            <tbody>
                @foreach($selectedstudents as $student)
                <tr>
                    <td class="image-container"><img src="/images/college.png" alt="">
                    </td>
                    <td>{{ $student->fullname }}</td>
                    <td>{{ $student->major }}</td>
                    <td>{{ $student->number }}</td>
                    <td>
                        <a href="{{ route('viewsingleselectedstudents')}}">view more...</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form action="/selectedstudents"></form>

</x-app-layout>