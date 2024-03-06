<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta http-equiv="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="expires" content="-1" />
    <link rel="shortcut icon" type="image/ico" href="/images/logo.png" />

    <title>Edu-Hope Scholarship | Nepal | SMS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- main style -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">

    <!-- Jquery -->

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K87J39N');
    </script>
    <!-- End Google Tag Manager -->


    <!-- <script type="text/javascript" src="/assets/js/config.min.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="{{asset('jsfile/main.js')}}"></script>



</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K87J39N" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- You write code for this content block in another file -->


    <header role="main-menu" class="front">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="nav-content container-xxl">
                <div>
                    <a class="nav-logo" href="/" id="menu_logo">
                        <img class="nav-logo-img img-fluid" src="{{ asset('./Images/Logo.png') }}" alt="Fuse AI Logo" />
                    </a>
                    <a class="nav-logo" href="/" id="menu_logo-fill">
                        <img class="nav-logo-img img-fluid logo-fill" src="{{ asset('./Images/Logo.png') }}"
                            alt="Fuse AI Logo" />
                    </a>
                    <div class="powered-by">Powered by <a target="_blank"
                            href="https://github.com/rayxrayy/Schlorship-Management-System">Edu-Hope</a></div>
                </div>
                <button class="navbar-toggler" id="menu_toggle" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <ul class="nav-list white">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Programs
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item all-programs Secondary" href="">Explore All
                                            Programs
                                            <svg xmlns="" width="16" height="16" fill="currentColor"
                                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="">Schlorship</a>
                                    </li>
                                    <li><a class="dropdown-item" href="">Life
                                            Counceling</a></li>
                                    <li><a class="dropdown-item" href="">Internship
                                            Oppurtunities</a></li>
                                    <li><a class="dropdown-item" href="">Work
                                            with Companies</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-school" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown-school">
                                    <li><a class="dropdown-item" href="">Nepal</a></li>
                                    <li><a class="dropdown-item" href="">Latin America</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link" id="menu_lectures">College
                                    Partners</a></li>
                            <li class="nav-item"><a href="" class="nav-link" id="menu_faqs">Reviews</a></li>
                            <li class="nav-item"><a href="" class="nav-link" id="menu_insights">Blog</a></li>
                            <li class="nav-item">
                                @if (Route::has('login'))

                                @auth
                                <a href="{{ url('/dashboard') }}" class="nav-link nav-btn"
                                    id="menu_apply-aiFellowship">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" style=""></a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link nav-btn"
                                    style="background: linear-gradient(#595bd4, #595bd4);"
                                    id="menu_apply-aiFellowship">Get Started</a>
                                @endif
                                @endauth

                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <main class="ai-fellowship-page">


        <div id="sticky-social" style="display:none">
            <ul class="social">
                <li class="fb">
                    <a href="https://www.facebook.com/heraldcollegektm/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7.61" height="16.37" viewBox="0 0 7.61 16.37">
                            <g id="Group_11148" data-name="Group 11148" transform="translate(-9.84 -5.46)">
                                <path id="Path_8933" data-name="Path 8933"
                                    d="M11.51,13.71v7.91a.211.211,0,0,0,.21.21h2.94a.211.211,0,0,0,.21-.21V13.58H17a.208.208,0,0,0,.21-.19l.2-2.42a.2.2,0,0,0-.21-.22H14.87V9.03a.734.734,0,0,1,.73-.73h1.64a.211.211,0,0,0,.21-.21V5.67a.211.211,0,0,0-.21-.21H14.47a2.949,2.949,0,0,0-2.95,2.95v2.33H10.05a.211.211,0,0,0-.21.21v2.42a.211.211,0,0,0,.21.21h1.47v.13Z"
                                    fill="#fff" fill-rule="evenodd" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.39" height="13.75" viewBox="0 0 14.39 13.75">
                            <g id="Group_11151" data-name="Group 11151" transform="translate(-37.39 -6.25)">
                                <path id="Path_8939" data-name="Path 8939"
                                    d="M51.78,14.68v5.09a.226.226,0,0,1-.23.23H48.92a.226.226,0,0,1-.23-.23V15.04c0-1.24-.44-2.1-1.56-2.1a1.678,1.678,0,0,0-1.58,1.13,2.131,2.131,0,0,0-.1.75v4.95a.226.226,0,0,1-.23.23H42.6a.226.226,0,0,1-.23-.23c.01-1.26.03-7.37.01-8.81a.226.226,0,0,1,.23-.23h2.62a.226.226,0,0,1,.23.23v1.09c-.01.01-.01.02-.02.03h.02v-.03a3.062,3.062,0,0,1,2.78-1.53c2.02-.01,3.54,1.32,3.54,4.16ZM37.81,20h2.63a.226.226,0,0,0,.23-.23V10.96a.226.226,0,0,0-.23-.23H37.81a.226.226,0,0,0-.23.23v8.81A.239.239,0,0,0,37.81,20Z"
                                    fill="#fff" />
                                <circle id="Ellipse_1068" data-name="Ellipse 1068" cx="1.65" cy="1.65" r="1.65"
                                    transform="translate(37.39 6.25)" fill="#fff" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="twitter">
                    <a href="https://twitter.com/Ray284445941" target="_blank">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="56" height="56" rx="28" fill="#0A0A0A" />
                            <g clip-path="url(#clip0_995_773)">
                                <mask id="mask0_995_773" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="12"
                                    y="12" width="32" height="33">
                                    <path d="M44 12H12V44.72H44V12Z" fill="white" />
                                </mask>
                                <g mask="url(#mask0_995_773)">
                                    <path
                                        d="M31.0443 25.8476L42.9571 12H40.1341L29.7903 24.0237L21.5287 12H12L24.4931 30.1819L12 44.7032H14.8231L25.7464 32.0058L34.4713 44.7032H44L31.0437 25.8476H31.0443ZM27.1777 30.3421L25.9119 28.5316L15.8403 14.1252H20.1764L28.3043 25.7516L29.5701 27.5621L40.1355 42.6747H35.7994L27.1777 30.3428V30.3421Z"
                                        fill="white" />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_995_773">
                                    <rect width="32" height="32.72" fill="white" transform="translate(12 12)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li class="instagram">
                    <a href="https://www.instagram.com/ray_basnet/" target="_blank">
                        <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                fill="white"></path>
                        </svg>
                    </a>
                </li>
                <div class="my-2">Join us</div>
                <li class="whatsapp">
                    <a href="https://chat.whatsapp.com/Foy6VEMp6RBCzMXUTVCSzq" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <rect x="0" y="0" rx="0" ry="0" width="90" height="90"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(42,181,64); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 17.609 44.751 c -0.002 4.846 1.265 9.577 3.671 13.747 l -3.902 14.248 l 14.582 -3.823 c 4.018 2.191 8.541 3.346 13.144 3.347 h 0.012 c 15.159 0 27.5 -12.337 27.506 -27.497 c 0.003 -7.348 -2.856 -14.256 -8.049 -19.454 c -5.194 -5.197 -12.099 -8.061 -19.457 -8.064 C 29.954 17.255 17.615 29.589 17.609 44.751 M 26.292 57.779 l -0.544 -0.865 c -2.289 -3.639 -3.497 -7.845 -3.495 -12.163 c 0.005 -12.601 10.26 -22.853 22.871 -22.853 c 6.107 0.002 11.846 2.383 16.163 6.703 c 4.317 4.32 6.692 10.062 6.69 16.169 c -0.006 12.602 -10.261 22.855 -22.862 22.855 h -0.009 c -4.103 -0.002 -8.127 -1.104 -11.636 -3.186 l -0.835 -0.495 l -8.653 2.269 L 26.292 57.779 z M 45.116 72.27 L 45.116 72.27 L 45.116 72.27 C 45.115 72.27 45.115 72.27 45.116 72.27"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 38.241 33.255 c -0.515 -1.145 -1.057 -1.167 -1.546 -1.188 c -0.401 -0.017 -0.859 -0.016 -1.317 -0.016 c -0.458 0 -1.203 0.172 -1.833 0.86 c -0.63 0.688 -2.406 2.35 -2.406 5.732 c 0 3.382 2.463 6.649 2.806 7.108 c 0.344 0.458 4.755 7.619 11.74 10.374 c 5.806 2.289 6.987 1.834 8.247 1.719 c 1.26 -0.114 4.066 -1.662 4.639 -3.267 c 0.573 -1.605 0.573 -2.98 0.401 -3.267 c -0.172 -0.286 -0.63 -0.458 -1.317 -0.802 c -0.688 -0.344 -4.066 -2.007 -4.696 -2.236 c -0.63 -0.229 -1.088 -0.343 -1.547 0.345 c -0.458 0.687 -1.774 2.235 -2.176 2.693 c -0.401 0.459 -0.802 0.517 -1.489 0.173 c -0.688 -0.345 -2.901 -1.07 -5.527 -3.411 c -2.043 -1.822 -3.422 -4.071 -3.824 -4.759 c -0.401 -0.687 -0.043 -1.06 0.302 -1.402 c 0.309 -0.308 0.688 -0.802 1.031 -1.204 c 0.343 -0.401 0.457 -0.688 0.686 -1.146 c 0.229 -0.459 0.115 -0.86 -0.057 -1.204 C 40.188 38.012 38.852 34.613 38.241 33.255"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="viber">
                    <a href="https://invite.viber.com/?g=GqoxOOjJYFIKYiptnXem_KkC1astbTyF&lang=en" target="_blank">
                        <svg fill="none" height="92" viewBox="0 0 92 92" width="92" xmlns="http://www.w3.org/2000/svg">
                            <path d="m0 0h91.5618v91.5618h-91.5618z" fill="#8755a7" />
                            <g fill="#fff">
                                <path
                                    d="m35.0952 64.4983c0-.7675 0-1.535 0-2.3025.0054-.0314.0043-.0636-.0033-.0945s-.0215-.06-.0409-.0854-.0438-.0466-.0718-.0622c-.0279-.0157-.0589-.0255-.0908-.0288-1.9199-.5404-3.6919-1.5032-5.184-2.8165-1.0872-.98-1.9924-2.1413-2.6744-3.4313-.9613-1.8633-1.601-3.8729-1.8927-5.9455-.3614-2.5999-.487-5.2267-.3751-7.8488.0246-1.2224.0876-2.431.2279-3.6535.2235-2.323.815-4.5966 1.7525-6.7374 1.1576-2.6321 3.2578-4.7463 5.8955-5.9351 1.7968-.8147 3.6871-1.4095 5.6292-1.7712 1.9044-.3574 3.8326-.5768 5.7693-.6564 1.7457-.0611 3.4934-.0356 5.2366.0764 2.4948.1044 4.9671.5138 7.3606 1.219 1.7746.5069 3.4628 1.2736 5.0088 2.2748 1.5063 1.0245 2.7245 2.4121 3.5401 4.032.9588 1.892 1.6106 3.9219 1.9313 6.015.2083 1.2427.3453 2.4961.4101 3.7542.0911 1.5593.0806 3.1256.021 4.678s-.1928 3.0596-.3855 4.5807c-.2437 2.2831-.952 4.4936-2.0821 6.4978-1.4709 2.5355-3.8272 4.4501-6.6245 5.383-1.9128.6637-3.8878 1.136-5.8956 1.41-1.4686.2014-2.9407.3473-4.4199.4063-1.1321.0521-2.2642.0382-3.3964.0209-.6414 0-1.2793-.0626-1.9173-.1181-.0626-.0117-.1273-.0048-.1859.02-.0587.0247-.1086.0661-.1435.1189-1.2899 1.535-2.6288 3.0284-3.9783 4.5147-.2458.2712-.5304.5052-.8447.6946-.2063.1341-.4416.2183-.6868.2457s-.4935-.0026-.7248-.0878-.4391-.2231-.6067-.4025c-.1676-.1795-.2903-.3955-.3581-.6305-.1336-.4178-.1999-.8538-.1963-1.292-.0035-.6876-.0035-1.3648-.0035-2.042zm1.5597 2.9137.1648-.1528 2.9267-3.2193c1.1263-1.2387 2.2514-2.4785 3.3754-3.7195.0552-.0757.1298-.1355.216-.1734.0862-.0378.181-.0523.2747-.0419.382.0382.7641.0521 1.1497.0555 1.3319 0 2.6638 0 3.9957-.0937 1.2093-.0938 2.415-.2397 3.6138-.4272 1.2906-.2226 2.5683-.5136 3.8275-.8717 2.8041-.7467 4.9737-2.3442 6.3372-4.9315.8049-1.5907 1.3098-3.3138 1.4896-5.0843.2131-1.6688.3406-3.3472.3821-5.0287.0621-2.1124-.0835-4.2258-.4347-6.3103-.2435-1.5102-.6817-2.9832-1.3038-4.3828-.7922-1.7364-1.9138-3.1742-3.6418-4.098-2.6498-1.4169-5.517-2.049-8.4718-2.372-.8377-.0903-1.6754-.1389-2.5166-.1701-1.7225-.088-3.4486-.0787-5.17.0277-1.238.0911-2.4693.2558-3.6873.4932-1.7913.3235-3.5241.9087-5.142 1.7364-.9379.4696-1.7888 1.0931-2.5166 1.8441-1.1796 1.3063-2.0448 2.8606-2.5307 4.5461-.5763 1.9629-.8909 3.992-.9358 6.0358-.1128 2.0438-.087 4.0928.0771 6.1332.1021 1.2142.3073 2.4178.6134 3.5979.4554 1.839 1.3389 3.5469 2.5797 4.987 1.3397 1.4693 3.0711 2.5336 4.9947 3.0701.2419.0729.3506.1563.3506.4271-.0211 1.0002 0 2.0004 0 3.0006z" />
                                <path
                                    d="m34.2021 36.3926c-.0245-.7606.3926-1.3128.8973-1.8094.6657-.6318 1.3991-1.1897 2.1872-1.6635.3593-.2196.7866-.3033 1.2033-.2356.4166.0676.7946.282 1.0645.6037.9535.9931 1.8069 2.076 2.5481 3.2333.3671.5205.6443 1.098.8202 1.7086.0703.2383.0749.4909.0133.7316-.0617.2406-.1873.4605-.3638.6367-.4043.3933-.8353.7588-1.2898 1.094-.2291.1809-.3994.4245-.4897.7005-.0904.276-.0969.5723-.0186.8519.2807 1.313.9169 2.5255 1.8402 3.5076 1.1219 1.3571 2.5675 2.4158 4.2061 3.0805.4026.2051.8639.2676 1.3074.1771.2428-.0657.4586-.2054.6169-.3994.2453-.3091.5117-.6078.7325-.9377.2864-.4115.7237-.696 1.2187-.7926.495-.0967 1.0086.0021 1.4311.2751 1.1882.6831 2.3099 1.4736 3.3509 2.3616.2453.2084.5012.4098.7466.6217.2903.2193.4999.527.5968.8758s.0756.7194-.0606 1.0551c-.2165.5644-.5322 1.0865-.9323 1.5419-.4973.6848-1.1306 1.2616-1.8612 1.6948-.3492.2032-.7416.3226-1.1458.3485-.4041.0259-.8088-.0423-1.1816-.1991-2.8358-1.1313-5.4856-2.6752-7.8618-4.5808-2.3242-1.8958-4.3554-4.1189-6.0288-6.5985-1.408-2.0527-2.5281-4.2853-3.3298-6.6367-.0853-.2844-.1555-.573-.2103-.8647-.0156-.1268-.0179-.2548-.007-.382z" />
                                <path
                                    d="m46.3033 32.6973c2.3727.0435 4.6547.9106 6.4482 2.4503s2.9847 3.6542 3.366 5.9749c.1535.8438.2356 1.6988.2454 2.5561 0 .2014-.0526.3473-.2699.3681s-.2734-.1632-.2734-.3473c.0326-1.7341-.3267-3.4535-1.0515-5.0322-.6104-1.2972-1.5146-2.4375-2.6423-3.3319-1.1277-.8945-2.4485-1.5192-3.8596-1.8254-.7461-.1711-1.509-.2596-2.2748-.2639-.0746.0013-.149-.0081-.2208-.0278-.0612-.0171-.1133-.057-.1454-.1115-.032-.0544-.0415-.119-.0264-.1802.0005-.029.0067-.0577.0185-.0843.0117-.0266.0287-.0506.0499-.0707.0212-.02.0462-.0357.0736-.046.0274-.0104.0566-.0152.0858-.0143.1578-.0209.319-.0139.4767-.0139z" />
                                <path
                                    d="m53.0695 42.1157c-.0118-.9649-.2516-1.9135-.7002-2.7699s-1.0935-1.5968-1.883-2.1616c-.9215-.6414-1.9927-1.0394-3.1125-1.1565-.1893-.0243-.3786-.0347-.5714-.0556-.1927-.0208-.3084-.1007-.2909-.2952.0175-.1944.1402-.2639.3505-.25 3.1055.1875 5.7483 1.9274 6.5615 5.1676.1487.6248.2229 1.2647.2208 1.9067v.1736c0 .1736-.1121.2883-.2839.2848-.0381-.0013-.0755-.0102-.11-.0263s-.0653-.039-.0905-.0673c-.0253-.0282-.0445-.0613-.0564-.0972-.0119-.0358-.0163-.0737-.013-.1114-.028-.1632-.021-.3299-.021-.5417z" />
                                <path
                                    d="m47.6285 38.2467c1.7035.1146 2.8917.9412 3.2177 2.7367.0395.23.0676.4618.0841.6945 0 .1876-.0421.3473-.2488.3473-.2068 0-.2769-.1389-.284-.3473-.0019-.6882-.2159-1.3595-.6133-1.9239-.4177-.5113-1.0174-.8444-1.6755-.9308-.1471-.0272-.2957-.0458-.4451-.0555-.2454 0-.3821-.1216-.3505-.3091.0315-.1876.1787-.2223.3154-.2119z" />
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <section role="top-section" id="top-section" class="top-section bg-fb">
            <div class="home-video-bg">
                <video id="video_background" autoplay loop muted data-autoplay playsinline>
                    <source src="/video/video.mp4" type="video/mp4">
                </video>
            </div>
            <article class="container">
                <div class="row pt-5 top-section-content" data-aos="fade-up" data-aos-duration="500">
                    <div class="col-md-12 top-section-content-col text-center text-white">
                        <div class="mt-2" data-aos="fade-up" data-aos-duration="500">
                            <h1>Top </br>University and colleges</h1>
                        </div>
                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1500">
                            <h3>Shape Your Future with Edu-Hope</h3>
                        </div>
                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1500">
                            <a class="btn fill-button button-left-space" id="contact_button_landing_top"
                                href="/contact">Contact Us</a>
                        </div>


                    </div>

                </div>
            </article>
        </section>
        <section id="section-benefit" class="ai-fellowship--benefit py-5">
            <article class="container-xxl">
                <div class="row justify-content-center px-lg-5 px-xxl-0">
                    <div class="col-md-12 mb-4 text-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="text-primary mb-4 h2 font-semi-bold">Colleges highlights</div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/wol.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="mt-4 mb-0 font-semi-bold h6 font-semi-bold">University of Wolverhampton(WLV)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c2.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Sogang University</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c3.jpg" width="500" height="auto" alt="guest"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Hanyang University (HYU)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c4.jpg" width="500" height="auto" alt="newsletter"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Pohang University of Science and
                                    Technology (POSTECH)</div>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <span class="view-more">
                                    READ MORE
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c5.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Yonsei University (YSU) </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c6.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Korea University (KU)</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 my-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="benefits-list bg-white">
                            <img src="/images/colleges/c7.jpg" width="500" height="auto" alt="Cources"
                                class="img-fluid " />
                            <div class="summery-title">
                                <div class="font-semi-bold mt-4 mb-0 h6 font-semi-bold">Seoul National University (SNU)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <!-- intlTelInput -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/css/intlTelInput.css">
    </link>

    <script async type="text/javascript" src="/assets/js/download-aifellowship-syllabus.min.js"></script>

    <footer role="main-footer" id="footer" class="bg-Grey white pb-3">

        <article class="container">
            <div class="row py-4">
                <div class="col-md-5 footer-sign-up d-flex align-items-center">
                    <div class="h5">If you have any queries please let us know.</div>
                </div>
            </div>

            <div class="row pb-3">
                <div class="col-md-3 col-6">
                    <div class="h4">Programs</div>
                    <ul class="p-0">
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Scholorship</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Life Counceling</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Internship
                                Oppurtunities</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Work with Companies</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <div class="h4">Explore</div>
                    <ul class="p-0">
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Academics</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">College
                                Partners</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <div class="h4">Resources</div>
                    <ul class="p-0">
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Insights</a></li>
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Review</a></li>


                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <div class="h4">Connect with us</div>
                    <ul class="p-0">
                        <li class="list-unstyled py-1"><a class="footer-link" href="">Contact us</a></li>

                        <li class="list-unstyled py-1">
                            <a class="footer-link" href="https://www.linkedin.com/in/gayatri-basnet-9b8062217/"
                                target="_blank">
                                Linkedin
                            </a>
                        </li>

                        <li class="list-unstyled py-1">
                            <a class="footer-link" href="https://twitter.com/Ray284445941" target="_blank">
                                Twitter
                            </a>
                        </li>

                        <li class="list-unstyled py-1">
                            <a class="footer-link" href="https://www.facebook.com/heraldcollegektm/" target="_blank">
                                Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row pb-3 justify-content-center text-center">
                <div class="col-md-3">
                    © 2024 <a href="https://github.com/rayxrayy" class="footer-link">Edu-Hope Inc.</a>
                </div>

                <div class="col-md-3">
                    <a href="https://github.com/rayxrayy" class="footer-link">Privacy Policy</a> | <a href="/eula"
                        class="footer-link">SMS</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="small-font-size mb-0">
                        Edu-Hope is dedicated to transforming lives through education by providing accessible and
                        equitable opportunities for students worldwide. Our platform connects students with valuable
                        resources, scholarships, and educational opportunities, empowering them to pursue their academic
                        and career aspirations. With a commitment to fairness, transparency, and excellence, Edu-Hope
                        strives to bridge the gap between potential and opportunity, fostering a brighter future for
                        individuals and communities alike. Join us in our mission to unlock the power of education and
                        create a world where every student has the chance to thrive and succeed.</p>
                </div>
            </div>
        </article>
    </footer>
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"></a>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script async type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>

    <script>
    AOS.init();
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    $('.company--logo').owlCarousel({
        margin: 10,
        autoplay: false,
        nav: false,
        dots: false,
        responsive: {
            0: {
                autoplay: true,
                slideTransition: 'linear',
                autoplaySpeed: 9000,
                smartSpeed: 4000,
                items: 3
            },
            600: {
                autoplay: true,
                slideTransition: 'linear',
                autoplaySpeed: 9000,
                smartSpeed: 4000,
                items: 5
            },
            1140: {
                items: 7
            },
            1200: {
                items: 7
            }
        }
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#sticky-social').fadeIn();
        } else {
            $('#sticky-social').fadeOut();
        }
    });
    </script>
</body>

</html>