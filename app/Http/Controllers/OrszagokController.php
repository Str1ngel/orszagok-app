<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orszagok;
use App\Models\kontinensek;

class OrszagokController extends Controller
{
    public function Orszagok($id)
    {
        return view('orszagok', [
            'menu' => kontinensek::all(),
            'result' => orszagok::where('kontinens', $id)->orderby('nev')->get(),
            'data' => kontinensek::find($id),
            'id' => 1
        ]);
    }
}
