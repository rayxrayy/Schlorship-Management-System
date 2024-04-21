<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
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

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeModal()">&times;</span>
                                <h2>Course Details</h2>
                                <!-- Add your form fields here -->
                                <label for="coursename"> Course: {{ $course->coursename }}</label>
                            </div>
                        </div>
                        <div class="summery-title">
                            <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-secondary" onclick="openModal()" role="button"
                                        aria-disabled="true" id="apply_button-course-overview">View
                                        Details</button>
                                    <a href="" class="btn btn-sm btn-outline-primary">Apply</a>
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
    </section>
    <!-- Modal -->


</x-app-layout>
<script>
function toggleForm(courseId) {
    var formId = "form_" + courseId;
    var form = document.getElementById(formId);
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
}
</script>