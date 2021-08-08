@extends('admin.layouts.app')

@section('content')
    @component('admin.components.edit')
        @slot('title', 'Editar Imagem da Galeria')
        @slot('url', route('galeries.update', $galery->id))
        @slot('form')
            @include('admin.galeries.form', ['create'=> false , 'show'=> false])
        @endslot
    @endcomponent
@endsection