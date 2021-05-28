{{--
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{config('app.name')}} - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Auto <sup>miner</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        @can('edit payment')
        <hr class="sidebar-divider">
        <!-- Nav Item - Transaction -->

        <li class="nav-item active">
            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-history"></i>
                <span>Transaction History</span></a>
        </li>
        @endcan

        <!-- Divider -->
        @can('add user')
        <hr class="sidebar-divider">
        <!-- Nav Item - Users -->

        <li class="nav-item active">
            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-user"></i>
                <span>Users</span></a>
        </li>
    @endcan
        <!-- Divider -->
        @can('edit investment')
        <hr class="sidebar-divider">
        <!-- Nav Item - Plans -->

        <li class="nav-item active">
            <a class="nav-link" href="/investments/viewAllInvestmentPlans">
                <i class="fas fa-fw fa-book-open"></i>
                <span>Plans</span></a>
        </li>
    @endcan
         <!-- Divider -->
        @if(Auth::user()->hasRole('user'))
        <hr class="sidebar-divider">
        <!-- Nav Item - Plans -->

        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-money-bill"></i>
                <span>Request Payout</span></a>
        </li>
    <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-check-circle"></i>
                <span>Request Capital</span></a>
        </li>
    @endif
        <!-- Divider -->
        @can('edit payment')
        <hr class="sidebar-divider">
        <!-- Nav Item - Payment -->

        <li class="nav-item active">
            <a class="nav-link" href="/payments">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Payment</span></a>
        </li>
    @endcan


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="roundevendor/jquery/jquery.min.jsd-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

            <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->fullName()}}</span>
                            @if (config('app.env') === 'production')
                                <img class="img-profile rounded-circle"
                                     src="{{ Avatar::create(Auth::user()->fullName())->toBase64() }}" alt="{{Auth::user()->fullName()}}"/>
                            @endif
                         </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            @can('edit setting')
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#settings">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            @endcan
                                @can('edit user')
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            @endcan
                                @if(Auth::user()->hasRole('user'))
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user-injured fa-sm fa-fw mr-2 text-gray-400 text-danger"></i>
                                        Delete account
                                    </a>
                                @endif

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session()->get('success') }}
                </div>
                @elseif(session()->has('errors'))
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    @foreach(session()->get('errors') as $error)
                        <ul>
                            <ol>{{$error}}</ol>
                        </ul>
                    @endforeach
                </div>
                --}}
{{--($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}--}}{{--

        @endif

        @yield('content')

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; {{config('app.name')}} @php echo date('Y')@endphp</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
    @auth
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>
    </div>
</div>

        <!-- Settings Modal -->
        @if(Auth::user()->hasRole(['admin,super-admin']))
        <div class="modal fade" id="settings">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Wallet addresses:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/core/addSettings">
                            @csrf
                            <div class="form-group">
                                <label for="input">Bitcoin Wallet Address</label>
                                <input class="form-control" type="text" id="input" name="bitcoinWalletAddress" placeholder="Enter Bitcoin Wallet Address" value="{{$setting->bitcoinWalletAddress ?? ""}}" autocomplete="on" />
                            </div>
                            <div class="form-group">
                                <label for="input">LiteCoin Wallet Address</label>
                                <input class="form-control" type="text" id="input" name="litecoinWalletAddress" placeholder="Enter LiteCoin Wallet" value="{{$setting->litecoinWalletAddress ?? ""}}" autocomplete="on" />
                            </div>
                            <div class="form-group">
                                <label for="input">Ethereum Wallet Address</label>
                                <input class="form-control" type="text"  id="input" name="ethereumWalletAddress" placeholder="Enter Ethereum Wallet Address" value="{{$setting->ethereumWalletAddress ?? ""}}" autocomplete="on" />
                            </div>

                            <div class="form-group">

                                <input class="form-control btn btn-outline-success" type="submit"/>
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endauth


</div>
@auth
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endauth
<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
<!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>
<script>

    function ClipBoard()
    {
        holdtext.innerText = copytext.innerText;
        Copied = holdtext.createTextRange();
        Copied.execCommand("Copy");
    }

</script>
<script src="//code.jivosite.com/widget/a8wNYWI9B3" async></script>
</body>

</html>
--}}

