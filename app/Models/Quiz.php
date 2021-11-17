<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded=["id"];

    protected $dates=['finished_at'];
    public function getFinishedAtAttribute($date){
        return $date ? Carbon::parse($date) : null;
    }
    public function questions(){
        return $this->hasMany('App\Models\Question');
        
    }
    
}
