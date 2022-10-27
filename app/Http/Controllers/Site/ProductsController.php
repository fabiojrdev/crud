<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = $this->repository->all();
        // dd($products);
        return view('dashboard.products.index');
    }

    public function view(){
        return view('dashboard.products.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Product::create([
            'name'=>$request->nameProduct,
            'category'=>$request->categoryProduct,
            'price'=>$request->priceProduct,
            'inventory'=>$request->inventoryProduct
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $products = Product::table('product')->get();
        // return view('product.index', ['product' => $products]);


        $products = Product::all();
        
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);

        $product->name=$request->nameProduct;
        $product->category=$request->categoryProduct;
        $product->price=$request->priceProduct;
        $product->inventory=$request->inventoryProduct;


        
        $product->update();

        return redirect()->route('site.products')
            ->with('success', 'Update Concluido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Product::find($id);
        $destroy->delete();
        return redirect()->route('site.products');
    }
}
