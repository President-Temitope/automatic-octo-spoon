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
                            <a class="dropdown-item" data-toggle="modal" data-target="#settings">
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
                {{--($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}--}}
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
                                <input class="form-control" type="text" id="input" name="liteWalletAddress" placeholder="Enter LiteCoin Wallet" value="{{$setting->liteWalletAddress ?? ""}}" autocomplete="on" />
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
