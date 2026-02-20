<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_number', 'first_name', 'last_name', 'section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    // COR (Certificate of Registration) helper
    public function cor()
    {
        return $this->enrollments()->with('course')->get();
    }

    // Transcript helper (can be expanded for grades)
    public function transcript()
    {
        return $this->enrollments()->with('course')->get();
    }
}
