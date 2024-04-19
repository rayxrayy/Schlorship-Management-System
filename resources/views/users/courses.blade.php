<x-app-layout>
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <h1 style='font-size:41px;'>You can add any courses here!</h1>
    <h2 style='font-size:18px;'>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2>

    <div class="course-row">
        <div class="course-column">
            <x-button class="add-course-btn">add courses</x-button>
        </div>
        <div class="course-column"><img src="\images\coursesd.svg" alt=""></div>
    </div>

    <div style="padding-bottom:50px" ;>
        <h1>All Courses</h1>
        <h2>
            <p>Total number of courses: {{ \App\Models\Course::count() }}</p>

        </h2>
    </div>

    <div class="recent-orders">
        <table id="category_data">
            <thead>

                <tr>
                    <th>S.N</th>
                    <th>Course Name</th>
                    <th>Course Code</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td class="sn">1</td>
                    <td>{{ $course->coursename }}</td>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->department }}</td>
                    <td class="action">
                        <x-button onclick=" openEditForm()"><span class="material-icons-sharp">edit</span>
                        </x-button>
                        <a href="{{ route('courses.destroy', $course->id) }}"
                            onclick="event.preventDefault(); if(confirm('Are you sure?')) { document.getElementById('delete-course-{{ $course->id }}').submit(); }"
                            style="margin-left: 5px;">
                            <x-button><span class="material-icons-sharp">delete</span></x-button>
                        </a>
                        <form id="delete-course-{{ $course->id }}" action="{{ route('courses.destroy', $course->id) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{ $courses->links() }}</div>
    <div class="foot" style="padding-top:20%" ;></div>

    <!-- <div id="popup-form" class="popup-form">

        <form action="{{ route('store.course') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-25">
                    <label for="name">Course Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="coursename" name="coursename" placeholder="Enter the Course name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="code">Course Code</label>
                </div>
                <div class="col-75">
                    <input type="text" id="code" name="code" placeholder="Enter the course code ..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="module">Modules</label>
                </div>
                <div class="col-75">
                    <input type="text" id="module" name="module" placeholder="Enter the modules ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="department">Department</label>
                </div>
                <div class="col-75">
                    <select id="dept" name="department">
                        <option value="science">---Select department---</option>
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                        <option value="humanities">Humanities</option>
                        <option value="engineering">Engineering</option>
                        <option value="socialsciences">Social Sciences</option>
                        <option value="business">Business</option>
                        <option value="arts">Arts</option>
                        <option value="healthsciences">Health Sciences</option>
                        <option value="education">Education</option>
                        <option value="informationtechnology">Information Technology</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fee">Fee Details</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fee" name="fee" placeholder="Enter the amount of fee...">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="description">Description</label>
                </div>
                <div class="col-75">
                    <textarea id="description" name="description" placeholder="Write something .."
                        style="height:150px"></textarea>
                </div>
            </div>
            <div class="row">
                <x-button type="submit" value="Submit">submit
                </x-button>
            </div>
        </form>
        <x-button class="close-btn" onclick="closeForm()"> <img src="\images\cancel.png" alt="Close Icon"
                style="max-width: 10px;">
            </x-buttton>
    </div> -->

    <div id="popup-edit-form" class="popup-form">
        <form method="post" action="{{ route('course.update', $course->id) }}" class="form-container">
            @csrf
            @method('PATCH')
            <h1>Edit course</h1>
            @foreach($courses as $course)
            <div class="row">
                <div class="col-25">
                    <label for="name">Course Name</label>
                </div>
                <div class="col-75">
                    <input type="text" value="{{ $course->coursename }}" id="coursename" name="coursename"
                        placeholder="Enter the Course name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="code">Course Code</label>
                </div>
                <div class="col-75">
                    <input type="text" value="{{ $course->code }}" id="code" name="code"
                        placeholder="Enter the course code ..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="module">Modules</label>
                </div>
                <div class="col-75">
                    <input type="text" value="{{ $course->module }}" id="module" name="module"
                        placeholder="Enter the modules ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="department">Department</label>
                </div>
                <div class="col-75">
                    <select id="dept" value="{{ $course->department }}" name="department">
                        <option value="science">---Select department---</option>
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                        <option value="humanities">Humanities</option>
                        <option value="engineering">Engineering</option>
                        <option value="socialsciences">Social Sciences</option>
                        <option value="business">Business</option>
                        <option value="arts">Arts</option>
                        <option value="healthsciences">Health Sciences</option>
                        <option value="education">Education</option>
                        <option value="informationtechnology">Information Technology</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fee">Fee Details</label>
                </div>
                <div class="col-75">
                    <input type="text" value="{{ $course->fee }}" id="fee" name="fee"
                        placeholder="Enter the amount of fee...">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="description">Description</label>
                </div>
                <div class="col-75">
                    <textarea id="description" value="{{ $course->description }}" name="description"
                        placeholder="Write something .." style="height:150px"></textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $course->id }}">
            @endforeach
            <div class="row">
                <x-button type="submit" value="Submit">edit
                </x-button>
            </div>
            <button type="button" class="close-btn" onclick="closeEditForm()">
                <span class="material-icons-sharp">close</span>
            </button>

            <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
    </div>
</x-app-layout>
<script>
function openEditForm() {
    document.getElementById('popup-edit-form').style.display = 'block';
}

function closeEditForm() {
    document.getElementById('popup-edit-form').style.display = 'none';

}

let get_me_sn = document.getElementsByClassName("sn")
for (let i = 0; i < get_me_sn.length; i++) {
    get_me_sn[i].textContent = i + 1

}
</script>