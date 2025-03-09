<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Nom de la table
    protected $table = 'image';

    // Clés primaires
    protected $primaryKey = 'id';

    // Champs autorisés
    protected $fillable = [
        'chemin',
        'alt',
    ];

    // Désactivation des timestamps
    public $timestamps = false;

    // Clés étrangères
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
