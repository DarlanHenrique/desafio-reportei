<div class="row">
    <div class="col-sm-12 form-group">
        <label for="name" class="required">Nome</label>
        <input type="text" name="name" class="form-control" id="name" required autofocus value="{{ old('name', $galery->name) }}">

        <label for="description" class="required mt-4">Descrição</label>
        <input type="text" name="description" class="form-control" id="description" value="{{ old('description', $galery->description) }}">

        <label for="imagelink" class="required mt-4">Imagem da Galeria</label>
        <div class="mb-2">
            @if($create == false)
                @if($show == true)
                    <div>
                        <img class="img-responsive" width="300" height="300" src="{{ URL('storage/img/galeries/'. $galery->imagelink) }}" alt="Imagem do galery {{ $galery->title }}" />
                    </div>
                @else
                    <input type="file" name="imagelink" id="imagelink" lang="pt-br" accept="image/*" value="{{ old('imagelink', $galery->imagelink) }}">
                @endif
            @else
                <input type="file" name="imagelink" id="imagelink" lang="pt-br" accept="image/*" value="{{ old('imagelink', $galery->imagelink) }}" required>
            @endif
        </div>
    </div>
</div>