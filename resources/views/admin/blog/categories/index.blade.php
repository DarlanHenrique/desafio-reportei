@extends('admin.layouts.app')

@section('content')

    @component('admin.components.table')
        @slot('create', route('blogCategories.create'))
        @slot('titulo', 'Categoria')
        @slot('head')
            <th>Nome</th>
            <th>Ação</th>
        @endslot
        @slot('body')
            @foreach ($blogCategories as $blogCategory)
                <tr>
                    <td>{{ $blogCategory->name }}</td>
                    <td class="options row">
                        <div class="col-2 ml-0 pl-0">
                            <a href="{{ route('blogCategories.edit', $blogCategory->id) }}" class="btn btn-primary mr-1"><i class="fas fa-pen"></i></a>
                        </div>
                        <div class="col-2">
                            <form class="form-delete" action="{{ route('blogCategories.destroy', $blogCategory->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger mr-2"><b><i class="fas fa-trash"></i></b></button>
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