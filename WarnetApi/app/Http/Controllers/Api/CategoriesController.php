<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoriesController extends Controller
{
    // Métode pour récupérer toutes les catégories
    public function index()
    {
        // Récupérer toutes les catégories
        $categories = Categorie::all();

        // Retourner les catégories
        return response()->json($categories);
    }

    // Méthode pour récupérer les articles d'une catégorie
    public function articles($id)
    {
        // Récupérer la catégorie
        $categorie = Categorie::find($id);

        // Vérifier si la catégorie existe
        if ($categorie === null) {
            // Retourner une erreur 404
            return response()->json(['message' => 'Catégorie non trouvée'], 404);
        }

        // Récupérer les articles de la catégorie
        $articles = $categorie->articles()->with(['categorie', 'image'])->get();

        // Retourner les articles
        return response()->json($articles);
    }
}
