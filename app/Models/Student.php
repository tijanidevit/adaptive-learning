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
    public function courses(){
        return $this->hasMany(CourseStudent::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function peers(){
        return $this->hasMany(PeerStudent::class);
    }
    public function created_peers(){
        return $this->hasMany(Peer::class);
    }
    public function peer_chats(){
        return $this->hasMany(PeerChat::class);
    }
}
