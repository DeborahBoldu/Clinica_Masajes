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
