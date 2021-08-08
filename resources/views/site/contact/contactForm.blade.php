<div class="row" id="contato">
    <div class="col-8 offset-2 mt-5">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white">Contate-nos</h3>
            </div>
            <div class="card-body"> 
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
            
                <form method="POST" action="{{ route('contact-form.store') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Nome:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Telefone:</strong>
                                <input type="text" name="phone" id="phone" class="form-control phone" placeholder="(xx)xxxxx-xxxx" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Assunto:</strong>
                                <input type="text" name="subject" class="form-control" placeholder="Assunto" value="{{ old('subject') }}">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Mensagem:</strong>
                                <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>  
                        </div>
                    </div>
            
                    <div class="form-group">
                        <button class="btn btn-outline-success btn-submit mt-2"><i class="far fa-paper-plane"></i> Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $('#phone').mask('(00) 0000-0000');
    </script>
@endpush