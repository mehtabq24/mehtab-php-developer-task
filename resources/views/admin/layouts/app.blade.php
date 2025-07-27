<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">    
    <!-- Favicons -->
    <link href="{{ asset('admin/images/logo/favicon.png') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('admin/images/logo/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
    
    <title>Stanford Admin Dashboard</title>
    <!-- editor css -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/trumbowyg/trumbowyg.min.css') }}">

         <!-- Selecrt css -->
    <link href="{{ asset('admin/vendor/select/select2.min.css') }}" rel="stylesheet">

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <!-- CSS Assets -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/css/all.css') }}">

    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/animation/animate.min.css') }}">

    <!-- Ionio Icon -->
    <link href="{{ asset('admin/vendor/ionio-icon/css/iconoir.css') }}" rel="stylesheet">

    <!-- Tabler Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/tabler-icons/tabler-icons.css') }}">

    <!-- Flag Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/flag-icons-master/flag-icon.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- Prism -->
    <link href="{{ asset('admin/vendor/prism/prism.min.css') }}" rel="stylesheet">

    <!-- Simplebar -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/simplebar/simplebar.css') }}">

    <!-- Main Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">



    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/slick/slick-theme.css') }}">

    <!-- Filepond -->
    <link href="{{ asset('admin/vendor/filepond/filepond.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/filepond/image-preview.min.css') }}" rel="stylesheet">

    <!-- Glightbox -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/glightbox/glightbox.min.css') }}">

      <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/datatable/jquery.dataTables.min.css') }}">
</head>

<body>

<div class="app-wrapper">
    <!-- app loader -->
    <!-- app loader -->
<div class="loader-wrapper">
    <div class="loader_16"></div>
</div>
    <!-- Menu Navigation starts -->
            @include('admin.partials.side_bar')
    <!-- Menu Navigation ends -->

    <div class="app-content">
        <!-- Header Section starts -->
        <header>
            @include('admin.partials.header')
            @yield('header-content') <!-- Optional header overrides -->
        </header>
        <!-- Header Section ends -->
            <!-- Main Content starts-->
            <main>
                @yield('content')
            </main>
                <!-- Main Content starts-->
    </div>

    <!-- tap on top -->
<div class="go-top">
      <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
      </span>
</div>

<!-- Footer Section starts-->
    <footer>
        @include('admin.partials.footer')
    </footer>
<!-- Footer Section ends-->

</div>


<!--customizer-->
<div id="customizer"></div>

<!-- latest jquery-->
<script src="{{ asset('admin/js/jquery-3.6.3.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('admin/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- phosphor js -->
<script src="{{ asset('admin/vendor/phosphor/phosphor.js') }}"></script>

<!--Prism JS-->
<script src="{{ asset('admin/vendor/prism/prism.min.js') }}"></script>

<!-- Simple bar js-->
<script src="{{ asset('admin/vendor/simplebar/simplebar.js') }}"></script>

<!-- App js-->
<script src="{{ asset('admin/js/script.js') }}"></script>

<!-- Customizer js-->
<script src="{{ asset('admin/js/customizer.js') }}"></script>

<!-- slick-file -->
<script src="{{ asset('admin/vendor/slick/slick.min.js') }}"></script>

<!-- select2 -->
<script src="{{ asset('admin/vendor/select/select2.min.js') }}"></script>

<!-- filepond -->
<script src="{{ asset('admin/vendor/filepond/file-encode.min.js') }}"></script>
<script src="{{ asset('admin/vendor/filepond/validate-size.min.js') }}"></script>
<script src="{{ asset('admin/vendor/filepond/validate-type.js') }}"></script>
<script src="{{ asset('admin/vendor/filepond/exif-orientation.min.js') }}"></script>
<script src="{{ asset('admin/vendor/filepond/image-preview.min.js') }}"></script>
<script src="{{ asset('admin/vendor/filepond/filepond.min.js') }}"></script>


<!-- Trumbowyg js -->
<script src="{{ asset('admin/vendor/trumbowyg/trumbowyg.min.js') }}"></script>

<!-- add product -->
<script src="{{ asset('admin/js/add_product.js') }}"></script>


<!-- latest jquery-->
<script src="{{ asset('admin/vendor/datatable/jquery.dataTables.min.js') }}"></script>


<!-- js-->
<script src="{{ asset('admin/js/data_table.js') }}"></script>








</body>
</html>
