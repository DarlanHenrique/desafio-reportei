<div class="col-8 offset-2 mt-5">
    <div class="card">
        <div class="card-header bg-info">
            <h3 class="text-white">Galeria de Imagens</h3>
        </div>

        <div class="container mb-3 mt-3">
            @if(count($galeries))
                <div class="row mx-auto my-auto">
                    <div id="recipeCarousel" class="carousel carousel-fade slide w-100" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($galeries as $galery)
                                <div class="carousel-item carousel-inner  {{$loop->index == 0 ? 'active' : ''}}">
                                    <div class="card mt-3">
                                        <a data-fancybox="galery" data-src="{{ URL('storage/img/galeries/'. $galery->imagelink) }}" data-caption="{{ $galery->name }}&lt;br /&gt;{{ $galery->description }}">
                                            <img class="card-img-top imgGalery" src="{{ URL('storage/img/galeries/'. $galery->imagelink) }}" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            @else
                <h5 class="text-center mt-2 mb-2">Nenhuma imagem cadastrada.</h5>
            @endif
        </div>
    </div> 
</div>