@if ($body != '' || !($createFirst ?? true))
<div class="card">
    @if (isset($create) || isset($titulo))
    <div class="card-header card-outline cor-backend">
        <h3 class="float-left m-0 table-title">{{ $titulo ?? null }}</h3>
        @if (isset($create))
            @if(Route::is('contacts.index'))
            @else
                <div class="float-right mr-2">
                    <div class="input-group input-group-sm">
                        <a href="{{ $create }}">
                            <button type="button" class="btn btn-dark icone-add-table">
                                <b><i class="fas fa-plus-circle "></i> Adicionar</b>
                            </button>
                        </a>
                    </div>
                </div>
            @endif
        @endif
    </div>
    @endif

    <div class="card-body table-responsive">
        <table class="table table-hover dataTable table-striped">
            <thead>
                <tr>
                    {{ $head ?? null }}
                </tr>
            </thead>
            <tbody>
                {{ $body ?? null }}
            </tbody>
        </table>
    </div>
</div>
@else
<div class="text-center" style="color: #949699">
    <i class="fas fa-exclamation-circle" style="font-size: 10em"></i>
    <p class="mb-4 h2">Nenhum item encontrado!</p>
    @if(Route::is('contacts.index'))
    @else
        <a href="{{ $create ?? '#' }}">
            <button type="button" class="btn btn-dark">
                <b><i class="fas fa-plus-circle"></i> Adicionar novo item</b>
            </button>
        </a>
    @endif
</div>
@endif