<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function student_courses(){
        return $this->hasMany(CourseStudent::class);
    }
    public function peers(){
        return $this->hasMany(PeerStudent::class);
    }
    public function created_peers(){
        return $this->hasMany(Peer::class);
    }
}
