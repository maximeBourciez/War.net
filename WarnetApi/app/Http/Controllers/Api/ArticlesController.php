<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    // Fonction pour récupérer tous les articles
    public function index(){
        $articles = Article::with(['categorie', 'image'])->get();
        return response()->json($articles);
    }

    // Fonction pour récupérer un article
    public function show($id){
        $article = Article::with(['categorie', 'image'])->find($id);
        return response()->json($article);
    }

    // Fonction pour créer un article
    public function store(Request $request){
        $article = new Article();
        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->descriptionLongue = $request->descriptionLongue;
        $article->prix = $request->prix;
        $article->quantiteDispo = $request->quantiteDispo;
        $article->categorie_id = $request->categorie_id;
        $article->image_id = $request->image_id;
        $article->save();
        return response()->json($article);
    }

    // Fonction pour mettre à jour un article
    public function update(Request $request, $id){
        $article = Article::find($id);
        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->descriptionLongue = $request->descriptionLongue;
        $article->prix = $request->prix;
        $article->quantiteDispo = $request->quantiteDispo;
        $article->categorie_id = $request->categorie_id;
        $article->image_id = $request->image_id;
        $article->save();
        return response()->json($article);
    }

    // Fonction pour supprimer un article
    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return response()->json($article);
    }

    // Fonction pour rechercher un article
    public function search($titre){
        $articles = Article::with(['categorie', 'image'])->where('titre', 'like', '%'.$titre.'%')->get();
        return response()->json($articles);
    }

    // Fonction pour filtrer les articles par catégorie
    public function filter($categorie_id){
        $articles = Article::with(['categorie', 'image'])->where('categorie_id', $categorie_id)->get();
        return response()->json($articles);
    }

    // Fonction pour filtrer les articles par prix
    public function filterPrice($prix){
        $articles = Article::with(['categorie', 'image'])->where('prix', '<=', $prix)->get();
        return response()->json($articles);
    }
}
