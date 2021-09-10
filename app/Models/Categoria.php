<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /************** RELACION UNO A MUCHOS  ***********/
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
