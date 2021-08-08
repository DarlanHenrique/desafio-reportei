@extends('admin.layouts.app')

@section('content')
    @component('admin.components.create')
        @slot('title', 'Cadastrar Posts no Blog')
        @slot('url', route('posts.store'))
        @slot('form')
            @include('admin.blog.posts.form', ['create'=> true, 'show'=> false])
        @endslot
    @endcomponent
@endsection