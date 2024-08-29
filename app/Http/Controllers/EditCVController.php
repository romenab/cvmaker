<?php

namespace App\Http\Controllers;

use App\Models\CV;

class EditCVController
{
    public function edit(string $id)
    {
        $cv = CV::where('cv_id', $id)->firstOrFail();
        return view('cv.update', ['cv' => $cv]);
    }

    public function update(string $id)
    {
        $validated = request()->validate([
            'full_name' => ['required', 'string', 'max:40'],
            'job_title' => ['nullable', 'string', 'max:40'],
            'email' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:15'],
            'address' => ['required', 'string', 'max:40'],
            'date_of_birth' => ['required', 'date'],
            'linkedin' => ['nullable', 'string', 'max:255'],
            'github' => ['nullable', 'string', 'max:255'],
            'about' => ['required', 'string', 'max:5000'],
            'diploma' => ['required', 'string', 'max:255'],
            'school' => ['required', 'string', 'max:255'],
            'graduation_year' => ['required', 'digits:4'],
            'school_address' => ['required', 'string', 'max:255'],
            'reference_name' => ['nullable', 'string', 'max:40'],
            'reference_job_title' => ['nullable', 'string', 'max:40'],
            'reference_phone' => ['nullable', 'string', 'max:15'],
            'experience_job_title' => ['nullable', 'string', 'max:40'],
            'experience_company' => ['nullable', 'string', 'max:40'],
            'experience_duration' => ['nullable', 'string', 'max:40'],
            'experience' => ['required', 'string', 'max:1000'],
        ]);
        $cv = CV::where('cv_id', $id)->firstOrFail();
        $cv->update($validated);

        return redirect()->route('cv.display', $cv->cv_id);
    }
}
