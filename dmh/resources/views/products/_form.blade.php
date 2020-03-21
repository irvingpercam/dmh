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
    {{-- <input type="number" name="category" id="category" value="{{ old('category', $product->category) }}"> --}}
    <select name="category" id="category">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</label>
<br>
<label for="type">
    Tipo<br>
    {{-- <input type="number" name="type" id="type" value="{{ old('type', $product->type) }}"> --}}
    <select name="type" id="type">
        @foreach ($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>
</label>
<br>
<label for="brand">
    Marca<br>
    {{-- <input type="number" name="brand" id="brand" value="{{ old('brand', $product->brand) }}"> --}}
    <select name="brand" id="brand">
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->title }}</option>
        @endforeach
    </select>
</label>
<br>
<label for="img">
    Imagen<br>
    <input type="text" name="img" id="img" value="{{ old('img', $product->img) }}">
</label>
<br>
<button>{{ $btnText }}</button>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $("#category").change(function(){
        var categoryType = $(this).val();
        $.ajax({
            type: 'POST',
            url:'/validate_cat_type/',
            data:{
                'category': category
            },
            dataType: 'json',
            success: function(msg){
                alert(msg);
            }
        });
    });
</script>