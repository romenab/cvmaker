<?php

namespace App\Http\Controllers;

use App\Models\CV;

class DeleteCVController
{
    public function destroy(string $id)
    {
        $cv = CV::where('cv_id', $id)->firstOrFail();
        $cv->delete();
        return redirect('/dashboard');
    }
}
