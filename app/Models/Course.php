<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tutor(){
        return $this->belongsTo(Tutor::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function students(){
        return $this->hasMany(CourseStudent::class);
    }
    public function sections(){
        return $this->hasMany(CourseSection::class);
    }
}
