<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
     protected $fillable =['user_id','title','description','reference',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
