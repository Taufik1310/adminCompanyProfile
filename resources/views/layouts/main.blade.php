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

        @include('components.aside')

        <main class="main-content">
            @include('components.banner')
            <div class="conatiner-fluid content-inner mt-n5 py-0">
                <div class="row">
                    @yield('content')
                </div>
            </div>

            <!-- Footer Section Start -->
            @include('components.footer')
            <!-- Footer Section End -->
        </main>
        <!-- Wrapper End-->
        
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
