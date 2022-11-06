<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function tes(Request $request)
    {
        $data = Mobil::all();
        return response()->json($data);
    }
}
