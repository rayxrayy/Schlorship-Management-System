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
            <div class="col-md-6 col-lg-4 col-12 my-4">
                <a href="https://insights.fuse.ai/ai-empowerment-in-nepal-through-ai-fellowship-program/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2024/02/Parag.png"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2024/02/Parag.png.webp"></div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-News badges">News</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Behind the Scenes: Fusemachines Head of Strategy &#038; MD- South Asia Parag Shrestha on AI
                            Empowerment in Nepal through AI fellowship </div>

                        <div class="small-text">
                            By Safal Thapa <span class="entry-date">
                                <span class="mx-1">|</span>
                                February 16 </span>
                        </div>
                        <div class="my-2">
                            <p>The Fusemachines AI Fellowship Program is a transformative initiative designed to empower
                                Nepalese youth. Today, we chat with Parag Shrestha, Head of Strategy &#038; MD- South
                                Asia at Fusemachines. Parag understands the aspirations and challenges faced by young
                                minds in Nepal and envisions this program as a vehicle for fostering a vibrant AI
                                ecosystem that drives progress and empowers Nepal&#8217;s future.</p>
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
                <a href="https://insights.fuse.ai/all-you-need-to-know-about-fusemachines-ai-fellowship-2024-nepal/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2024/02/AI-Fellowship-Nepal-2024_Featured-Image.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2024/02/AI-Fellowship-Nepal-2024_Featured-Image.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            All You Need to Know About Fusemachines AI Fellowship 2024 Nepal </div>

                        <div class="small-text">
                            By Safal Thapa <span class="entry-date">
                                <span class="mx-1">|</span>
                                February 8 </span>
                        </div>
                        <div class="my-2">
                            <p>Calling all students, graduates, and professionals in Nepal with a passion for AI—the
                                2024 Fusemachines AI Fellowship is around the corner and applications are opening soon!
                                This comprehensive program aims to find, nurture, and develop AI talent in Nepal. Here’s
                                everything you need to know about the AI Fellowship Program.</p>
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
                <a href="https://insights.fuse.ai/all-you-need-to-know-about-fusemachines-ai-fellowship-latin-america/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2023/07/Blog-featured-Image.png"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2023/07/Blog-featured-Image.png.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-Blog badges">Blog</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            All You Need to Know About Fusemachines AI Fellowship Latin America </div>

                        <div class="small-text">
                            By Safal Thapa <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 20 </span>
                        </div>
                        <div class="my-2">
                            <p>The AI Fellowship LATAM Program is a training and education program lasting 6 months
                                designed to create advanced career opportunities in AI. With a 100% scholarship, this
                                program is led by leading faculty members from renowned US universities and industry
                                experts. Graduates of the program gain a competitive edge in the job market and
                                establish a strong foundation for their AI careers.</p>
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
                <a href="https://insights.fuse.ai/the-ai-talent-gap/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2022/03/Quantum-Computing-and-AI.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2022/03/Quantum-Computing-and-AI.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For General Audience badges">For General Audience</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            The AI Talent Shortage </div>

                        <div class="small-text">
                            By Lizzie Ottenstein <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 12 </span>
                        </div>
                        <div class="my-2">
                            <p>AI and automation are boosting business productivity and improving our lives. But the
                                technology’s widespread adoption is causing concerns about the displacement of several
                                jobs. This blog details why bridging the AI Talent Gap is important in today&#8217;s
                                dynamic work environment. </p>
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
                <a href="https://insights.fuse.ai/ais-role-in-delivering-equitable-education-opportunities/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2022/05/university-students-are-doing-e-learning-while-sit-2022-01-19-00-11-14-utc.jpg">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            AI&#8217;s Role in Delivering Equitable Education Opportunities </div>

                        <div class="small-text">
                            By Lizzie Ottenstein <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 10 </span>
                        </div>
                        <div class="my-2">
                            <p>AI in the classroom create equitable education by personalizing learning, improving
                                accessibility, analyzing student progress, and enhancing teacher-student communication.
                            </p>
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
                <a href="https://insights.fuse.ai/developing-your-ai-skills-types-of-ai-courses-that-can-help/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2022/05/books-and-graduation-hat-in-education-library-2022-02-06-07-38-38-utc.jpg">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Developing your AI skills: Types of AI courses that can help </div>

                        <div class="small-text">
                            By Safal Thapa <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 6 </span>
                        </div>
                        <div class="my-2">
                            <p>Whether you&#8217;re a beginner looking to grasp the fundamentals or an experienced
                                practitioner aiming to specialize in a specific domain, there are AI courses tailored to
                                meet your needs. let&#8217;s explore some of these in this blog.</p>
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
                <a href="https://insights.fuse.ai/fusemachines-ai-fellowship-2023-all-you-need-to-know/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2022/11/ad.png"></div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-Blog badges">Blog</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Fusemachines AI Fellowship 2023: All you need to know </div>

                        <div class="small-text">
                            By Safal Thapa <span class="entry-date">
                                <span class="mx-1">|</span>
                                November 29 </span>
                        </div>
                        <div class="my-2">
                            <p>We are proud to announce the launch of the Fusemachines AI Fellowship Program 2023 for
                                the seventh year running. Eligible [&hellip;]</p>
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
                <a href="https://insights.fuse.ai/ai-for-smart-marketing/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2022/02/digital-marketing-ge5861ed3a_640.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2022/02/digital-marketing-ge5861ed3a_640.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-For General Audience badges">For General Audience</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            AI for Smart Marketing </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                February 24 </span>
                        </div>
                        <div class="my-2">
                            <p>Many businesses employ AI for marketing solutions to improve their operational efficiency
                                while increasing consumer engagement. This article details how marketing teams can
                                utilize AI for better operations. </p>
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
                <a href="https://insights.fuse.ai/ai-in-samsung-products/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2022/02/Quantum-Computing-and-AI-2-1.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2022/02/Quantum-Computing-and-AI-2-1.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-For General Audience badges">For General Audience</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            AI in Samsung Products </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                February 7 </span>
                        </div>
                        <div class="my-2">
                            <p>Every company today must progress in the AI industry because every other company offers a
                                product that provides support to users. Samsung is also one such company that makes
                                extensive use of AI to offer customers cutting-edge products. This article details how
                                some Samsung products use AI. </p>
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
                <a href="https://insights.fuse.ai/conversation-with-fusemachines-ai-fellowship-alumni-isu-shrestha/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2022/01/isu2.png"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2022/01/isu2.png.webp"></div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-Interview badges">Interview</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Conversation with Fusemachines&#8217; AI Fellowship Alumni Isu Shrestha </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                January 21 </span>
                        </div>
                        <div class="my-2">
                            <p>The article is an interview conducted with Isu Shrestha, a Machine Learning Engineer at
                                Fusemachines, about his experience as an AI Fellowship Alumni. </p>
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
                <a href="https://insights.fuse.ai/how-google-uses-ai-to-improve-search/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2022/01/Hnet.com-image.png"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2022/01/Hnet.com-image.png.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            How Google Uses AI to Improve Search </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                January 20 </span>
                        </div>
                        <div class="my-2">
                            <p>Have you ever wondered how Google&#8217;s search engine is able to generate swift
                                responses to your search queries? This article details how RankBrain, a Deep Learning
                                Google algorithm, is able to crawl through millions of contents on the web to provide
                                users with the best search queries. </p>
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
                <a href="https://insights.fuse.ai/quantum-computing-and-ai/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/12/Hnet.com-image.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/12/Hnet.com-image.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-For Engineers badges">For Engineers</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Quantum Computing and AI </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                December 21 </span>
                        </div>
                        <div class="my-2">
                            <p>Quantum Computing is the next step to Artificial Intelligence. This article details what
                                Quantum Computing is, detailed descriptions about Quantum AI, and how it can help AI
                                progress from ANI (Artificial Narrow Intelligence) to AGI (Artificial General
                                Intelligence). </p>
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
                <a href="https://insights.fuse.ai/machine-learning-vs-big-data/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/11/pexels-tima-miroshnichenko-7567440.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/11/pexels-tima-miroshnichenko-7567440.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Choosing Between Machine Learning and Big Data </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                November 25 </span>
                        </div>
                        <div class="my-2">
                            <p>Although both Machine Learning and Big Data deal with large volumes of both raw and
                                filtered datasets, they are different in the way they handle the datasets. The article
                                details the key differences between ML and Big Data. </p>
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
                <a href="https://insights.fuse.ai/6-major-ethical-concerns-with-ai/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/11/artificial-intelligence-ga12afe168_1280.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/11/artificial-intelligence-ga12afe168_1280.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            6 Major Ethical Concerns with AI </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                November 12 </span>
                        </div>
                        <div class="my-2">
                            <p>There are many ethical considerations related to emerging technology. The scale and
                                application of AI also bring with it unique and unprecedented challenges. The article
                                details some of the ethical concerns with AI.</p>
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
                <a href="https://insights.fuse.ai/ethics-of-ai-artificial-intelligence/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/11/artificial-intelligence-gd528929e0_1280.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/11/artificial-intelligence-gd528929e0_1280.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Article badges">Article</sapn> </span><span
                                class="badges-For Engineers badges">For Engineers</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Ethics of Artificial Intelligence </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                November 11 </span>
                        </div>
                        <div class="my-2">
                            <p>The great impacts of AI aren’t without challenges. When designing, producing, and
                                deploying AI models, data scientists, engineers, domain experts, and delivery managers
                                should make ethics a priority. The article details ethics of AI and why it is important.
                            </p>
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
                <a href="https://insights.fuse.ai/top-22-ai-trends-in-2022/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/10/technology-gfd32d7619_1280.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/10/technology-gfd32d7619_1280.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Engineers badges">For Engineers</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Top 22 AI Trends in 2022 </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                October 28 </span>
                        </div>
                        <div class="my-2">
                            <p>AI tech, such as blockchain, self-driving cars, robots, 3D printing, and advanced
                                genomics, among others, have ushered in a new industrial revolution. These
                                ground-breaking and innovative AI trends will likely change organizations, reshape
                                business models, and transform industries. The article details the top 22 AI trends in
                                2022.</p>
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
                <a href="https://insights.fuse.ai/data-analyst-vs-data-scientist/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/10/pxfuel.com-2.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/10/pxfuel.com-2.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Data Analyst vs Data Scientist </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                October 21 </span>
                        </div>
                        <div class="my-2">
                            <p>Data plays a huge role in modern society, from healthcare and business to finance and
                                economic progress. There is a high demand for data scientists and analysts in the market
                                as well, with salaries above the national average. The article details key differences
                                between a data analyst and a data scientist. </p>
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
                <a href="https://insights.fuse.ai/what-is-deep-learning/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/09/Webp.net-resizeimage.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/09/Webp.net-resizeimage.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            What is Deep Learning? </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                September 16 </span>
                        </div>
                        <div class="my-2">
                            <p>From financial services to law enforcement, Deep Learning methods are widely used in
                                modern society. The article details what Deep Learning is, how it works and the key
                                differences between Deep Learning and Machine Learning. </p>
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
                <a href="https://insights.fuse.ai/ai-vs-ml-difference-between-artificial-intelligence-and-machine-learning/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/09/AI-vs-ML.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/09/AI-vs-ML.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            AI vs ML &#8211; Difference Between Artificial Intelligence and Machine Learning </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                September 6 </span>
                        </div>
                        <div class="my-2">
                            <p>Artificial Intelligence and Machine Learning are often used interchangeably to describe
                                intelligent systems or software, but they are not the same thing. The article details
                                the key differences between AI and Machine Learning. </p>
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
                <a href="https://insights.fuse.ai/10-benefits-and-applications-of-ai-in-business/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/08/web-4861605__480.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/08/web-4861605__480.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            10 Benefits and Applications of AI in Business </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                August 26 </span>
                        </div>
                        <div class="my-2">
                            <p>AI has numerous benefits in many economic sectors. AI-generated revenue in the majority
                                of business functions sees a significant yearly increase. The article details the major
                                business impacts of AI. </p>
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
                <a href="https://insights.fuse.ai/nepal-television-covers-the-ai2go-workshop/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/07/ntv.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/07/ntv.jpg.webp"></div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-News badges">News</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Nepal Television Covers the AI2Go Workshop </div>

                        <div class="small-text">
                            By Press Release Administrator <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 21 </span>
                        </div>
                        <div class="my-2">
                            <p>Nepal Television (NTV) covered the AI2Go Workshop- a first-of-its-kind program in Nepal.
                                The report features a short interview with Dr. Sameer Maskey about the status of the
                                Digitization Nepal Initiative and the role AI Shikshya plays in this campaign.</p>
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
                <a href="https://insights.fuse.ai/what-is-ai/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/07/Artificial_Neural_Network_with_Chip.png"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/07/Artificial_Neural_Network_with_Chip.png.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Engineers badges">For Engineers</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            What is AI? | Artificial Intelligence and It&#8217;s Subsets </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 15 </span>
                        </div>
                        <div class="my-2">
                            <p>Artificial Intelligence is a big topic in innovation and business, with numerous
                                specialists and industry investigators contending that AI or Machine Learning is the
                                future. The article details what AI is, its subsets, and its applications. </p>
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
                <a href="https://insights.fuse.ai/ai-engineer-responsibilities-what-are-they/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/07/workers-5246640_640.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/07/workers-5246640_640.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Engineers badges">For Engineers</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            AI Engineer Responsibilities- What are They? </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 15 </span>
                        </div>
                        <div class="my-2">
                            <p>While AI Engineering is a relatively new field, it is becoming more and more relevant in
                                many economic sectors, especially in the industrial and manufacturing industries. The
                                article details what an AI Engineer does, and the roles and responsibilities they carry
                                out. </p>
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
                <a href="https://insights.fuse.ai/what-is-ai-engineering/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/07/web-3706562_640.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/07/web-3706562_640.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            What is AI Engineering and Why You Should Join This Field </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 14 </span>
                        </div>
                        <div class="my-2">
                            <p>Increased computing power and complex datasets have prompted the formation of new AI
                                models and algorithms. The development of AI machines will only go forward from there.
                                When it comes to innovations, the sky’s the limit. The article details why AI Engineers
                                are important and how it is a lucrative career field. </p>
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
                <a href="https://insights.fuse.ai/skills-needed-to-become-an-ai-engineer/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/07/0276.jpg_wh300.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/07/0276.jpg_wh300.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Engineers badges">For Engineers</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Skills Needed to Become an AI Engineer | A Guide to Technical Skills you need to become an
                            AI Engineer </div>

                        <div class="small-text">
                            By Neha Uddin <span class="entry-date">
                                <span class="mx-1">|</span>
                                July 14 </span>
                        </div>
                        <div class="my-2">
                            <p>Most, if not all, AI jobs require an analytical thought process with a key characteristic
                                being the ability to solve problems with cost-effective and efficient solutions. AI
                                Engineers are capable of turning technological innovations into state-of-the-art
                                programs. The article details the education prerequisites and technical skills required
                                to become an AI Engineer. </p>
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
                <a href="https://insights.fuse.ai/top-5-ai-engineer-talents/" class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/06/How-to-become-an-AI-engineer.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/06/How-to-become-an-AI-engineer.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Engineers badges">For Engineers</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Top 5 AI Engineer Talents </div>

                        <div class="small-text">
                            By Shreejana Mainali <span class="entry-date">
                                <span class="mx-1">|</span>
                                June 7 </span>
                        </div>
                        <div class="my-2">
                            <p>With the increasing demand for qualified AI engineers, tech giants are competing to hire
                                the best talents out there. Here are 5 must-have skills to becoming a skilled AI
                                engineer.</p>
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
                <a href="https://insights.fuse.ai/what-is-artificial-intelligence-understanding-the-fundamentals-of-ai-2/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/05/Featured-image.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/05/Featured-image.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For High School badges">For High School</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            Fundamentals of Artificial Intelligence </div>

                        <div class="small-text">
                            By Shreejana Mainali and Ratina Sthapit <span class="entry-date">
                                <span class="mx-1">|</span>
                                May 10 </span>
                        </div>
                        <div class="my-2">
                            <p>AI is becoming the skill of the future which is why it is crucial for the younger
                                generation to learn about AI and engage with it early on. Read this blog to grasp the
                                basic concept of AI, its types, how it works and AI applications.</p>
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
                <a href="https://insights.fuse.ai/4-reasons-ai-is-the-gateway-to-a-future-proof-career-2/"
                    class="card post-list">

                    <div class="image-wrapper">
                        <div class="post-image lazyload" style=""
                            data-back="https://insights.fuse.ai/wp-content/uploads/2021/04/4-Reasons-AI-is-.jpg"
                            data-back-webp="https://insights.fuse.ai/wp-content/uploads/2021/04/4-Reasons-AI-is-.jpg.webp">
                        </div>
                    </div>

                    <div class="media-body px-4 pt-4 pb-0">
                        <div class="cat-links">
                            <span class="badges-Blog badges">Blog</sapn> </span><span
                                class="badges-For Graduate Students badges">For Graduate Students</sapn> </span>
                        </div>

                        <div class="h4 mt-2 mb-0">
                            4 Reasons AI is The Gateway to A Future Proof Career </div>

                        <div class="small-text">
                            By Shreejana Mainali <span class="entry-date">
                                <span class="mx-1">|</span>
                                April 19 </span>
                        </div>
                        <div class="my-2">
                            <p>Artificial intelligence will transform the global economy, and AI jobs are and will
                                continue to be in high demand. Read more on reasons why AI careers are future-proof.</p>
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

            <div class="col-12">
                <div class="custom-pagination page_nav">
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


</div>

@endsection