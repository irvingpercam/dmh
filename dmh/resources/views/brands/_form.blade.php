@csrf
<label for="title">
    Nombre de la marca<br>
    <input type="text" name="title" id="title" value="{{ old('title', $brand->title) }}">
</label>
<br>
<label for="url">
    URL<br>
    <input type="text" name="url" id="url" value="{{ old('url', $brand->url) }}">
</label>
<br>
<button>{{ $btnText }}</button>