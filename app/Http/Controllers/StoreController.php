<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    /**
     * Display the store.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('state', 1)->paginate(5);
        
        return view('store.list', [
            'products' => $products
        ]);
    }

    /**
     * Display the detail of one product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        
        $product = Product::find($id);

        return view('store.show', [
            'product' => $product
        ]);
    }
}
