<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
<x-app-layout>

    <section id="section-course" class="ai-felpx;lowship--course bg-white">

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <h1 style='font-size:41px;'>You can add any courses here!</h1>
        <h2 style='font-size:18px;'>
            <p>Just make sure that you have extra courses from other so that student would get limitted options and easy
                to
                apply.</p>
            <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
        </h2>
        <div class="course-row">
            <div class="course-column">
                <button onclick="openModal()" class="btn fill-button" role="button" aria-disabled="true"
                    id="apply_button-course-overview">add courses</button>

            </div>
            <div class="course-column"><img src="\images\coursesd.svg" alt=""></div>
        </div>
        <div style="padding-bottom:50px" ;>
            <h1 style='font-size:30px;'>All Courses</h1>
            <h2 style='font-size:18px;'>
                <p>Total number of courses: {{ auth()->user()->courses()->count() }}</p>
            </h2>
        </div>

        <div class="recent-orders">
            <table id="category_data">
                <thead>

                    <tr>

                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($courses as $course)
                    @if($course->user_name === auth()->user()->name)
                    <tr>
                        <td>{{ $course->coursename }}</td>
                        <td>{{ $course->code }}</td>
                        <td>{{ $course->department }}</td>
                        <td class="action">
                            <x-button onclick="openeditModal({{ $course }})"><span
                                    class="material-icons-sharp">edit</span>
                            </x-button>
                            <a href="{{ route('courses.destroy', $course->id) }}"
                                onclick="event.preventDefault(); if(confirm('Are you sure?')) { document.getElementById('delete-course-{{ $course->id }}').submit(); }"
                                style="margin-left: 5px;">
                                <x-button><span class="material-icons-sharp">delete</span></x-button>
                            </a>
                            <form id="delete-course-{{ $course->id }}"
                                action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="foot" style="padding-top:20%" ;></div>
    </section>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <!-- enctype="multipart/form-data"you ensure that the form data, including any uploaded files, is properly encoded and sent to the server for processing. This is essential for handling file uploads in your form. -->
            <form id="applicationForm" action="{{ route('store.course') }}" method="post" enctype="multipart/form-data">
                @csrf


                <div class="row">
                    <div class="col-25">
                        <label for="name">Course Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="coursename" placeholder="Enter the Course name.." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="code">Course Code</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="code" placeholder="Enter the course code .." required>
                    </div>
                </div>
                <div id="moduleContainer">
                    <div class="row">
                        <div class="col-25">
                            <label for="module">Modules</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="module" name="module[]" placeholder="Enter the modules .."
                                required>

                            <button style="font-size:28px;" type="button" class="add-module-btn"
                                onclick="addModule()">+</button>

                        </div>

                    </div>
                </div>


                <div class=" row">
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
                        <input type="text" name="fee" placeholder="Enter the amount of fee..." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="description">Description</label>
                    </div>
                    <div class="col-75">
                        <textarea name="description" placeholder="Write something .." required
                            style="height:150px"></textarea>
                    </div>
                </div>
                </section>
                <div style="padding-top: 20px">
                    <x-button type="submit" value="Submit">submit
                    </x-button>
                </div>
            </form>

        </div>
    </div>

    <div class="modal" id="editModal">
        <div class="modal-content">
            <span class="close" onclick="closeeditModal()">&times;</span>
            <!-- enctype="multipart/form-data"you ensure that the form data, including any uploaded files, is properly encoded and sent to the server for processing. This is essential for handling file uploads in your form. -->
            <form id="applicationForm" action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input id="course-id" type="hidden" name="id" />
                <div class="row">
                    <div class="col-25">
                        <label for="name">Course Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="coursename" name="coursename" placeholder="Enter the Course name.."
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="code">Course Code</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="code" name="code" placeholder="Enter the course code .." required>
                    </div>
                </div>
                <div id="editmoduleContainer">
                    <div class="row">
                        <div class="col-25">
                            <label for="module">Modules</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="module" class="module[]" name="module"
                                placeholder="Enter the modules .." required>

                            <button style="font-size:28px;" type="button" class="add-module-btn"
                                onclick="addeditModule()">+</button>

                        </div>

                    </div>
                </div>
                <div class=" row">
                    <div class="col-25">
                        <label for="department">Department</label>
                    </div>
                    <div class="col-75">
                        <select id="department" name="department">
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
                        <input type="text" id="fee" name="fee" placeholder="Enter the amount of fee..." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="description">Description</label>
                    </div>
                    <div class="col-75">
                        <textarea id="description" name="description" placeholder="Write something .." required
                            style="height:150px"></textarea>
                    </div>
                </div>
                </section>
                <div style="padding-top: 20px">
                    <x-button type="submit" class='btn'>Save changes
                    </x-button>
                </div>
            </form>

        </div>
    </div>

</x-app-layout>
<script>
// Store scroll position when navigating to a different page
window.addEventListener('beforeunload', function() {
    sessionStorage.setItem('scrollPosition', window.scrollY);
});

// Restore scroll position when returning to the page
window.addEventListener('load', function() {
    var scrollPosition = sessionStorage.getItem('scrollPosition');
    if (scrollPosition !== null) {
        window.scrollTo(0, parseInt(scrollPosition));
        sessionStorage.removeItem('scrollPosition');
    }
});

function addModule() {
    var moduleContainer = document.getElementById('moduleContainer');
    var newRow = document.createElement('div');
    newRow.className = 'row';
    newRow.innerHTML = `
            <div style="padding-left: 10pc;">
            <input type="text" class="module" name="module[]" placeholder="Enter the modules .."
                                required>
                                </div>
        `;
    moduleContainer.appendChild(newRow);
}

function addeditModule() {
    var moduleContainer = document.getElementById('editmoduleContainer');
    var newRow = document.createElement('div');
    newRow.className = 'row';
    newRow.innerHTML = `
            <div style="padding-left: 10pc;">
            <input type="text" class="module" name="module[]" placeholder="Enter the modules .."
                                required>
                                </div>
        `;
    moduleContainer.appendChild(newRow);
}

function closeeditModal() {
    var modal = document.getElementById("editModal");
    modal.style.display = "none";
}



function openeditModal(course) {
    document.getElementById('course-id').value = course.id;
    document.getElementById('coursename').value = course.coursename;
    document.getElementById('code').value = course.code;
    document.getElementById('fee').value = course.fee;
    document.getElementById('description').value = course.description;
    document.getElementById('module').value = course.module;
    document.getElementById('department').value = course.department;
    document.getElementById('editModal').style.display = "block";

    console.log(course.id);
    console.log(course.coursename);
    console.log(course.code);
    console.log(course.fee);
    console.log(course.description);
    console.log(course.module);
    console.log(course.department);

}
</script>