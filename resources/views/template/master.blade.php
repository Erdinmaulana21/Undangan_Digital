<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title_web')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/components.css') }}">
    <link rel="shortcut icon" href="{{ asset('template/assets/img/sarpras.png') }}">
    @stack('link')
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('template.layouts.navbar')
            @include('template.layouts.sidebar')

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1 style="font-size: 25px"><b>@yield('title_content')</b></h1>
                        <div class="section-header-breadcrumb" aria-label="breadcrumb">
                            @yield('breadcrumb')
                        </div>
                    </div>
                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Yakin Ingin Keluar?
                    </h5>
                    <button class="close text-danger" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="dropdown-divider"></div>
                <div class="modal-body">Pilih Logout di bawah ini jika anda siap untuk mengakhiri sesi anda saat ini.
                    Pilih Cancel jika tidak ingin mengakhiri sesi.</div>
                <div class="dropdown-divider"></div>
                <div class="modal-footer">
                    {{-- <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary mr-2" type="submit" data-dismiss="modal"><i
                                class="fas fa-window-close has-icon mr-2"></i>Cancel</button>
                        <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
              this.closest('form').submit();"><i class="fa fa-power-off has-icon mr-2"></i>Logout</a>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('template/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script
        src="{{ asset('template/node_modules/datatables/media/js/jquery.dataTables.min.js') }}">
    </script>
    <script
        src="{{ asset('template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script
        src="{{ asset('template/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}">
    </script>

    <!-- Template JS File -->
    <script src="{{ asset('template/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('template/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('template/assets/js/page/modules-datatables.js') }}"></script>

    @include('sweetalert::alert')

    <!-- JS Libraies -->
    <script src="{{ asset('template/node_modules/sweetalert/dist/sweetalert.min.js') }}">
    </script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('template/assets/js/page/modules-sweetalert.js') }}"></script>
    @stack('script')
</body>

</html>