<?php

namespace App\Http\Controllers\api\v1;
use App\Wisata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $Wisata = Wisata::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Posts',
            'data' => $Wisata
        ], 200);
    }
}
