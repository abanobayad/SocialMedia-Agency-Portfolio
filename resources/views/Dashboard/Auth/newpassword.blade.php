<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/dash/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/dash/assets/img/favicon.png">
    <title>
        Forgot Password - Remon Ayad Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/dash/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/dash/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/dash/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/dash/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>

<body class="">
    @include('sweetalert::alert')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Forgot Password</h4>
                                    <p class="mb-0">Enter your email to send token</p>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('doRest') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="token" value="{{$token}}">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{ $email?? old('email') }}"
                                                class="form-control p_input">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" value="{{ old('password') }}"
                                                class="form-control p_input">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Password Confirmation</label>
                                            <input type="password" name="c_password" value="{{ old('c_password') }}"
                                                class="form-control p_input">
                                            @error('c_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block enter-btn">Send Password Rest Link</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Remember Passowd?
                                        <a href="{{route('login')}}" class="text-primary text-gradient font-weight-bold">Sign
                                            in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
                                    background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new
                                    currency"</h4>
                                <p class="text-white position-relative">The more effortless the writing looks, the more
                                    effort the writer actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!--   Core JS Files   -->
    <script src="/dash/assets/js/core/popper.min.js"></script>
    <script src="/dash/assets/js/core/bootstrap.min.js"></script>
    <script src="/dash/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/dash/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/dash/assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>

</html>
