<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCurriculum extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function courseCurriContent()
    {
        // return $this->hasMany(CourseResource::class, 'course_curriculum_id', 'id');
        return $this->hasMany(CourseResource::class);
    }

    public function courseCurriContentFileName()
    {
        // return $this->hasMany(CourseResource::class, 'course_curriculum_id', 'id');
        return $this->hasMany(CourseResource::class);
    }

}
