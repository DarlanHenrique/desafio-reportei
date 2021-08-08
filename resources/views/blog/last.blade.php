@foreach($lastposts as $lastpost)
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-last" style="background: url({{ URL('storage/img/blog/'. $lastpost->imagelink) }})">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">{{ $lastpost->title }}</h1>
            <p class="lead my-3">{!! $lastpost->resume !!}</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continuar lendo...</a></p>
        </div>
    </div>
@endforeach