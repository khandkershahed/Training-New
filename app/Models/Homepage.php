<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function feature1()
    {
        return $this->belongsTo(Feature::class, 'story1_id');
    }

    public function feature2()
    {
        return $this->belongsTo(Feature::class, 'story2_id');
    }

    public function feature3()
    {
        return $this->belongsTo(Feature::class, 'story3_id');
    }

    public function feature4()
    {
        return $this->belongsTo(Feature::class, 'story4_id');
    }

    public function feature5()
    {
        return $this->belongsTo(Feature::class, 'story5_id');
    }

    public function success1()
    {
        return $this->belongsTo(Success::class, 'success1_id');
    }

    public function success2()
    {
        return $this->belongsTo(Success::class, 'success2_id');
    }

    public function success3()
    {
        return $this->belongsTo(Success::class, 'success3_id');
    }

    public function story1()
    {
        return $this->belongsTo(NewsTrend::class, 'solution1_id');
    }

    public function story2()
    {
        return $this->belongsTo(NewsTrend::class, 'solution2_id');
    }

    public function story3()
    {
        return $this->belongsTo(NewsTrend::class, 'solution3_id');
    }

    public function story4()
    {
        return $this->belongsTo(NewsTrend::class, 'solution4_id');
    }

    public function techglossy()
    {
        return $this->belongsTo(NewsTrend::class, 'techglossy_id');
    }
}
