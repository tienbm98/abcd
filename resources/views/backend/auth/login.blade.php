<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>YASUO</title>

    <!-- vendor css -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chartist.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
</head>

<body>

    <div class="d-flex justify-content-center pd-t-90">
        <div class="row">
            <div class="col-sm-6 bg-primary">
                <div class="pd-40">
                    <h4 class="tx-white mg-b-20"><span>[</span> bracket + <span>]</span></h4>
                    <p class="tx-white op-7 mg-b-60">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <p class="tx-white tx-13">
                        <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                        <span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pd-30">
                    <div class="pd-xs-x-30 pd-y-10">
                        <h5 class="tx-xs-28 tx-inverse mg-b-5">Welcome back!</h5>
                        <p>Sign in to your account to continue</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input type="email" name="email" class="form-control pd-y-12" placeholder="Enter your email">
                            </div>

                            <div class="form-group mg-b-20">
                                <input type="password" name="password" class="form-control pd-y-12" placeholder="Enter your password">
                            </div>

                            <button type="submit" class="btn btn-primary pd-y-12 btn-block">Sign In</button>
                        </form>
                        <div>
                        <a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
                        </div>
                        <div class="mg-t-30 mg-b-20 tx-12">Don't have an account yet? <a href="">Sign Up</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('js/jquery.peity.js') }}"></script>
    <script src="{{ asset('js/chartist.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/d3.js') }}"></script>
    <script src="{{ asset('js/rickshaw.min.js') }}"></script>


    <script src="{{ asset('js/bracket.js') }}"></script>
    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>