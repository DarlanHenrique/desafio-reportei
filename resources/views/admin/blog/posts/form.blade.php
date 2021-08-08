<div class="row">
    <div class="col-sm-12 form-group">
        <label for="name" class="required">Titulo</label>
        <input type="text" name="title" class="form-control" id="title" required value="{{ old('title',$post->title) }}">

        <label for="author" class="required mt-4">Autor(a)</label>
        <input type="text" name='author' class="form-control" id="author" required value="{{ old('author',$post->author) }}">
        
        <label for="category_id" class="required mt-4">Categoria</label>
        <select name="category_id" class="form-control select2" id="category_id">
            @foreach ($categories as $category)
                <option @if($category->id == $post->category_id) selected @endif required value="{{$category->id }}">{{$category->name}}</option>
            @endforeach
        </select>
        
        <label for="imagelink" class="required mt-4">Imagem do post</label>
        <div class="mb-2">
            @if($create == false)
                @if($show == true)
                    <div>
                        <img class="img-responsive" width="300" height="300" src="{{ URL('storage/img/blog/'. $post->imagelink) }}" alt="Imagem do post {{ $post->title }}" />
                    </div>
                @else
                    <input type="file" name="imagelink" id="imagelink" lang="pt-br" accept="image/*" value="{{ old('imagelink', $post->imagelink) }}">
                @endif
            @else
                <input type="file" name="imagelink" id="imagelink" lang="pt-br" accept="image/*" value="{{ old('imagelink', $post->imagelink) }}" required>
            @endif
        </div>
        <label for="resume" class="required">Resumo </label>
        <textarea name="resume" id="resume"  required class="form-control" rows="10">{{ old('resume', $post->resume ) }}</textarea>
        <label for="text" class="required mt-4">Texto</label>
        @if($show == false)
            <textarea name='text' id="text" class="form-control" rows="40" id="body" required>{{ old('text',$post->text) }}</textarea>
        @else
            <p class="text-justify"> {!! $post->text !!} </p>
        @endif
    </div>
</div>

@push('scripts')
    <script>
        $('#text').summernote({
            tabsize: 2,
            height: 500,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline']],
                ['color', ['color']],
                ['para', ['ul', 'ol','dl', 'paragraph']],
            ]
        });
    </script>
@endpush