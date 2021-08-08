@extends('admin.layouts.app')

@section('content')
    @component('admin.components.edit')
        @slot('title', 'Editar Categoria do blog')
        @slot('url', route('blogCategories.update', $blogCategory->id))
        @slot('form')
            @include('admin.blog.categories.form')
        @endslot
    @endcomponent
@endsection