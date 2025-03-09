<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Nom de la table
    protected $table = 'article';

    // Clés primaires
    protected $primaryKey = 'id';

    // Champs autorisés
    protected $fillable = [
        'titre',
        'description',
        'descriptionLongue',
        'prix',
        'quantiteDispo',
        'categorie_id',
        'image_id',
    ];

    // Désactivation des timestamps
    public $timestamps = false;

    // Clés étrangères
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
