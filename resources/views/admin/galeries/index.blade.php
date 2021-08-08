@extends('admin.layouts.app')

@section('content')

    @component('admin.components.table')
        @slot('create', route('galeries.create'))
        @slot('titulo', 'Categoria')
        @slot('head')
            <th>Imagem</th>
            <th>Nome</th>
            <th>Ação</th>
        @endslot
        @slot('body')
            @foreach ($galeries as $galery)
                <tr>
                    <td><img src="{{ URL('storage/img/galeries/'. $galery->imagelink) }}" alt="Imagem {{ $galery->name }}" width="65" height="65"></td>
                    <td>{{ $galery->name }}</td>
                    <td class="options row">
                        <div class="col-2">
                            <a href="{{ route('galeries.show', $galery->id) }}" class="btn btn-success btnLink"><i class="fas fa-eye"></i></a>
                        </div>
                        <div class="col-2 ml-0 pl-0">
                            <a href="{{ route('galeries.edit', $galery->id) }}" class="btn btn-primary mr-1"><i class="fas fa-pen"></i></a>
                        </div>
                        <div class="col-2">
                            <form class="form-delete" action="{{ route('galeries.destroy', $galery->id) }}" method="POST">
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