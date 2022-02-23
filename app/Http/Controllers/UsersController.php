<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function createUser(Request $request){
        $array = ['error'=> ''];

        $rules = [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpf'=> ['required', 'string', 'min:11', 'max:15', 'unique:users'],
            'contact' => ['required', 'string', 'max:15']
        ];

        $validator  = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->errors();
            return $array;
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->cpf = $request->input('cpf');
        $user->contact = $request->input('contact');
        $user->save();

        return redirect()->route('home');
    }
    public function readAllUsers(){
        $array = ['error'=>''];

        $array['list'] = User::all();

        return $array;
    }
    public function readUser($id){
        $array = ['error'=>''];

        $user = User::find($id);

        if($user){
            $array['user'] = $user;
        }else{
            $array['error'] = 'Usuario nao encontrado!';
        }
       


        return $array;
    }
    public function updateUser($id, Request $request){
        $array = ['error'=> ''];

        $rules = [
            'name'=>['string', 'max:100'],
            'email'=>['string', 'max:100', 'unique:users'],
            'password'=>['string', 'min:8', 'confirmed'],
            'cpf'=>['string', 'min:11', 'max:15', 'unique:users'],
            'contact'=>['string', 'max:15']
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->errors();
            return $array;
        }
        $dados = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'cpf' => $request->input('cpf'),
            'contact' => $request->input('contact')
        ];
        $user = User::find($id);
        if($user){
            if($dados['name']){
                $user->name = $dados['name'];
            }
            if($dados['email']){
                $user->email = $dados['email'];
            }
            if($dados['password']){
                $user->password = $dados['password'];
            }
            if($dados['cpf']){
                $user->cpf = $dados['cpf'];
            }
            if($dados['contact']){
                $user->contact = $dados['contact'];
            }
            $user->save();
        }else{
            $array['error'] = 'Usuario nao encontrado!';
            return $array;
        }
    }
    public function deleteUser($id){
        $array = ['error'=>''];

        $user = User::find($id);
        $user->delete();

        return $array;
    }

}
