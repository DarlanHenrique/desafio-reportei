<div class="col-8 offset-2 mt-5">
    <div class="card">
        <div class="card-header bg-info">
            <h3 class="text-white">Blog</h3>
        </div>

        <div class="container row">
            @if(count($posts))
                @foreach($posts as $post)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
                        <div class="card mb-3">
                            <img src="{{ URL('storage/img/blog/'. $post->imagelink) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ \Illuminate\Support\Str::limit($post->title, 10, '...') }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($post->resume, 50, '...') }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-outline-primary">Ver Mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h5 class="text-center mt-2 mb-2">Nenhum Post cadastrado.</h5>
            @endif
        </div>
        @if(count($posts))
            <a href="" class="btn btn-outline-info m-2">Ver mais <i class="fas fa-arrow-right"></i></a>
        @endif
    </div>
</div>