<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory, HasSlug;
    protected $slugSourceColumn = 'name';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function users()
    {
        return $this->hasMany(UserCourseRegistration::class);
    }

    public function coursesCount()
    {
        return $this->hasMany(Course::class, 'course_section_id');
    }
}
