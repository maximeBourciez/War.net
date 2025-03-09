<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    // Nom de la table
    protected $table = 'categorie';

    // Clés primaires
    protected $primaryKey = 'id';

    // Champs autorisés
    protected $fillable = [
        'nom',
    ];

    // Désactivation des timestamps
    public $timestamps = false;

    // Clés étrangères
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
