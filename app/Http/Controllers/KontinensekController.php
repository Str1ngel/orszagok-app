<?php

namespace App\Http\Controllers;

use App\Models\orszagok;
use Illuminate\Http\Request;
use App\Models\kontinensek;
use App\Models\orszagokController;

class KontinensekController extends Controller
{
    public function Kontinens($id)
    {
        return view('kontinens', [
            'id' => $id,
            'menu' => kontinensek::all(),
            'data' => kontinensek::find($id),
            'darab' => orszagok::where('id', $id)
                ->count(),
        ]);
    }
}
