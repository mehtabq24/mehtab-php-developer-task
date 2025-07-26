<!DOCTYPE html>
<html lang="en">

<head>

<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/x-icon">
<link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
<title>Stanfordcapital Admin</title>
    <!-- css -->
   <!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<!--font-awesome-css-->
<link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/css/all.css') }}">

<!--animation-css-->
<link rel="stylesheet" href="{{ asset('admin/vendor/animation/animate.min.css') }}">

<!-- iconoir icon css  -->
<link href="{{ asset('admin/vendor/ionio-icon/css/iconoir.css') }}" rel="stylesheet">
<!-- tabler icons-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/tabler-icons/tabler-icons.css') }}">

<!--flag Icon css-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/flag-icons-master/flag-icon.css') }}">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/bootstrap.min.css') }}">

<!--  prism CSS-->
<link href="{{ asset('admin/vendor/prism/prism.min.css') }}" rel="stylesheet">

<!-- simplebar css-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/simplebar/simplebar.css') }}">

<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">

<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}"></head>

<body>
<div class="app-wrapper d-block">
    <div class="">
        <!-- Body main section starts -->
        <main class="w-100 p-0">
            <!-- Login to your Account start -->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 p-0">
                        <div class="login-form-container">
                            <div class="form_container">

                                {{-- <form > --}}
                                    <form method="POST" action="{{ route('login') }}" class="app-form">
                                        @csrf
                                    <div class="mb-3 text-center">
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="emailId">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="mb-3 form-check">
                                        {{-- <input class="form-check-input" id="formCheck1" type="checkbox">
                                        <label class="form-check-label" for="formCheck1">remember me</label> --}}

                                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>

                                    </div>
                                    <div>
                                        {{-- <a class="btn btn-primary w-100" href="index.php.html" role="button">Continue</a> --}}

                                            <button type="submit" class="btn btn-primary w-100">
                                                {{ __('Login') }}
                                            </button>

                                      

                                    </div>
                                    <div class="app-divider-v justify-content-center">
                                        {{-- <p>OR</p> --}}
                                    </div>
                                    <div class="text-center">
                                          @if (Route::has('password.request'))
                                            <a class="text-secondary text-decoration-underline" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login to your Account end -->
        </main>
        <!-- Body main section ends -->
    </div>
</div>




<!-- Javascript -->

<!-- latest jquery-->
<script src="{{ asset('admin/js/jquery-3.6.3.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('admin/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
