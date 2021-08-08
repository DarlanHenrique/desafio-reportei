@extends('admin.layouts.app')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Detalhes do contato')
        @slot('content')
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name" class="required">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" required value="{{ old('name',$contact->name) }}">

                    <label for="email" class="required">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required value="{{ old('email',$contact->email) }}">

                    <label for="subject" class="required">Assunto</label>
                    <input type="text" name="subject" class="form-control" id="subject" required value="{{ old('subject',$contact->subject) }}">

                    <label for="phone" class="required">Telefone</label>
                    <input type="text" name="phone" class="form-control" id="phone" required value="{{ old('phone',$contact->phone) }}">

                    <label for="message" class="required">message</label>
                    <textarea type="text" name="message" class="form-control" id="message" required>{{ old('message',$contact->message) }}</textarea>

                </div>
            </div>
        @endslot
        @slot('back')
            <a href="{{ route('contacts.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $(".form-control").attr("disabled", true);
        $('select[value]').each(function() {
            $(this).val($(this).attr('value'));
        });
    </script>
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush