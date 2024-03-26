<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">

<x-app-layout>

    <h1 style="font-weight:600">You can choose any student here to donate!</h1>
    <h2>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy
            to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2>
    <section id="section-course" class="ai-felpx;lowship--course bg-white">
        <article class="container-xxl py-5">
            <div class="row align-items-center px-lg-5 px-xxl-0">
                <div class="col-lg-5 offset-lg-1 my-5 order-lg-1" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/images/s3.jpg" class="img-fluid" alt="Course Overview" />
                </div>

                <div class="col-lg-6 my-5 order-lg-0" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-duration="500">
                    <div class="fs-3 fw-bold lh-sm">Gayatri Banset
                    </div>
                    <p>np03cs4a210022@gmail.com</p>
                    <div class="fw-bold mt-4 lh-sm" id='description'> ''It is designed to help Students, colleges and
                        the
                        public to help
                        growing better future. For that what should a student have to do:''</div>
                    <hr>
                    <ul class="my-2 fill-tick">
                        <li class="mt-2">Have a good academic result.</li>

                    </ul>
                    <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                        <h2>Total fee: $500</h2>
                        <h2>Raised:$200.21</h2>
                    </div>

                    <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                        <a class="btn fill-button" role="button" id="" href="">Donate</a><a class="btn fill-button"
                            role="button" id="" href="">Review</a>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <div style="text-align: center; padding-top: 20px; font-size: 25px; color:red;"><a href=""> View All Students
            <!-- <x-button>View All Colleges</x-button>   -->
        </a>
    </div>
</x-app-layout>