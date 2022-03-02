<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function createUser(Request $request){
        $array = ['error'=> ''];

        $rules = [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpf'=> ['required', 'string', 'min:11', 'max:11', 'unique:users'],
            'contact' => ['required', 'string', 'max:15']
        ];

        $validator  = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->errors();
            return response()->json($array, 422);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->cpf = $request->input('cpf');
        $user->contact = $request->input('contact');
        $user->save();

        $token = Auth::login($user);
        return response()->json(['user'=>$user, 'token'=> $token]);
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
          return response()->json($array['user']);
        }else{
          $array['error'] = "Nenhum usuario encontrado";
          return response()->json($array['error'], 422);
        }
      
        return $array;
    }
    public function searchUser($name){
      $user = User::where('name', 'like', "$name%")->get();
      if($user){
        return response()->json(['user'=>$user]);
      }else{
        return response()->json(['error'=> "Nenhum usuario encontrado"], 422);
      }
    }

    public function updateUser($id, Request $request){
        $array = ['error'=> '']; 
        
       
        $rules = [
            'name'=>['string', 'max:100'],
            'email'=>['string', 'max:100', ],
            'password'=>['string', 'min:8'],
            'cpf'=>['string', 'min:11', 'max:15'],
            'contact'=>['string', 'min:', 'max:15']
        ];
    
        $validator = Validator::make($request->all(), $rules);
    
        if($validator->fails()){
            $array['error'] = $validator->errors();
            return response()->json($array, 422);
        } 
        $user = User::find($id);
        if(!$user){
            $array['error'] = 'Usuario nao encontrado!';
            return response()->json($array, 422);
        }else{
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password =  Hash::make($request->input('password'));
            $user->cpf =   $request->input('cpf');
            $user->contact = $request->input('contact');
            $user->save();
            
        }
    }
    public function deleteUser($id){
        $array = ['error'=>''];

        $user = User::find($id);
        $user->delete();

        return $array;
    }

}
