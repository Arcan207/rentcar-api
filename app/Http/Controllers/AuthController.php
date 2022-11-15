<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $response = [
                "data" => Auth::user(),
                "status" => true
            ];
            return response()->json($response);
        } else {
            $response = [
                "data" => null,
                "status" => false
            ];
            return response()->json($response);
        }
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password|min:6',
            'numberphone' => 'required',
        ], [
            "name.required" => "Tidah boleh kosong",
            "email.unique" => "Email yang anda masukkan telah digunakan",
            "email.required" => "Tidak boleh kosong",
            "email.email" => "Masukkan format email dengan benar",
            "password.required" => "Tidak boleh kosong",
            "password.min" => "Minimal 6 digit",
            "confirmPassword.required" => "Tidak boleh kosong",
            "confirmPassword.min" => "Minimal 6 digit",
            "confirmPassword.same" => "Konfirmasi password harus sama dengan password",
            "numberphone.required" => "Tidak boleh kosong",
        ]);

        if ($validator->fails()) {
            $response = [
                "data" => $validator->messages(),
                "status" => false
            ];
            return response()->json($response);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numberphone' => $request->numberphone,
        ]);

        if($user){
            $response = [
                "data" => $user,
                "status" => true
            ];
            return response()->json($response);
        } else {
            $response = [
                "data" => null,
                "status" => false
            ];
            return response()->json($response);
        }
    }
}
