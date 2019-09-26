<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attribute;
use App\product;
class productAttributesController extends Controller
{
    //
    public function update(Attribute $attribute)
    {
        ///dd(request()->all());

        $attribute->update([
            'status' => request()->has('status')
        ]);

        return back();

    }

    public function store(product $product)
    {


        // Attribute::create([
        //     'product_id' => $product->id,
        //     'name' => request()->validate(['name'=>'required|min:255']),
        //     'description' => request()->validate(['description'=>'required|min:255'])

        // ]);

        $AttributeVal = request([
            'name',
            'description'
        ]);

        //dd($val);

        $product->addAttribute($AttributeVal);

        return back();
        
    }
}
