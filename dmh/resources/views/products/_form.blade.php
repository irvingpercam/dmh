@csrf
<label for="title">
    Nombre del Producto<br>
    <input type="text" name="title" id="title" value="{{ old('title', $product->title) }}">
</label>
<br>
<label for="url">
    URL<br>
    <input type="text" name="url" id="url" value="{{ old('url', $product->url) }}">
</label>
<br>
<label for="description">
    Ficha Técnica<br>
    <textarea name="description" id="description" cols="30" rows="10">{{ old('description', $product->description) }}</textarea>
</label>
<br>
<label for="category">
    Categoría<br>
    <input type="number" name="category" id="category" value="{{ old('category', $product->category) }}">
</label>
<br>
<label for="type">
    Tipo<br>
    <input type="number" name="type" id="type" value="{{ old('type', $product->type) }}">
</label>
<br>
<label for="brand">
    Marca<br>
    <input type="number" name="brand" id="brand" value="{{ old('brand', $product->brand) }}">
</label>
<br>
<label for="img">
    Imagen<br>
    <input type="text" name="img" id="img" value="{{ old('img', $product->img) }}">
</label>
<br>
<button>{{ $btnText }}</button>