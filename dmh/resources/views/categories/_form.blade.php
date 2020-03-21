@csrf
<label for="name">
    Nombre de la categoría<br>
    <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}">
</label>
<br>
<label for="url">
    URL<br>
    <input type="text" name="url" id="url" value="{{ old('url', $category->url) }}">
</label>
<br>
<button>{{ $btnText }}</button>