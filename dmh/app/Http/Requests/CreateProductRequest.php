<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
            'category' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'img' => 'required',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'El producto necesita un título.',
            'url.required' => 'Agregar url permitirá personalizar la dirección que se despliega en el navegador.',
            'description.required' => 'Agregar una descripción ayudará a proporcionar información detallada sobre un producto.',
            'category.required' => 'Por favor, selecciona una categoría para el producto.',
            'type.required' => 'Por favor, selecciona un tipo para el producto.',
            'brand.required' => 'Por favor, selecciona una marca para el producto.',
            'img.required' => 'Agregar una imagen permitirá que los clientes puedan visualizar mejor los productos.',
        ];
    }
}
