<<<<<<< HEAD
@php
    // En create no existe $post, en edit sí.
    $post = $post ?? null;
@endphp

<div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input
        type="text"
        name="title"
        id="title"
        class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title', $post->title ?? '') }}"
        required
    >
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="image" class="form-label">Imagen</label>

    @if($post && $post->image_path)
        <div class="mb-2">
            <img src="{{ asset($post->image_path) }}" alt="Imagen actual"
                 class="img-thumbnail" style="max-width: 200px;">
        </div>
    @endif

    <input
        type="file"
        name="image"
        id="image"
        class="form-control @error('image') is-invalid @enderror"
    >
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <div class="form-text">
        Formatos permitidos: JPG, JPEG, PNG, WEBP. Máx: 2MB.
    </div>
</div>

<div class="mb-3">
    <label for="category" class="form-label">Categoría</label>
    <input
        type="text"
        name="category"
        id="category"
        class="form-control @error('category') is-invalid @enderror"
        value="{{ old('category', $post->category ?? '') }}"
    >
    @error('category')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="excerpt" class="form-label">Resumen / Extracto</label>
    <textarea
        name="excerpt"
        id="excerpt"
        rows="2"
        class="form-control @error('excerpt') is-invalid @enderror"
    >{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
    @error('excerpt')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="content" class="form-label">Contenido</label>
    <textarea
        name="content"
        id="content"
        rows="6"
        class="form-control @error('content') is-invalid @enderror"
        required
    >{{ old('content', $post->content ?? '') }}</textarea>
    @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-check mb-3">
    <input
        type="checkbox"
        name="is_published"
        id="is_published"
        class="form-check-input"
        {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }}
    >
    <label class="form-check-label" for="is_published">
        Publicado
    </label>
</div>

<div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary">
        {{ $post ? 'Actualizar post' : 'Crear post' }}
    </button>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
        Cancelar
    </a>
</div>

=======
@php($p = $post ?? null)

<label class="label">Título</label>
<input class="input" name="title" value="{{ old('title', $p->title ?? '') }}" required>
@error('title')<small style="color:red">{{ $message }}</small>@enderror

<label class="label">Imagen</label>
<input type="text"  class="input" name="image_path" value="{{ old('image_path', $p->image_path ?? '') }}" required>

<label class="label">Categoría</label>
<input class="input" name="category" value="{{ old('category', $p->category ?? '') }}">

<label class="label">Resumen (excerpt)</label>
<input class="input" name="excerpt" value="{{ old('excerpt', $p->excerpt ?? '') }}">

<label class="label">Contenido</label>
<textarea name="content" rows="8" required>{{ old('content', $p->content ?? '') }}</textarea>

<label class="label">
  <input type="checkbox" name="is_published" value="1" {{ old('is_published', $p->is_published ?? true) ? 'checked' : '' }}>
  Publicado
</label>

<div style="margin-top:12px"><button class="btn" type="submit">Guardar</button></div>
>>>>>>> origin/main
