<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{
  public function login(LoginRequest $request){

    $input = $request->validated();
    $dados = [
      'email'=> $input['email'],
      'password'=>$input['password']
    ];

    $token = Auth::attempt($dados);
    $user = User::where('email', $dados['email'])->get();

    if(!$token){
      return response()->json(['error'=>'E-mail e/ou senha invalidos'], 401);
    }

    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => 3600,
      'user'=> $user
    ]);
  }
  public function logout(){
    Auth::logout();
    return "boa noite bruno";
  }
  public function refresh(){
    return 'refresh';
  }
  public function me(){
    $user = Auth::user();
    if($user){
      return response()->json(['user'=> $user]);
    }else{
      return response()->json(['error'=> 'unauthenticated']);
    }
  }
}
