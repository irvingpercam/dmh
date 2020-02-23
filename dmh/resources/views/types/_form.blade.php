@csrf
<label for="name">
    Nombre del tipo de producto<br>
    <input type="text" name="name" id="name" value="{{ old('name', $type->name) }}">
</label>
<br>
<label for="category_id">
    Categoría del tipo de producto<br>
    {{-- <input type="number" name="category_id" id="category_id" value="{{ old('category_id', $type->category_id) }}"> --}}
    <select name="category_id" id="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</label>
<br>
<label for="url">
    URL<br>
    <input type="text" name="url" id="url" value="{{ old('url', $type->url) }}">
</label>
<br>
<button>{{ $btnText }}</button>