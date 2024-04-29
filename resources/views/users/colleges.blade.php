<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
<x-app-layout>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h1 style='font-size:41px;'>You can choose any college here to apply!</h1>
    <h2 style='font-size:18px;'>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy
            to
            apply.</p>
    </h2>
    <section id="section-benefit" class="ai-fellowship--benefit py-5">
        <article class="container-xxl">
            <div class="row justify-content-center px-lg-5 px-xxl-0">
                @foreach($colleges as $college)
                <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="benefits-list bg-white">

                        <img src="{{ asset('storage/'.$college->profile_photo_path) }}" alt="College Photo"
                            class="img-fluid " />
                        <h1>{{ $college->name }}</h1>
                        <ul>

                        </ul>
                        <div class="btn-group">

                            <button class="btn btn-sm btn-outline-secondary"
                                onclick="openModal('{{ $college->name }}', '{{ $college->email }}', {{ json_encode($collegeCourses[$college->name]) }})">View
                                Details</button>
                            <button class="btn btn-sm btn-outline-primary"
                                onclick="openApplyModal('{{ $college->name }}', {{ json_encode($collegeCourses[$college->name]) }})">Apply</button>


                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <div>{{ $colleges->links() }}</div>
        </article>

        <div hidden>
            @foreach ($collegeCourses as $collegeName => $courses)
            <h1>Courses Offered by {{ $collegeName }}</h1>
            @if ($courses->isEmpty())
            <p>No courses found for {{ $collegeName }}</p>
            @else
            <ul>
                @foreach ($courses as $course)
                <li>{{ $course->coursename }}</li>
                @endforeach
            </ul>
            @endif
            @endforeach
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>College Details</h2>
                <div class="college-details">
                    <p style="color: red;"><strong>College:</strong> <span id="collegeName"></span></p>
                    <p style="color: red;"><strong>Email ID:</strong> <span id="collegeEmail"></span></p>
                    <p>If you have any queries related to colleges and courses, you can mail us.</p>
                    <h1 style="color:red;">Courses Offered:</h1>
                    <ul id="courseList"></ul>
                </div>
            </div>
        </div>

        <div id="applyModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeApplyModal()">&times;</span>

                <!-- enctype="multipart/form-data"you ensure that the form data, including any uploaded files, is properly encoded and sent to the server for processing. This is essential for handling file uploads in your form. -->
                <form id="applicationForm" action="{{ route('coursesubmit-form') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <h2>Apply for <span id="collegeField"></span> which provides
                        different courses.

                        <input type="hidden" name="college" id="collegeInput">
                    </h2>
                    <div class="row">
                        <div class="col-25">
                            <label for="course">course</label>
                        </div>
                        <div class="col-75">
                            <select id="courseSelect" name="course">
                            </select>
                            @error('course')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <h2 onclick="toggleFields(this)" style="padding-top: 20px; font-size: 25px;">Personal
                        Information
                        <span style="margin-left: 48%; font-size: 25px;">+</span>
                    </h2>
                    <section class="personalinfo" style="display: none;">
                        <div class="row">
                            <div class="col-25">

                                <label for="profile_image">Add Image:</label>

                            </div>
                            <div class="col-75">
                                <input type="file" id="profile_image" name="profile_image" required>
                                @error('profile_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="name">Full Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fullname" name="fullname" placeholder="Enter your Full name.."
                                    value="{{old('fullname')}}" required>
                                @error('fullname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="dob">Date of Birth</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="dob" name="dob" placeholder="Enter your date of birth .."
                                    value="{{old('dob')}}" required>
                                <span id="dob-error" class="text-danger"></span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col-75">
                                <select id="gender" name="gender">
                                    <option value="">---Select Gender---</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="notsay">Prefer not to say</option>
                                    <option value="others">Others</option>

                                </select>
                                @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <h2>
                            <p>Contact information</p>
                        </h2>
                        <div class="row">
                            <div class="col-25">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="address" name="address"
                                    placeholder="Enter your current address .." value="{{old('address')}}" required>
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="number">Phone number</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="number" name="number" placeholder="Enter your phone number .."
                                    value="{{old('number')}}">

                                <span id="number-error" class="text-danger"></span>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="email" name="email" placeholder="Enter your email .."
                                    value="{{old('email')}}">

                                <span id="email-error" class="text-danger"></span>

                            </div>
                        </div>
                        <h2>
                            <p>Family Details</p>
                        </h2>
                        <div class="row">
                            <div class="col-25">
                                <label for="pname">Parent's Name</label>

                            </div>
                            <div class="col-75">
                                <input type="text" id="pname" name="pname" placeholder="Enter your parent name .."
                                    value="{{old('pname')}}">
                                @error('pname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="pnumber">Phone number</label>

                            </div>
                            <div class="col-75">
                                <input type="text" id="pnumber" name="pnumber"
                                    placeholder="Enter the number of your parents .." value="{{old('pnumber')}}">

                                <span id="pnumber-error" class="text-danger"></span>

                            </div>
                        </div>


                    </section>
                    <h2 onclick="toggleFieldsEdu(this)" style="padding-top: 20px;  font-size: 25px;">
                        Educational
                        Background
                        <span style="margin-left: 41%; font-size: 25px;">+</span>
                    </h2>
                    <section class="edubackground" style="display: none;">
                        <div class="row">
                            <div class="col-25">
                                <label for="qualification">Qualifications</label>
                            </div>
                            <div class="col-75">
                                <select id="qualification" name="qualification">
                                    <option value="">---Select Level that you passed out---</option>
                                    <option value="level">School Level</option>
                                    <option value="plustwo">+2 Level</option>
                                    <option value="bachloer">Bachloer running</option>
                                </select>
                                @error('qualification')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="currentedu">Current Educational institute</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="currentedu" name="currentedu"
                                    placeholder="Enter the name of school or college that you are studying (if any?) .."
                                    value="{{old('currentedu')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="major">Major</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="major" name="major"
                                    placeholder="Enter you course that you got graduate from..."
                                    value="{{old('major')}}">
                                @error('major')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="result">Academic Performance</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="result" name="result"
                                    placeholder="Enter your GPA or Grades (if any ?).." value="{{old('result')}}">
                                @error('result')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </section>
                    <h2 onclick="toggleFieldsDoc(this)" style="padding-top: 20px; font-size: 25px;">
                        Documentation
                        <span style="margin-left: 58%; font-size: 25px;">+</span>
                    </h2>
                    <section class="documentation" style="display: none;">

                        <div class="row">
                            <div class="col-25">

                                <label for="document_citizenship">Choose a Citizenship:</label>
                            </div>
                            <div class="col-75">
                                <input type="file" id="document_citizenship" name="document_citizenship"
                                    value="{{old('document_citizenship')}}">
                                @error('document_citizenship')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">

                                <label for="document_sop">Choose a SOP:</label>
                            </div>
                            <div class="col-75">
                                <input type="file" id="document_sop" name="document_sop"
                                    value="{{old('document_sop')}}">
                                @error('document_sop')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">

                                <label for="document_transcript">Choose a Transcripts:</label>
                            </div>
                            <div class="col-75">
                                <input type="file" id="document_transcript" name="document_transcript"
                                    value="{{old('document_transcript')}}">
                                @error('document_transcript')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <p>You can choose any other document like letter od recomendation or any
                            Scholorships
                            certificates</p>

                        <div class="row">
                            <div class="col-25">

                                <label for="document">Choose a document:</label>
                            </div>
                            <div class="col-75">
                                <input type="file" id="document" name="document" value="{{old('document')}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="description">Description</label>
                            </div>
                            <div class="col-75">

                                <span id="description-error" class="text-danger"></span>

                                <textarea id="description" name="description"
                                    placeholder="Write something not more than 100 words .."
                                    value="{{old('description')}}" style="height:150px"></textarea>
                            </div>
                        </div>
                    </section>

                    <div style="padding-top: 20px">
                        <x-button id="submit-button" type="submit" value="Submit">submit
                        </x-button>
                    </div>
                </form>

            </div>
        </div>
</x-app-layout>

<script>
function openModal(collegeName, collegeEmail, courses) {
    var modal = document.getElementById("myModal");
    var collegeNameElement = document.getElementById("collegeName");
    var collegeEmailElement = document.getElementById("collegeEmail");
    var courseListElement = document.getElementById("courseList");

    collegeNameElement.textContent = collegeName;
    collegeEmailElement.textContent = collegeEmail;

    // Clear existing course list
    courseListElement.innerHTML = "";

    if (courses.length === 0) {
        // No courses found
        var noCoursesMessage = document.createElement("p");
        noCoursesMessage.textContent = "No courses found for " + collegeName;
        courseListElement.appendChild(noCoursesMessage);
    } else {
        // Populate course list
        var courseList = document.createElement("ul");
        courses.forEach(function(course) {
            var listItem = document.createElement("li");
            listItem.textContent = course.coursename;
            courseList.appendChild(listItem);
        });
        courseListElement.appendChild(courseList);
    }

    modal.style.display = "block";
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

function openApplyModal(collegeName, courses) {
    var applyModal = document.getElementById("applyModal");
    var collegeField = document.getElementById("collegeField");
    var courseSelect = document.getElementById("courseSelect");
    var collegeInput = document.getElementById("collegeInput");
    collegeField.textContent = collegeName;

    collegeInput.value = collegeName;
    console.log(collegeName);

    // Clear existing options
    courseSelect.innerHTML = "";

    if (courses.length === 0) {
        // No courses found
        var noCoursesOption = document.createElement("option");
        noCoursesOption.textContent = "No courses found for " + collegeName;
        noCoursesOption.value = "";
        courseSelect.appendChild(noCoursesOption);
    } else {
        // Populate course options
        courses.forEach(function(course) {
            var option = document.createElement("option");
            option.textContent = course.coursename;
            option.value = course.coursename; // Set the value to the course ID or any other identifier
            courseSelect.appendChild(option);
        });
    }
    console.log(courseSelect);
    applyModal.style.display = "block";
}

function closeApplyModal() {
    var applyModal = document.getElementById("applyModal");
    applyModal.style.display = "none";
}
</script>