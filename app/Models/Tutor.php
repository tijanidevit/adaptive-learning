<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
    public function latest_courses(){
        return $this->courses()->orderBy('id','desc')->take(10);
    }
    public function cashout(){
        return $this->hasMany(TutorCashout::class);
    }


    public function total_courses(){
        return $this->courses()->count();
    }
    public function total_cashout(){
        return $this->cashout()->count();
    }
    public function total_students(){
        return $this->hasManyThrough(CourseStudent::class,Course::class)->count();
    }
}
