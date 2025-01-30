<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Product::orderBy('nombre') -> paginate(6);
        return view('products.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Category::select('id', 'nombre') -> orderBy('nombre') -> get();
        return view('products.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate($this -> rules());
        Product::create([
            'nombre' => $request -> nombre,
            'descripcion' => $request -> descripcion,
            'imagen' => ($request -> imagen) ? $request -> imagen -> store('images') : 'images/defaultimage.jpg',
            'stock' => $request -> stock,
            'category_id' => $request -> category_id,
        ]);
        return redirect() -> route('products.index') -> with('mensaje', 'Producto creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $category)
    {
        $productos = Product::where('category_id', $category) -> orderBy('nombre') -> paginate(6);
        return view('products.index', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categorias = Category::select('id', 'nombre') -> orderBy('nombre') -> get();
        return view('products.edit', compact('product', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request -> validate($this -> rules($product -> id));

        $imagen = $product -> imagen;

        $product -> update([
            'nombre' => $request -> nombre,
            'descripcion' => $request -> descripcion,
            'imagen' => ($request -> imagen) ? $request -> imagen -> store('images') : $imagen,
            'stock' => $request -> stock,
            'category_id' => $request -> category_id,
        ]);

        if (basename($imagen) != 'defaultimage.jpg' && $request->imagen) {
            Storage::delete($imagen);
        }

        return redirect() -> route('products.index') -> with('mensaje', 'Producto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if(basename($product->imagen)!='defaultimage.jpg') Storage::delete($product->imagen);
        $product -> delete();
        return redirect() -> route('products.index') -> with('mensaje', 'Producto eliminado');
    }

    public function rules(?int $id=null): array{
        return [
            'nombre' => ['required', 'string', 'min:3', 'max:25', 'unique:products,nombre,'.$id],
            'descripcion' => ['required', 'string', 'min:5', 'max:1000'],
            'imagen' => ['image', 'max:2048'],
            'stock' => ['required', 'integer', 'min:0', 'max:1000'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }
}
