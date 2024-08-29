<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;

class CreateCVController
{
    public function create()
    {
        return view('cv.create');
    }

    public function store(Request $request)
    {
        $validated = request()->validate([
            'full_name' => ['required', 'string', 'max:40'],
            'job_title' => ['nullable', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'phone' => ['required', 'string', 'max:15'],
            'address' => ['required', 'string', 'max:40'],
            'date_of_birth' => ['required', 'date'],
            'linkedin' => ['nullable', 'string', 'url', 'max:255'],
            'github' => ['nullable', 'string', 'url', 'max:255'],
            'about' => ['required', 'string', 'max:255'],
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
            'experience' => ['required', 'string', 'max:255'],
            'certifications' => ['nullable', 'string', 'max:255'],
            'skills' => ['required', 'string', 'max:255'],
            'languages' => ['required', 'string', 'max:255'],
            'interests' => ['required', 'string', 'max:255'],
        ]);

        $cv_id = \Faker\Factory::create()->uuid();
        $cv = [
            'id' => $request->user()->id,
            'cv_id' => $cv_id,
            'full_name' => $validated['full_name'],
            'job_title' => $validated['job_title'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'date_of_birth' => $validated['date_of_birth'],
            'linkedin' => $validated['linkedin'],
            'github' => $validated['github'],
            'about' => $validated['about'],
            'diploma' => $validated['diploma'],
            'school' => $validated['school'],
            'graduation_year' => $validated['graduation_year'],
            'school_address' => $validated['school_address'],
            'reference_name' => $validated['reference_name'],
            'reference_job_title' => $validated['reference_job_title'],
            'reference_phone' => $validated['reference_phone'],
            'experience_job_title' => $validated['experience_job_title'],
            'experience_company' => $validated['experience_company'],
            'experience_duration' => $validated['experience_duration'],
            'experience' => $validated['experience'],
            'certifications' => $validated['certifications'],
            'skills' => $validated['skills'],
            'languages' => $validated['languages'],
            'interests' => $validated['interests'],
        ];


        CV::create($cv);
        return redirect('/cv/' . $cv_id);
    }
}
