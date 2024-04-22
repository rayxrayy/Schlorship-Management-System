<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
<x-app-layout>

    <section id="section-course" class="ai-felpx;lowship--course bg-white">
        <h1 style='font-size:41px;'>
            <p>lets start Scholorship journey</p>
        </h1>
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
        <article class="container-xxl py-5">
            <div class="row align-items-center px-lg-5 px-xxl-0">
                <div class="col-lg-5 offset-lg-1 my-5 order-lg-1" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/images/s3.jpg" class="img-fluid" alt="Course Overview" />
                </div>

                <div class="col-lg-6 my-5 order-lg-0" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-duration="500">
                    <div class="fs-3 fw-bold lh-sm">This program is mainly targeted to <span class="text-primary">those
                            who are willing to </span> study for thier and the nation
                        betterment. </div>
                    <div class="fw-bold mt-4 lh-sm">It is designed to help Students, colleges and the public to help
                        growing better future. For that what should a student have to do:</div>
                    <ul class="my-2 fill-tick">
                        <li class="mt-2">Have a good academic result.</li>
                        <li class="mt-2">Need to write a personal statement.</li>
                        <li class="mt-2">Letter of recomendation from college or schools.</li>
                        <li class="mt-2">Participation in extracurricular activities such as sports, clubs,
                            community service, and leadership roles demonstrates a well-rounded student</li>
                        <li class="mt-2">Any document to showcase your Demographic Background.</li>
                        <li class="mt-2">There will be a interview or presentation round from the collages.</li>
                        <li class="mt-2">You will be provided a review letter form the colleges.</li>
                    </ul>

                    <button onclick="openModal()" class="btn fill-button" role="button" aria-disabled="true"
                        id="apply_button-course-overview">Apply Now</button>
                </div>
            </div>
        </article>
    </section>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <!-- enctype="multipart/form-data"you ensure that the form data, including any uploaded files, is properly encoded and sent to the server for processing. This is essential for handling file uploads in your form. -->
            <form id="applicationForm" action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-25">
                        <h2>
                            <label style=" color:#595bd4;font-size: 25px;" for="profile_image">Add Img</label>
                        </h2>
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
                        <h2>
                            <label style=" color:#595bd4;font-size: 25px;" for="college">College </label>
                        </h2>
                    </div>
                    <div class="col-75">
                        <select id="college_select" name="college">
                            <option value="">---Select College---</option>
                            @foreach ($colleges as $college)
                            <option value="{{ $college }}">{{ $college }}</option>
                            @endforeach
                        </select>
                        @error('college_select')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <h2>
                            <label style="color:#595bd4;font-size: 25px;" for="gender">Course</label>
                        </h2>
                    </div>
                    <div class="col-75">
                        <select id="course_select" name="course">
                            <option value="">Select Course</option>
                        </select>
                        @error('course_select')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <h2 onclick="toggleFields(this)" style="padding-top: 20px; color:#595bd4;font-size: 25px;">Personal
                    Information
                    <span style="margin-left: 48%; font-size: 25px;">+</span>
                </h2>
                <section class="personalinfo" style="display: none;">
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
                            <input type="text" id="address" name="address" placeholder="Enter your current address .."
                                value="{{old('address')}}" required>
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
                                placeholder="Enter you course that you got graduate from..." value="{{old('major')}}">
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
                            <input type="file" id="document_sop" name="document_sop" value="{{old('document_sop')}}">
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

                    <p>You can choose any other document like letter od recomendation or any Scholorships
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
                                placeholder="Write something not more than 100 words .." value="{{old('description')}}"
                                style="height:150px"></textarea>
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
<script src="{{ asset('jsfile/applyform.js') }}"></script>
<script>
document.getElementById('college_select').addEventListener('change', function() {
    var college = this.value;
    fetchCourses(college);
});

function fetchCourses(college) {
    fetch('/get-courses', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                college: college
            })
        })
        .then(response => response.json())
        .then(data => {
            var courseSelect = document.getElementById('course_select');
            courseSelect.innerHTML = '<option value="">Select Course</option>';
            data.courses.forEach(course => {
                var option = document.createElement('option');
                option.value = course;
                option.textContent = course;
                courseSelect.appendChild(option);
            });
        });
}
</script>
<script src="{{ asset('jsfile/applyform.js') }}"></script>