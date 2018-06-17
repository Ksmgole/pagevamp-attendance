<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = "attendances";

    protected $fillable = [
        "user_id",
        "entry_time",
        "leave_time",
        "date"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeForToday($query)
    {
        return $query->where('date', date('Y-m-d'));
    }

}