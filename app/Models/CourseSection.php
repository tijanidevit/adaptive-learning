<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function quiz(){
        return $this->hasMany(SectionQuiz::class);
    }
    public function contents(){
        return $this->hasMany(SectionContent::class);
    }
}
