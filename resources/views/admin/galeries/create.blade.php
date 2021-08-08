@extends('admin.layouts.app')

@section('content')
    @component('admin.components.create')
        @slot('title', 'Cadastrar Imagem na Galeria')
        @slot('url', route('galeries.store'))
        @slot('form')
            @include('admin.galeries.form', ['create'=> true, 'show'=> false])
        @endslot
    @endcomponent
@endsection