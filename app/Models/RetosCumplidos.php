<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetosCumplidos extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'reto_id',
        'cumplido',
    ];

    public function retos(){
        return $this->belongsTo('App\Models\Reto');
    }

    public function users(){
        return $this->belongsTo('App\Models\RetosCumplidos');
    }
}
