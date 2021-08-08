<div class="bg-white p-3">
    <!-- Searchbar -->
    <div class="product-form">
        <form class="input-group" action="{{ route('blogsearch') }}" method="GET" role="search">
            <input class="form-control" type="text"  placeholder="Procure..." aria-label="Porcurar" name="blog_search" value="{{ request('blog_search') }}">
            <div class="input-group-prepend">
                <button class="input-group-text btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <hr>
    <!-- Recent Posts -->
    <div class="pr-5 mr-5 mt-1">
        <h4 class="mb-3 font-weight-bold">Últimos Posts</h4>
        @if(count($recents))
            @foreach ($recents as $recent)
                <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded pr-3 mr-3" style="background: url({{ URL('storage/img/blog/'. $recent->imagelink) }}); background-position: center left; background-size: cover; height: 100px">
                    <div class="bg-dark-overlay-4 pr-3">
                        <a href="{{ route('blogpost', $recent->id) }}" class="stretched-link btn-link fw-bold text-white"><h5>{{ $recent->title }}</h5></a>
                        <p class="text-white">{!! $recent->resume !!}</p>
                    </div>
                </div>
            @endforeach
            <!-- View All Post button -->
            <div class="text-center mt-3">
                <a href="{{ route('blog') }}" class="fw-bold text-muted text-primary-hover"><u>Veja todos os posts</u></a>
            </div>
        @else
            <h6>Nenhum Post Cadastrado!</h6>
        @endif
        <hr>
    </div>
    <!-- Blog Categories -->
    <aside>
        <h4 class="font-weight-bold">Categorias</h4>
        @if(count($categories))
            @foreach ($categories as $category)
                <p><a href="{{ route('blogcategory',$category->id ) }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> {{$category->name}}</a></p>
            @endforeach
        @else
            <h6>Nenhuma Categoria Cadastrada!</h6>
        @endif
    </aside>
    <hr>
    <!-- Archive -->
    <aside class="mb-5 pb-2">
        <h4 class="font-weight-bold">Arquivos</h4>
        <p><a href="{{ route('blogmonth', '12') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Dezembro</a></p>
        <p><a href="{{ route('blogmonth', '11') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Novembro</a></p>
        <p><a href="{{ route('blogmonth', '10') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Outubro</a></p>
        <p><a href="{{ route('blogmonth', '09') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Setembro</a></p>
        <p><a href="{{ route('blogmonth', '08') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Agosto</a></p>
        <p><a href="{{ route('blogmonth', '07') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Julho</a></p>
        <p><a href="{{ route('blogmonth', '06') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Junho</a></p>
        <p><a href="{{ route('blogmonth', '05') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Maio</a></p>
        <p><a href="{{ route('blogmonth', '04') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Abril</a></p>
        <p><a href="{{ route('blogmonth', '03') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Março</a></p>
        <p><a href="{{ route('blogmonth', '02') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Fevereiro</a></p>
        <p><a href="{{ route('blogmonth', '01') }}" class="text-dark" style="text-decoration: none;"><i class="far fa-folder"></i> Janeiro</a></p>
    </aside>

</div>
