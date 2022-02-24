<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class ProductsController extends Controller
{
    public function createProduct(Request $request){
        $array = ['error'=> ''];
        $rules = [
            'name_product' => ['required', 'string', 'min:3', 'max:100'],
            'provider' => ['required', 'string', 'min:3', 'max:100'],
            'model'=> ['required', 'string', 'min:3', 'max:100', 'unique:products'],
            'price' => ['required', 'numeric','max:9999 '],
            'sex' => ['required', 'string', 'min:1', 'max:20']
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->errors();
            
        }

        $product = new Product();
        $product->name_product = $request->input('name_product');
        $product->provider = $request->input('provider');
        $product->model = $request->input('model');
        $product->price = $request->input('price');
        $product->sex = $request->input('sex');
        $product->save();

        
    }
    public function readAllProducts(){
        $array = ['errors'=> ''];

        $array['list'] = Product::all();

        return $array;
    }
    public function readProduct($id){

        $product = Product::findOrFails($id);

        return response()->json($product);

        
    }
    public function updateProduct($id, Request $request){
        $array = ['errors'=> ''];

        $rules = [
            'product_name'=> ['string', 'min:3', 'max:100'],
            'provider'=> ['string', 'min:3', 'max:100'],
            'model'=> ['string', 'min:3', 'max:100', 'unique:products'],
            'price'=> ['numeric', 'between:0,99.99', 'max:20'],
            'sex'=> ['string', 'min:1', 'max:20']
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['errors'] = $validator->errors();
            return response()->json($array, 422);
        }

        $produto = Product::find($id);

        if($produto){
            $produto->produto_name = $request->input('product_name');
            $produto->provider = $request->input('provider');
            $produto->model = $request->input('model');
            $produto->price = $request->input('price');
            $produto->sex = $request->input('sex');
            $produto->save();
        }else{
            $array['errors'] = "Este produto nao existe";
        }


        return $array;

        


    }
    public function deleteProduct($id){
        $array = ['errors'=> ''];
        $produto = Product::find($id);

        if($produto){
            $produto->delete();
        }else{
            $array['errors'] = "Voce nao pode deletar um produto que nao existe";
        }

    }
    
}
