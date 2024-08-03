<?php

namespace App\Models;

use App\Models\CourseCurriculumFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->hasMany(CourseCurriculumContent::class,'course_curriculum_id','id');
    }

    public function courseCurriContentFileName()
    {
        return $this->hasMany(CourseCurriculumFile::class,'course_curriculum_id','id');
    }
}
