<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Tech Challenge</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/imagem7.png') }}" />
        @stack('styles')

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    </head>
    
    <body class="hold-transition sidebar-mini sidebar-collapse">
        
        <div class="wrapper">
            
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                    </li>
                </ul>
                
            </nav>
            <!-- /.navbar -->
            
            @include('navigation-menu')
            @include('admin.includes.success')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>
                                    @yield('titulo')
                                </h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                <div class="content">
                    <div id="app" class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->
            
            
            <!-- Main Footer -->
            <footer class="main-footer">
                @include('site.includes.footer')

            </footer>
        </div>
        <!-- ./wrapper -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            var errors = {!! $errors !!}
        </script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/components/error.js')  }}"></script>
        <script>
            $(function() {
                $('.select2').select2({
                placeholder: 'Selecione uma opção',
                allowClear: true
                });
            });
        </script>
        @stack('scripts')
    </body>
    
    </html>