<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Type;
use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProductRequest;
class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->paginate()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index')->with('status', 'El proyecto fue creado con éxito.');
    }

    /**
     * Edit the specified resource.
     */
    public function edit(Product $product){
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }
    public function create(){
        $data = [
            'types' => [],
            'brands' => Brand::all(), 
            'categories' => Category::all()
        ];
        return view('products.create', [
            'product' => new Product,
        ])->with($data);
    }
    public function validate_cat_type(Request $request){
        if($request->ajax()){
            $catType = $request->get();
            $data = [
                'types' => Type::where('category_id', $catType),
            ];
            return response()->json(["msg" => "Workin"]);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, SaveProductRequest $request)
    {
        $product->update($request->validated());
        return redirect()->route('products.show', $product)->with('status', 'El proyecto fue actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('status', 'El proyecto fue eliminado con éxito.');
    }
}
