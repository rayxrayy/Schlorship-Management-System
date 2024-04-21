<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
<x-app-layout>

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
                        <div class="image-container">
                            <img src="{{ asset('storage/'.$college->profile_photo_path) }}" alt="College Photo"
                                class="img-fluid " />
                        </div>
                        <div class="summery-title">
                            <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">{{ $college->name }}</div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('college') }}" class="btn btn-sm btn-outline-secondary">View
                                        Details</a>
                                    <a href="{{ route('college') }}" class="btn btn-sm btn-outline-primary">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div>{{ $colleges->links() }}</div>
        </article>
    </section>
</x-app-layout>