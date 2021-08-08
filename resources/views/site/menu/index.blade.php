<div class="row">
    <div class="col-8 offset-2 mt-5 mb-5 pb-5">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Menu</h3>
            </div>
            @if (Auth::check())    
                <div class="text-center col-12">
                    <h4 class="pt-3">Bem vindo {{ Auth::user()->name }}!</h4>
                    <h4>Aqui você verá o que pode fazer em nossa plataforma!</h4>
                </div>
                <hr>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="text-xl fas fa-list-ul fa-5x"></i>
                                <h5 class="card-title mt-3">Categorias</h5>
                                <p class="card-text"></p>
                                <a href="{{ route('blogCategories.index') }}" class="btn btn-outline-dark">Visitar</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="text-xl fas fa-blog fa-5x"></i>
                                <h5 class="card-title mt-3">Blog</h5>
                                <p class="card-text"></p>
                                <a href="{{ route('posts.index') }}" class="btn btn-outline-dark">Visitar</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="text-xl far fa-address-card fa-5x"></i>
                                <h5 class="card-title mt-3">Contato</h5>
                                <p class="card-text"></p>
                                <a href="{{ route('contacts.index') }}" class="btn btn-outline-dark">Visitar</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="text-xl fas fa-user fa-5x"></i>
                                <h5 class="card-title mt-3">Usuário</h5>
                                <p class="card-text"></p>
                                <a href="" class="btn btn-outline-dark">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();" class="btn btn-outline-danger mt-2 d-flex justify-content-center mb-3">
                            <i class="fas fa-sign-in-alt"></i> {{ __(' Sair') }}
                        </x-jet-responsive-nav-link>
                    </form>
                </div>
            @else
                <div class="text-center col-12 mb-3 mt-3">
                    <h4 class="pt-3">Você precisa estar logado para ver essa opção.</h4>
                    <a href="{{ route('login') }}" class="btn btn-outline-success mt-2"><i class="fas fa-sign-in-alt"></i> Login</a>
                </div>
            @endif
        </div>
    </div>
</div>