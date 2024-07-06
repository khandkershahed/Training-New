<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function courseOneHomePage()
    {
        return $this->hasOne(Course::class,'id','row_five_course_one');
    }

    public function courseTwoHomePage()
    {
        return $this->hasOne(Course::class,'id','row_five_course_two');
    }

    public function courseThreeHomePage()
    {
        return $this->hasOne(Course::class,'id','row_five_course_three');
    }
}
