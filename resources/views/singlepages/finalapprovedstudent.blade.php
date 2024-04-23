<x-app-layout>
    <h1 style='font-size:30px;'>These are the final student who got scholorship in <span style="color:
            red;">{{ $user }}</span> !
    </h1>
    <h2 style='font-size:18px;'>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2><br>
    <h1>
        <p style='font-size:18px; color:#595bd4;'>Total selected students: {{ $finalstudentcount }}</p>
    </h1>
    <div class="recent-orders">
        <table id="category_data">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tbody>
                @foreach($finalstudentview as $key => $student)
                <tr>

                    <div class="container">
                        <div class="profile">
                            <div class="profile-image">

                            </div>
                            <!-- Other student details -->
                        </div>
                    </div>
                    <td>{{ $key + $finalstudentview->firstItem() }}</td>
                    <td>
                        @if ($student->image)
                        <img src="{{ asset('storage/app/student-images/'.$student->profile_image) }}"
                            alt="Profile Image" style="max-width: 100px;">

                        @endif
                    </td>
                    <td>{{ $student->fullname }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->description }}</td>
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
    <div>{{ $finalstudentview->links() }}</div>
    <div class="foot" style="padding-top:20%" ;></div>
</x-app-layout>