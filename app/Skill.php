<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Skill extends Model {
  protected $fillable = array('nom', 'src', 'id');
  
  public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('level');
    }
}