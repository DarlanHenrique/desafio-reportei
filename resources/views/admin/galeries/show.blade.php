@extends('admin.layouts.app')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Detalhes da Galeria')
        @slot('content')
            @include('admin.galeries.form' , ['create'=> false, 'show'=> true])
        @endslot
        @slot('back')
            <a href="{{ route('galeries.edit', $galery->id) }}" class="btn btn-primary float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            <a href="{{ route('galeries.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $(".form-control").attr("disabled", true);
        $('select[value]').each(function() {
            $(this).val($(this).attr('value'));
        });
    </script>
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush