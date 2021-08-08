@extends('admin.layouts.app')

@section('content')

    @component('admin.components.table')
        @slot('create', route('posts.create'))
        @slot('titulo', 'Posts')
        @slot('head')
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ações</th>
        @endslot
        @slot('body')
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td class="options row">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col-2">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btnLink"><i class="fas fa-eye"></i></a>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btnLink"><i class="fas fa-pen"></i></a>
                            </div>
                            <form class="form-delete" action="{{ route('posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush