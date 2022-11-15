<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function tes(Request $request)
    {
        $data = Mobil::where("status", true)->get();
        $response = [
            "data" => $data,
            "status" => true
        ];
        return response()->json($response);
    }

    public function detailUser(Request $request)
    {
        $data = User::find($request->id);
        $response = [
            "data" => $data,
            "status" => true
        ];
        return response()->json($response);
    }

    public function listCar(Request $request)
    {
        $data = Mobil::where("status", true)->get();
        $response = [
            "data" => $data,
            "status" => true
        ];
        return response()->json($response);
    }

    public function detailCar(Request $request)
    {
        $data = Mobil::find($request->id);
        $response = [
            "data" => $data,
            "status" => true
        ];
        return response()->json($response);
    }
}
