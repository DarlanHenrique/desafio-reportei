<x-app-layout>
    <x-slot name="header">
        @include('site.includes.header')
    </x-slot>
    @include('blog.last')

    <div class="row" style="--bs-gutter-x: 0rem !important;">
      <div class="col-md-8 col-xl-8 col-sm-12 p-4">
            <h2 class="text-center">{{ $post->title }}</h2>
            <div class="container borderpost comment-respond">
                <div class="img-thumbnail mb-4">
                    <a title="{{ $post->title }}">
                        <img src="{{ URL('storage/img/blog/'. $post->imagelink) }}" class="img-fluid" alt="Imagem do post {{ $post->title }}" />
                    </a>
                </div>

                <div class="text-justify">
                    {!! $post->text !!}
                </div>

                <div class="text-right mt-3">
                    <p><i>{{ $post->author }}</i></p>
                </div>
                @if($next)
                    <div class="read-more clearfix">
                        <a class="button button-margin button-font post-button text-right" href="{{ URL::to( 'blog/' . $next ) }}" title="Próximo Post">Próximo Post <i class="fas fa-arrow-right"></i></a>
                    </div>
                @endif
                <hr>
                @include('blog.comments')
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