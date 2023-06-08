<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;


   protected $table = 'user_daily_tasks';

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
