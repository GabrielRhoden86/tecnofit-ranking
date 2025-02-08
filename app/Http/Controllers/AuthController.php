<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:user_login',
            'password' => 'required|string|min:8',
        ]);
        $user = UserLogin::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return response()->json(['user' => $user]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = UserLogin::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        }
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Senha incorreta.'], 401);
        }
        return response()->json([
            'message' => 'Login realizado com sucesso',
            'token' => $user->createToken('api-token')->plainTextToken
        ]);
    }


    public function logout(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $user->tokens()->delete();
            return response()->json(['message' => 'Logout realizado com sucesso'], 200);
        }
        return response()->json(['error' => 'Usuário não autenticado'], 401);
    }
}
