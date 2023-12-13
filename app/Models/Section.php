<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['title', 'no', 'url', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('no');
    }
}
