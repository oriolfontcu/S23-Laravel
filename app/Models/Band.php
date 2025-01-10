<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concert;

class Band extends Model
{
    /** @use HasFactory<\Database\Factories\BandFactory> */
    use HasFactory;

    protected $table = 'bands';
    protected $fillable = ['nombre', 'tipo_musica', 'cantidad_miembros'];

    public function concerts()
    {
        return $this->belongsToMany(Concert::class);
    }
}
