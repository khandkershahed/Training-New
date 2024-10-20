<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function categoryName()
    {
        return $this->belongsTo(CourseCategory::class,'course_category_id','id');
    }

    public function courseCurriculams()
    {
        return $this->hasMany(CourseCurriculum::class);
    }

    public function section()
    {
        return $this->belongsTo(CourseSection::class, 'course_section_id');
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }

    public function addedName()
    {
        return $this->belongsTo(Admin::class,'added_by','id');
    }

    public function updateName()
    {
        return $this->belongsTo(Admin::class,'update_by','id');
    }

}
