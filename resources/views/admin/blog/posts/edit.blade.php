@extends('admin.layouts.app')

@section('content')
    @component('admin.components.edit')
        @slot('title', 'Editar Posts do Blog')
        @slot('url', route('posts.update', $post->id))
        @slot('form')
            @include('admin.blog.posts.form', ['create'=> false , 'show'=> false])
        @endslot
    @endcomponent
@endsection