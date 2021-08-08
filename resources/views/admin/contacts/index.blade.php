@extends('admin.layouts.app')

@section('content')

    @component('admin.components.table')
        @slot('titulo', 'Categoria')
        @slot('head')
            <th>Nome</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Ação</th>
        @endslot
        @slot('body')
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td class="options row">
                        <div class="col-2 ml-0 pl-0">
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-primary mr-1"><i class="fas fa-eye"></i></a>
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