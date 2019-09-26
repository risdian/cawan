<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $product_list = product::paginate(10);
 
        return view('products.index', compact('product_list'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('products.create');
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
        
        $validate = request()->validate([
            'name' => 'required|min:3|max:255',
            'quantity' => 'required',
            'price' => 'required'

        ]);
        

        product::create($validate);
 
        return redirect('products');
    }


    public function show(product $product)
    {
        //
      //  $product = product::findorfail($id);

        //return $product;

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //

        return view('products.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //

        $validate = request()->validate([
            'name' => 'required|min:3|max:255',
            'quantity' => 'required',
            'price' => 'required'

        ]);
        

        product::update($validate);

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //

        $product->delete();
        
        return redirect('products');
    }
}
