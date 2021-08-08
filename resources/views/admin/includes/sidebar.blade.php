<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-x: hidden;">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="{{ asset('img/imagem7.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Administrativa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="{{ route('profile.show', Auth::user()->id ) }}">
                    <img src="{{ asset('img/imagem7.png') }}" class="img-circle elevation-2 perfil-sidebar">
                </a>
            </div>
            <div class="info">
                <a href="{{ route('profile.show', Auth::user()->id ) }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
            <div class="info align-self-center">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-power-off"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-undo-alt"></i>
                        <p>Voltar ao Site</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" >
                    <a href="#" class="nav-link {{ Route::is('categoria.index' , 'main') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>Blog <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="{{route('categoria.index')}}" class="nav-link {{ Route::is('categoria.index') ? 'active' : '' }}">
                                <i class="nav-icon fab fa-blogger-b"></i>
                                <p>Categoria</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('main')}}" class="nav-link {{ Route::is('main') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>Post</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>