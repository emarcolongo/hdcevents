<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = ['items' => 'array'];
    protected $dates = ['date'];
    protected $guarded = [];    //tudo que vier pelo POST pode ser atualizado

    public function user() {
        return $this->belongsTo('Apps\Model\User');
    }

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
