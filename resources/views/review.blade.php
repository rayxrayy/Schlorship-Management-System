@extends('layouts.welcome')

@section('content')

<section role="top-section" id="top-section" class="top-section bg-fb">
    <div class="home-video-bg">
        <video id="video_background" autoplay loop muted data-autoplay playsinline>
            <source src="/video/review.mp4" type="video/mp4">
        </video>
    </div>
    <article class="container">
        <div class="row pt-5 top-section-content" data-aos="fade-up" data-aos-duration="500">
            <div class="col-md-12 top-section-content-col text-center text-white">
                <div class="mt-2" data-aos="fade-up" data-aos-duration="500">
                    <h1>What </br>People have to say about it ?</h1>
                </div>
                <div class="mt-4" data-aos="fade-up" data-aos-duration="1500">
                    <h3>Share your thoughts and feeling here !</h3>
                </div>
                <div class="mt-4" data-aos="fade-up" data-aos-duration="1500">
                    <a class="btn fill-button button-left-space" id="contact_button_landing_top" href="/contact"> Post
                        Something</a>
                </div>


            </div>

        </div>
    </article>
</section>

<div id="content" class="site-content">

    <div class="container mb-5">
        <div class="row">
            <!-- <div class="col-12">
                <h2 class="my-4">All Posts</h2>
            </div> -->

            <div class="col-md-6 col-lg-4 col-12 my-4">
                <a href="https://insights.fuse.ai/from-setback-to-success-the-inspiring-journey-of-fusemachines-ai-fellow/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2024/03/Pawan.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2024/03/Pawan.jpg.webp"></div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-Interview badges">Interview</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            From Setback to Success: The Inspiring Journey of Fusemachines AI Fellow </div>

                        <div class="small-text">
                            By Safal Thapa <span class="entry-date">
                                <span class="mx-1">|</span>
                                March 1 </span>
                        </div>
                        <div class="my-2">
                            <p>The Fusemachines AI Fellowship isn&#8217;t just about getting into AI; it&#8217;s about
                                personal growth. Through practical projects, intensive training, and mentorship from
                                industry leaders, fellows gain the skills to thrive in AI&#8217;s evolving landscape.
                                We&#8217;re delving into the journey of Pawan S. Sharma, showing how setbacks can lead
                                to success within this esteemed fellowship.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <span class="view-more">
                            READ MORE
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAJAQAAAAAXpEGiAAAAAnRSTlMAAHaTzTgAAAALSURBVAjXY2AgDAAAJAABLh5xoAAAAABJRU5ErkJggg=="
                                class="ml-2 mb-1 lazyload ewww_webp_lazy_load"
                                data-src="https://insights.fuse.ai/wp-content/themes/fuseai/assets/images/arrow.png"
                                decoding="async" data-eio-rwidth="18" data-eio-rheight="9"
                                data-src-webp="https://insights.fuse.ai/wp-content/themes/fuseai/assets/images/arrow.png.webp" /><noscript><img
                                    src="https://insights.fuse.ai/wp-content/themes/fuseai/assets/images/arrow.png"
                                    class="ml-2 mb-1" data-eio="l" /></noscript>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-12 my-4">
                <a href="https://insights.fuse.ai/from-beginner-to-expert-your-ai-learning-journey/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2024/02/Fellowship.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2024/02/Fellowship.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For General Audience badges">For General Audience</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            From Beginner to Expert: Your AI Learning Journey </div>

                        <div class="small-text">
                            By Safal Thapa <span class="entry-date">
                                <span class="mx-1">|</span>
                                February 26 </span>
                        </div>
                        <div class="my-2">
                            <p>With the right guidance, anyone can embark on an AI learning journey, starting from
                                scratch. Imagine going from &#8220;AI? Huh?&#8221; to using it to solve real-world
                                problems in Nepal. This is possible with the Fusemachines AI Fellowship Program. So, put
                                on your learning hat, get ready for a fun ride, and let&#8217;s begin your
                                transformation from beginner to expert!</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <span class="view-more">
                            READ MORE
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAJAQAAAAAXpEGiAAAAAnRSTlMAAHaTzTgAAAALSURBVAjXY2AgDAAAJAABLh5xoAAAAABJRU5ErkJggg=="
                                class="ml-2 mb-1 lazyload ewww_webp_lazy_load"
                                data-src="https://insights.fuse.ai/wp-content/themes/fuseai/assets/images/arrow.png"
                                decoding="async" data-eio-rwidth="18" data-eio-rheight="9"
                                data-src-webp="https://insights.fuse.ai/wp-content/themes/fuseai/assets/images/arrow.png.webp" /><noscript><img
                                    src="https://insights.fuse.ai/wp-content/themes/fuseai/assets/images/arrow.png"
                                    class="ml-2 mb-1" data-eio="l" /></noscript>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


</div>

@endsection