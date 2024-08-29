<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Support\Facades\Auth;

class ShowCVController
{
    public function show()
    {
        $user = Auth::user();
        $cvs = CV::where('id', $user['id'])->get();
        return view('dashboard', ['cvs' => $cvs]);
    }

    public function display(string $id)
    {
        $cv = CV::where('cv_id', $id)->firstOrFail();
        return view('cv.display', compact('cv'));
    }
}
