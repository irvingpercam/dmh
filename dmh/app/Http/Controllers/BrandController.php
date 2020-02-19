<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\SaveBrandRequest;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('brands.index', [
            'brands' => Brand::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create', [
            'brand' => new Brand
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveBrandRequest $request)
    {
        Brand::create($request->validated());
        return redirect()->route('brands.index')->with('status', 'La marca de herramienta fue registrada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('brands.show', [
            'brand' => $brand
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Brand $brand, SaveBrandRequest $request)
    {
        $brand->update($request->validated());
        return redirect()->route('brands.show', $brands)->with('status', 'La marca de herramienta fue actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brandid = $brand->id;
        $products = App\Product::where('brand', $brandid);
        $products->delete();
        $brand->delete();
        return redirect()->route('brands.index')->with('status', 'La marca de herramienta y sus productos fueron eliminados con éxito.');
    }
}
