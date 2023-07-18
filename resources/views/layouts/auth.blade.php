<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="Control Panel Profil Perusahaan" />
        <title>@yield('title') | Company Profile</title>

        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}" />
        <!-- Aos Animation Css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}" />
        <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/hope-ui.min.css?v=1.2.0') }}" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.min.css?v=1.2.0') }}" />
        <!-- Dark Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/dark.min.css') }}" />
        <!-- Customizer Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/customizer.min.css') }}" />
        <!-- RTL Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.min.css') }}" />
    </head>

    <body>
        <!-- loader Start -->
        @include('components.loader')  
        <!-- loader END -->

        <div class="wrapper">
            <section class="login-content">
               <div class="row m-0 align-items-center bg-white vh-100">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                                    <div class="card-body">
                                        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center mb-3">
                                        <!--Logo start-->
                                        <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="{{ url('http://www.w3.org/2000/svg') }}">
                                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                        </svg>
                                        <!--logo End-->                              
                                        <h4 class="logo-title ms-3">BubbaTech ID</h4>
                                        </a>
                                        <h2 class="mb-2 text-center">@yield('title')</h2>
                                        <p class="text-center">@yield('title') untuk tetap terhubung.</p>
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                        <img src="{{ asset('assets/images/auth/01.png') }}" class="img-fluid gradient-main animated-scaleX" alt="images">
                    </div>
                </div>
            </section>
        </div>

        <script src={{ url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js") }} integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Library Bundle Script -->
        <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
        <!-- External Library Bundle Script -->
        <script src="{{ asset('assets/js/core/external.min.js') }}"></script>
        <!-- Widgetchart Script -->
        <script src="{{ asset('assets/js/charts/widgetcharts.js') }}"></script>
        <!-- mapchart Script -->
        <script src="{{ asset('assets/js/charts/vectore-chart.js') }}"></script>
        <script src="{{ asset('assets/js/charts/dashboard.js') }}"></script>
        <!-- fslightbox Script -->
        <script src="{{ asset('assets/js/plugins/fslightbox.js') }}"></script>
        <!-- Settings Script -->
        <script src="{{ asset('assets/js/plugins/setting.js') }}"></script>
        <!-- Slider-tab Script -->
        <script src="{{ asset('assets/js/plugins/slider-tabs.js') }}"></script>
        <!-- Form Wizard Script -->
        <script src="{{ asset('assets/js/plugins/form-wizard.js') }}"></script>
        <!-- AOS Animation Plugin-->
        <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
        <!-- App Script -->
        <script src="{{ asset('assets/js/hope-ui.js') }}"></script>
    </body>
</html>