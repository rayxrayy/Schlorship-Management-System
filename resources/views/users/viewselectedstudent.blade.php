<x-app-layout>
    @if(isset($message))
    <p style="color:red;">{{ $message }}</p>
    @endif
    <h1 style='font-size:30px;'>These are the students that got selected for <span style="color:
            red;">{{ auth()->user()->name }}</span> !
    </h1>
    <h2 style='font-size:18px;'>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2><br>
    <h1>
        <p style='font-size:18px; color:#595bd4;'>Total selected students: {{ $selectedStudentsCount }}</p>
    </h1>

    <div class="recent-orders">
        <table id="category_data">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Number</th>
                </tr>
            </thead>

            <tbody>
                @foreach($selectedstudents as $key => $student)
                <tr>

                    <div class="container">
                        <div class="profile">
                            <div class="profile-image">

                            </div>
                            <!-- Other student details -->
                        </div>
                    </div>
                    <td>{{ $key + $selectedstudents->firstItem() }}</td>
                    <td>
                        @if ($student->profile_image)
                        <img src="{{ asset('storage/'.$student->profile_image) }}" alt="Profile Image"
                            style="max-width: 200px; display: inline;border-radius: 50%;">

                        @endif
                    </td>
                    <td>{{ $student->fullname }}</td>
                    <td>{{ $student->major }}</td>
                    <td>{{ $student->number }}</td>
                    <td>
                    <td>
                        <a href="{{ route('viewsingleselectedstudents', ['id' => $student->id]) }}">All Details</a>
                    </td>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div>{{ $selectedstudents->links() }}</div>
    <div class="foot" style="padding-top:20%" ;></div>
</x-app-layout>