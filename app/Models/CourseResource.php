<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseResource extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function courseName()
    {
        return $this->belongsTo(Course::class,'course_id','id');
    }

    public function courseCurriculum()
    {
        return $this->belongsTo(CourseCurriculum::class,'course_curriculum_id','id');
    }
}
