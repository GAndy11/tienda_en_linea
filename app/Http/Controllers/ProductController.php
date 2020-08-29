<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.list', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.add'); // Solo retornar a la vista de creación de productos
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validaciones
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $product = new Product();

        $product->name = $validData['name'];
        $product->description = $validData['description'];
        $product->price = $validData['price'];
        
        //Subir la imagen
        $imagePath = $request->file('image');
        if($imagePath)
        {
            $imagePathName = time() . $imagePath->getClientOriginalName();

            Storage::disk('products')->put($imagePathName, File::get($imagePath));
            $product->image = $imagePathName;
        }

        $product->save();

        Log::info('El usuario con identificador: ' . Auth::id() . ' creó el producto con id: ' . $product->id);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $product = Product::find($id);
        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $product = Product::findOrFail($id); //Traer el usuario de BD

        $states = [
            '1' => 'Activo',
            '0' => 'Inactivo'
        ];

        return view('products.edit', [
            'product' => $product,
            'states' => $states
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //Validaciones
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $product = Product::findOrFail($id);
        $product->name = $validData['name'];
        $product->description = $validData['description'];
        $product->price = $request->get('price');
        $product->state = $request->get('state');
        $product->save();

        Log::info('El usuario con identificador: ' . Auth::id() . ' actualizó el producto con id: ' . $product->id);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }
}
