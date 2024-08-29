<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CV extends Model
{
    use HasFactory;
    protected $table = 'cvs';

    protected $fillable = [
        'id',
        'cv_id',
        'full_name',
        'job_title',
        'email',
        'phone',
        'address',
        'date_of_birth',
        'linkedin',
        'github',
        'about',
        'diploma',
        'school',
        'graduation_year',
        'school_address',
        'reference_name',
        'reference_job_title',
        'reference_phone',
        'experience_job_title',
        'experience_company',
        'experience_duration',
        'experience',
        'certifications',
        'skills',
        'languages',
        'interests'
        ];

}
