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
        return $this->belongsTo(Course::class,'course_id','id');
    }

    public function courseCurriContent()
    {
        return $this->belongsTo(CourseCurriculumContent::class,'course_curriculum_id','id');
    }
}