<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('assets/css/modal-video.min.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <!-- toastr js -->
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
    <!-- data table -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.css')}}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>

<div class="notification-alert">
    <div class="notice-list">

    </div>
</div>

<!-- preloader begin-->
<div class="preloader">
    <img src="assets/img/tenor.gif" alt="">
</div>
<!-- preloader end -->

<div class="mobile-navbar-wrapper">

    <!-- header begin -->
    <div class="header header-style-4" id="header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-3">
                        <div class="welcome-text">
                            <p>Welcome</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-9 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="part-right">
                            <ul>
                                <li>
                                    <span class="simple-text">Sever Time : </span>
                                    <div class="server-time">
                                        <div class="single-time clock-time">
                                                    <span class="icon">
                                                        <i class="far fa-clock"></i>
                                                    </span>
                                            <span class="text">
                                                        <span id="hours"></span>
                                                        <span id="minutes"></span>
                                                        <span id="seconds"></span>
                                                    </span>
                                        </div>
                                        <div class="single-time">
                                                    <span class="icon">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </span>
                                            <span class="text">
                                                        <span id="date"></span>
                                                        <span id="month"></span>
                                                        <span id="year"></span>
                                                    </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <div class="col-4 d-xl-none d-lg-none d-block">
                                <button class="navbar-toggler" type="button">
                                    <span class="dag"></span>
                                    <span class="dag2"></span>
                                    <span class="dag3"></span>
                                </button>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-8 d-xl-block d-lg-block d-flex align-items-center justify-content-end">
                                <div class="logo">
                                    <a href="/dashboard">
                                        <img src="{{asset('images/Asset 2@4x.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <div class="mainmenu">
                            <div class="d-xl-none d-lg-none d-block">
                                <div class="user-profile">
                                    <div class="part-img">
                                        @if (config('app.env') === 'production')
                                            <img src="{{ Avatar::create(Auth::user()->fullName())->toBase64() }}" alt="{{Auth::user()->fullName()}}">

                                        @endif
                                         </div>
                                    <div class="user-info">
                                        <span class="user-name">{{Auth::user()->fullName()}}</span>
                                        <span class="user-balance">Bal : $22.25</span>
                                    </div>

                                </div>
                            </div>
                            <nav class="navbar navbar-expand-lg">

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        {{--<li class="nav-item">
                                            <a class="nav-link" href="">about us<span class="sr-only">(current)</span></a>
                                        </li>

                                        <li class="nav-item dropdown show">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" id="db-Dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                dashboard
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="db-Dropdown">
                                                <a class="dropdown-item" href="dashboard.html">My account</a>
                                                <a class="dropdown-item" href="db-investment.html">Investment</a>
                                                <a class="dropdown-item" href="db-withdraw.html">Withdraw</a>
                                                <a class="dropdown-item" href="db-history.html">History</a>
                                                <a class="dropdown-item" href="db-referral.html">Referrals</a>
                                                <a class="dropdown-item" href="db-settings.html">Settings</a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown show">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                pages
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                                <a class="dropdown-item" href="affiliate.html">Affiliate</a>
                                                <a class="dropdown-item" href="transaction.html">transaction</a>
                                            </div>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">contact</a>
                                        </li>--}}
                                        <li class="nav-item join-now-btn">
                                            <a class="nav-link" href="/">Go to Website</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- breadcrumb begin -->
    <div class="breadcrumb-oitila db-breadcrumb">
        <div class="container">
            <div class="row justify-content-lg-around">
                <div class="col-xl-6 col-lg-7 col-md-5 col-sm-6 col-8">
                    <div class="part-txt">
                        <h1>Dashboard</h1>
                        <ul>
                            <li>home</li>
                            <li>{{$page ?? ''}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7 col-sm-6 col-4 d-flex align-items-center">
                    <div class="db-user-profile">
                        <div class="part-data">
                            <span class="name">{{Auth::user()->fullName()}}</span>
                            <ul>
                                <li>
                                    <span class="text">Invest</span>
                                    <span class="number">$100</span>
                                </li>
                                <li>
                                    <span class="text">Earings</span>
                                    <span class="number">$250</span>
                                </li>
                            </ul>
                        </div>
                        <div class="part-img">
                            @if (config('app.env') === 'production')
                            <img src="{{ Avatar::create(Auth::user()->fullName())->toBase64() }}" alt="{{Auth::user()->fullName()}}">
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- account begin -->
    <div class="user-dashboard">
        <div class="container">

            <div class="dashboard-menu">
                <nav>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link active" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="db-investment.html">Investment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="db-withdraw.html">Withdraw</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="db-referral.html">Referrals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="db-settings.html">Settings</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="user-statics">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/icon/002-cash.png" alt="">
                            </div>
                            <div class="part-info">
                                <span class="number">$9,568.00</span>
                                <span class="text">Ultimate Balance</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/icon/003-credit-card.png" alt="">
                            </div>
                            <div class="part-info">
                                <span class="number">$7,480.00</span>
                                <span class="text">Total Payout</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/icon/001-donation.png" alt="">
                            </div>
                            <div class="part-info">
                                <span class="number">$24k.00</span>
                                <span class="text">Deposits Total</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/icon/004-hourglass.png" alt="">
                            </div>
                            <div class="part-info">
                                <span class="number">$242.00</span>
                                <span class="text">Pending Amount</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/icon/005-percentage.png" alt="">
                            </div>
                            <div class="part-info">
                                <span class="number">$465.00</span>
                                <span class="text">Interest Earn</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/icon/006-wage.png" alt="">
                            </div>
                            <div class="part-info">
                                <span class="number">$158.00</span>
                                <span class="text">Total Earning</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/icon/007-referral.png" alt="">
                            </div>
                            <div class="part-info">
                                <span class="number">$814.00</span>
                                <span class="text">Referral Earings</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/icon/008-transfer.png" alt="">
                            </div>
                            <div class="part-info">
                                <span class="number">$534.00</span>
                                <span class="text">Fund Transfer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           @yield('content')
        </div>
    </div>
    <!-- account end -->

    <!-- footer begin -->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="about-widget">
                            <a href="/" class="logo">
                                <img src="{{asset('images/Asset 8@4x.png')}}" alt="{{config('app.name')}}">
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis commodi ut illum. Cumque, unde suscipit error!</p>
                            <div class="social-links">
                                <ul>
                                    <li>
                                        <a href="#0" class="single-link">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-10">
                        <div class="link-widget">
                            <h4 class="title">
                                Useful links
                            </h4>
                            <ul>
                                <li>
                                    <a href="#0" class="single-link">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="single-link">
                                        Affiliate
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="single-link">
                                        Pricing Plan
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="single-link">
                                        Profit
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="single-link">
                                        Terms & Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-10">
                        <div class="newsletter-widget">
                            <h4 class="title">
                                Subscribe To Our Newsletter
                            </h4>
                            <form class="newsletter-form">
                                <input type="text" placeholder="Enter Your Mail Address">
                                <button class="def-btn def-small">
                                    Subscribe
                                </button>
                            </form>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi accusamus labore recusandae! Quia sint consectetur explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <p>Copyright © <a href="/">{{config('app.name')}}</a> - @php echo date('Y');@endphp. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->

</div> <!-- mobile navbar wrapper end -->

<div class="d-xl-none d-lg-none d-block">
    <div class="mobile-navigation-bar">
        <ul>
            <li>
                <a href="#0">
                    <img src="assets/img/svg/profile.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#0">
                    <img src="assets/img/svg/money-transfering.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#0">
                    <img src="assets/img/svg/calculator.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#header">
                    <img src="assets/img/svg/arrow.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="d-xl-block d-lg-block d-none">
    <div class="back-to-top-btn">
        <a href="#">
            <img src="assets/img/svg/arrow.svg" alt="">
        </a>
    </div>
</div>

@auth
<!-- Settings Modal -->
@if(Auth::user()->hasRole(['admin,super-admin']))
    <div class="modal fade" id="settings">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Wallet addresses:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/core/addSettings">
                        @csrf
                        <div class="form-group">
                            <label for="input">Bitcoin Wallet Address</label>
                            <input class="form-control" type="text" id="input" name="bitcoinWalletAddress" placeholder="Enter Bitcoin Wallet Address" value="{{$setting->bitcoinWalletAddress ?? ""}}" autocomplete="on" />
                        </div>
                        <div class="form-group">
                            <label for="input">LiteCoin Wallet Address</label>
                            <input class="form-control" type="text" id="input" name="litecoinWalletAddress" placeholder="Enter LiteCoin Wallet" value="{{$setting->litecoinWalletAddress ?? ""}}" autocomplete="on" />
                        </div>
                        <div class="form-group">
                            <label for="input">Ethereum Wallet Address</label>
                            <input class="form-control" type="text"  id="input" name="ethereumWalletAddress" placeholder="Enter Ethereum Wallet Address" value="{{$setting->ethereumWalletAddress ?? ""}}" autocomplete="on" />
                        </div>

                        <div class="form-group">

                            <input class="form-control btn btn-outline-success" type="submit"/>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif
@endauth

        <!-- jquery -->
        <script src="{{asset('assets/js/jquery.js')}}"></script>
        <!-- popper js -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- modal video js -->
        <script src="{{asset('assets/js/jquery-modal-video.min.js')}}"></script>
        <!-- slick js -->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <!-- toastr js -->
        <script src="{{asset('assets/js/toastr.min.js')}}"></script>
        <!-- chart js -->
        <script src="{{asset('assets/js/Chart.min.js')}}"></script>
        <script src="{{asset('assets/js/chart-activate.js')}}"></script>
        <!-- utils for chart js -->
        <script src="{{asset('assets/js/utils.js')}}"></script>
        <!-- data table -->
        <script src="{{asset('assets/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/js/data-able-active.js')}}"></script>
        <!-- clock js -->
        <script src="{{asset('assets/js/clock.min.js')}}"></script>
        <!-- main -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="//code.jivosite.com/widget/a8wNYWI9B3" async></script>
</body>
</html>
