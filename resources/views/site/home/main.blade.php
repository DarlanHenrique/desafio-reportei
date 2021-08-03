<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Laravel Tech Challenge
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="container bg-white">
            <div class="text-center col-12">
                <h4 class="pt-3">Bem vindo {{ Auth::user()->name }}!</h4>
                <h4>Aqui você verá o que pode fazer em nossa plataforma!</h4>
            </div>
            <hr>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="text-xl fas fa-list-ul fa-5x"></i>
                                <h5 class="card-title mt-3">Categorias</h5>
                                <p class="card-text"></p>
                                <a href="" class="btn btn-outline-dark">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="text-xl fas fa-blog fa-5x"></i>
                                <h5 class="card-title mt-3">Blog</h5>
                                <p class="card-text"></p>
                                <a href="" class="btn btn-outline-dark">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="text-xl far fa-address-card fa-5x"></i>
                                <h5 class="card-title mt-3">Contato</h5>
                                <p class="card-text"></p>
                                <a href="" class="btn btn-outline-dark">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="text-xl fas fa-user fa-5x"></i>
                                <h5 class="card-title mt-3">Usuário</h5>
                                <p class="card-text"></p>
                                <a href="" class="btn btn-outline-dark">Visitar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</x-app-layout>


<!-- 
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-3">
                        <img src="https://images3.alphacoders.com/232/thumb-1920-232645.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-primary">Ver Mais</a>
                        </div>
                    </div>
                </div>
            </div> -->