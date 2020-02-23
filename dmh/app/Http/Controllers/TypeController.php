<?php

namespace App\Http\Controllers;
use App\Type;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\SaveTypeRequest;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('types.index', [
            'typesH' => Type::where('category_id', 1)->paginate(),
            'typesM' => Type::where('category_id', 2)->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('types.create', [
            'type' => new Type,
        ], [ 'categories' => Category::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveTypeRequest $request)
    {
        Type::create($request->validated());
        return redirect()->route('types.index')->with('status', 'El tipo de herramienta fue registrado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        return view('types.show', [
            'type' => $type
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('types.edit', [
            'type' => $type
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Type $type, SaveTypeRequest $request)
    {
        $type->update($request->validated());
        return redirect()->route('types.show', $type)->with('status', 'El tipo de herramienta fue actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $typeid = $type->id;
        $products = Product::where('type', $typeid);
        $products->delete();
        $type->delete();
        return redirect()->route('types.index')->with('status', 'El tipo de herramienta y sus productos fueron eliminados con éxito.');
    }
}
