<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourseRegistration extends Model
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

    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class,'course_section_id','id');
    }

    public function courseCategory()
    {
        return $this->belongsTo(CourseCategory::class,'course_category_id','id');
    }
}
