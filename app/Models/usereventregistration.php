<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usereventregistration extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function eventUserName()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function eventName()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
