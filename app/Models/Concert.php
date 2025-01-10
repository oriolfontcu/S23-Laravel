<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Band;

class Concert extends Model
{
    use HasFactory;

    /** @use HasFactory<\Database\Factories\ConcertFactory> */
    protected $table = 'concerts';
    protected $fillable = ['nombre', 'dia_inicio', 'dia_fin', 'max_personas', 'entradas_vendidas'];

    public function bands()
    {
        return $this->belongsToMany(Band::class);
    }
}
