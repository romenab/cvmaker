<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->string('id');
            $table->string('cv_id');
            $table->string('full_name');
            $table->string('job_title')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('about');
            $table->string('diploma');
            $table->string('school');
            $table->year('graduation_year');
            $table->string('school_address');
            $table->string('reference_name')->nullable();
            $table->string('reference_job_title')->nullable();
            $table->string('reference_phone')->nullable();
            $table->string('experience_job_title')->nullable();
            $table->string('experience_company')->nullable();
            $table->string('experience_duration')->nullable();
            $table->string('experience');
            $table->string('certifications')->nullable();
            $table->string('skills');
            $table->string('languages');
            $table->string('interests');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
