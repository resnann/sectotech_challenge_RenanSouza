
<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="title" class="form-label">{{ __('Título') }}</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $playlist?->title) }}" id="title" placeholder="Título" required>
            {!! $errors->first('title', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>')!!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Descrição') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $playlist?->description) }}" id="description" placeholder="Descrição" required>
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>')!!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="author" class="form-label">{{ __('Autor') }}</label>
            <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('author', $playlist?->author) }}" id="author" placeholder="Autor" required>
            {!! $errors->first('author', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>')!!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
