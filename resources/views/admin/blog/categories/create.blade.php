@extends('admin.layouts.app')

@section('content')
    @component('admin.components.create')
        @slot('title', 'Cadastrar Categoria do Blog')
        @slot('url', route('blogCategories.store'))
        @slot('form')
            @include('admin.blog.categories.form')
        @endslot
    @endcomponent
@endsection