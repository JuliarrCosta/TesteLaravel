<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    //Fazer um post para cadastrar
    public function register(Request $request){
        $request->validate([
            'user_name' => 'requerid|string|max:100',
            'user_mail' => 'requerid|string|email|max:100',
            'user_password' => 'requerid|string|max:100',
        ]);

        if($request->fails()){
            return response()->json($request->error(), 422);
        }

        $user = User::create([
            'user_name' => $request->user_name,
            'user_mail' => $request->user_mail,
            'user_password' => Hash::make($request->user_password)
        ]);

        return response()->json($user, 201);
    }

    //Validação de login
    public function login(Request $request){
        $request->validate([
            'user_mail' => 'required|string|email',
            'user_password' => 'required|string'
        ]);

        $credentials = $request->only('user_mail', 'user_password');

        if(Auth::attempt($credentials)){
            throw ValidationException::withMessages([

            ]);
        }

        $user = Auth::user();
        

    
    }
}
