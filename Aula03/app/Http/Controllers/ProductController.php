<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        Product::create($request->all());
        return view('product.criado-sucesso');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return view('product.criado-sucesso');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        $products = Product::all(); 
        return view('product.index', compact('products'));
    }
}
