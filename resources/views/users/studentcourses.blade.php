<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
<style>
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border-radius: 5px;
    max-width: 600px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.course-details p {
    margin: 5px 0;
}

.course-details p span {
    color: #0c10f7;
    font-weight: bold;
}
</style>
<x-app-layout>

    <h1 style='font-size:41px;'>You can choose any courses here to apply!</h1>
    <h2 style='font-size:18px;'>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy
            to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2>
    <section id="section-benefit" class="ai-fellowship--benefit py-5">
        <article class="container-xxl">

            <div class="row justify-content-center px-lg-5 px-xxl-0">
                @php
                $imageIndex = 0;
                @endphp
                @foreach($courses as $course)
                <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">

                    <div class="benefits-list bg-white">
                        <div class="image-container" style="width: 50px;">
                            <img src="{{ asset('images/' . $images[$imageIndex]) }}" alt="College Photo"
                                class="img-fluid ">
                        </div>

                        <h1>{{ $course->coursename }}</h1>
                        <h2>
                            <p>Description:{{ $course->description }}</p>

                        </h2>
                        <div class="summery-title">
                            <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        onclick="openModal('{{ $course->id }}', '{{ $course->coursename }}', '{{ $course->user_name }}', '{{ $course->description }}', '{{ $course->code }}', '{{ $course->module }}', '{{ $course->fee }}', '{{ $course->department }}')"
                                        role="button" aria-disabled="true" id="apply_button-course-overview">View
                                        Details</button>

                                    <button class="btn btn-sm btn-outline-primary"
                                        onclick="openApplyModal('{{ $course->coursename }}', '{{ $course->user_name }}')">Apply</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @php
                $imageIndex++;
                @endphp
                @endforeach

            </div>
            <div>{{ $courses->links() }}</div>
        </article>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Course Details</h2>
                <div class="course-details">
                    <p style="color: red;"><strong>Course:</strong> <span id="courseName"></span></p>
                    <p style="color: red;"><strong>College:</strong> <span id="collegeName"></span></p>
                    <p style="color: red;"><strong>Code:</strong> <span id="code"></span></p>
                    <p style="color: red;"><strong>Module:</strong> <span id="module"></span></p>
                    <p style="color: red;"><strong>Fee:</strong> <span id="fee"></span></p>
                    <p style="color: red;"><strong>Department:</strong> <span id="department"></span></p>

                </div>
                <h2><span id="description"></span></h2>
            </div>
        </div>
        <div id="applyModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeApplyModal()">&times;</span>

                <!-- enctype="multipart/form-data"you ensure that the form data, including any uploaded files, is properly encoded and sent to the server for processing. This is essential for handling file uploads in your form. -->
                <form id="applicationForm" action="{{ route('submit-form') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <h2>Apply for <span id="courseField"> </span>
                        which is the Course of <span id="collegeField">
                        </span>
                        <input type="hidden" name="course" id="courseInput">
                        <input type="hidden" name="college" id="collegeInput">
                    </h2>

                    <h2 onclick="toggleFields(this)" style="padding-top: 20px; color:#595bd4;font-size: 25px;">Personal
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
                    <h2 onclick="toggleFieldsEdu(this)" style="padding-top: 20px; color:#595bd4; font-size: 25px;">
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
                    <h2 onclick="toggleFieldsDoc(this)" style="padding-top: 20px; color:#595bd4; font-size: 25px;">
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
function openModal(courseId, courseName, collegeName, description, code, module, fee, department) {
    // Populate modal with course details
    document.getElementById("courseName").innerText = courseName;
    document.getElementById("collegeName").innerText = collegeName;
    document.getElementById("description").innerText = description;
    document.getElementById("code").innerText = code;
    document.getElementById("module").innerText = module;
    document.getElementById("fee").innerText = fee;
    document.getElementById("department").innerText = department;

    // Display the modal
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    // Hide the modal
    document.getElementById("myModal").style.display = "none";
}



function openApplyModal(courseName, collegeName) {
    var applyModal = document.getElementById("applyModal");
    var courseField = document.getElementById("courseField");
    var collegeField = document.getElementById("collegeField");
    var courseInput = document.getElementById("courseInput");
    var collegeInput = document.getElementById("collegeInput");

    // Populate course and college fields
    courseField.textContent = courseName;
    collegeField.textContent = collegeName;

    // Set values of hidden input fields
    courseInput.value = courseName;
    collegeInput.value = collegeName;

    // Display the modal
    applyModal.style.display = "block";
}


function closeApplyModal() {
    var applyModal = document.getElementById("applyModal");
    applyModal.style.display = "none";
}
</script>