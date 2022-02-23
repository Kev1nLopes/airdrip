<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function createProduct(Request $request){
        $array = ['error'=> ''];

        $rules = [
            'name_product' => ['required', 'string', 'max:100'],
            'provider' => ['required', 'string', 'max:100'],
            'model'=> ['required', 'string', 'max:100'],
            'price' => ['required', 'numeric', 'between:0,99.99 ','max:50'],
            'sex' => ['required', 'string', 'max:20']
        ];

        $validador = Validator::make($request->all(), $rules);

        if($validador->fails()){
            $array['error'] = $validador->errors();
        }


        return $array;
    }
    public function readAllProducts(){

    }
    public function readProduct(){

    }
    public function updateProduct(){

    }
    public function deleteProduct(){

    }
    
}
