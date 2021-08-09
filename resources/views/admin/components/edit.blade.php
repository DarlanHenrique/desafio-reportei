<div class="col-md-10 offset-md-1 col-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title title-form">{{ $title ?? null }} </h3>
        </div>
        <div class="card-body">
            <form id="form-adicionar" action="{{ $url ?? '/' }}" method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('put')
                {{ $form ?? null }}
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" form="form-adicionar" class="btn btn-primary float-right">Salvar Alterações</button>
            @if (Route::is('users.edit'))
                <a href="{{ route('users.editPass', Auth::user()->id) }}" class="btn btn-dark float-right mr-3"><i class="fas fa-lock"></i> Alterar senha</a>
            @endif
            {{ $voltar ?? null }}
        </div>
    </div>
</div>
