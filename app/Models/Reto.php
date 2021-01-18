<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'link',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function retosCumplidos()
    {
        return $this->hasMany('App\Models\RetosCumplidos');
    }
}
