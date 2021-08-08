<x-app-layout>
    <x-slot name="header">
        @include('site.includes.header')
    </x-slot>

    @include('blog.last')

    <div class="row" style="--bs-gutter-x: 0rem !important;">
        <div class="col-md-8 col-xl-8 col-sm-12">
            <div class="container">
                <div class="mt-4 ml-2">

                    @if(isset($details))
                        <div>
                            <p> O resultado da pesquisa <b> {{ $query }} </b> é :</p>
                        </div>
                        @foreach ($details as $post)        
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
                                    <a href="#" class="stretched-link"> Continuar lendo </a>
                                </div>
                                <div class="col-5">
                                    <img class="img-thumbnail" src="{{ URL('/storage/img/blog/'. $post->imagelink) }}" alt="Imagem do Post {{ $post->title }}" width="auto" height="auto" />
                                </div>
                            </div>
                        @endforeach
                        <div class="m-3 mb-5 pb-3">
                            {!! $details->links() !!}
                        </div>
                    @else
                        <div class="text-center">
                            <h1 class="subtitle"> Nenhum resultado encontrado!</h1><br>
                            <div class="read-more clearfix d-flex justify-content-center align-items-center">
                                <a class="button button-font button-margin post-button" href="{{ URL::to( 'blog/' ) }}" title="Voltar aos Posts">Voltar à Página Inicial do Blog</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-4 col-sm-12">
            <div class="container">
                @include('blog.sidebar')
            </div>
        </div>
    </div>

    <x-slot name="footer">
        @include('site.includes.footer')
    </x-slot>
</x-app-layout>