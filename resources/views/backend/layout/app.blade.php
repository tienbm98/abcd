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

    <!-- ########## START: MENU PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>thảo ngu ngốc<span>]</span></a></div>

    @extends('backend.layout.menu')

    <!-- ########## END: MENU PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->

    @extends('backend.layout.header')

    

    
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">
            Thảo "ngốk ngếk" xinh gái đanh đá yoang hồ các thứ các kiểu
            <br>Chỉ bắt nạt với hay dỗi mình là nhanh thôi <br>
            Chả nhẽ lại túm lại đấm cho trận <br>
            Đấm cho lại bảo ác =)))))
            </h4>
            <p class="mg-b-0"></p>
        </div>

        <div class="br-pagebody mg-t-5 pd-x-30">
            @yield('content')
        </div><!-- br-pagebody -->

        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2021. Mạnh Tiến. All Rights Reserved.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Contact me:</span>
                <a target="_blank" class="pd-x-5" href="https://www.facebook.com/imbaay"><i class="fa fa-facebook tx-20"></i></a>

            </div>
        </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

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
    <script>
        $(function() {
            'use strict'

            // FOR DEMO ONLY
            // menu collapsed by default during first page load or refresh with screen
            // having a size between 992px and 1299px. This is intended on this page only
            // for better viewing of widgets demo.
            $(window).resize(function() {
                minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
                if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideUp();
                } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideDown();
                }
            }
        });
    </script>
</body>

</html>