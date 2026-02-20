<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
}
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_code', 'course_name'];

    public function curricula()
    {
        return $this->hasMany(Curriculum::class);
    }

    public function enrollments()
    {
        return $this->hasManyThrough(Enrollment::class, Curriculum::class, 'course_id', 'course_id');
    }
}