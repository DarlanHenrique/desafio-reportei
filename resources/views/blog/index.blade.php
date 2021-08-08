<style>
    .img-post{
        width: 100%;
        height: 100%;
    }
</style>

<div class="mt-1 m-2">
    @if(count($posts))
        @foreach ($posts as $post)
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"> 
                        @foreach ($categories as $category)
                            @if($category->id == $post->category_id)
                                <a class="text-success" href="{{ route('blogcategory',$category->id ) }}">
                                    {{$category->name}}
                                </a>
                            @endif
                        @endforeach
                    </strong>
                    <h3 class="mb-0">{{$post->title}}</h3>
                    <div class="mb-1 text-muted">{{ date("d/m/Y", strtotime($post->created_at)) }}</div>
                    <p class="mb-auto">{!! $post->resume !!}</p>
                    <a href="{{ route('blogpost', $post->id) }}" class="stretched-link"> Continuar lendo </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <img class="img-thumbnail img-post" src="{{ URL('/storage/img/blog/'. $post->imagelink) }}" alt="Imagem do Post {{ $post->title }}" width="auto" height="auto" />
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center mt-5">
            <h1 class="subtitle"> Nenhum resultado encontrado!</h1><br>
            <div class="read-more clearfix d-flex justify-content-center align-items-center">
                <a class="button button-font button-margin post-button" href="{{ URL::to( 'blog/' ) }}" title="Voltar aos Posts">Voltar à Página Inicial do Blog</a>
            </div>
        </div>
    @endif
</div>