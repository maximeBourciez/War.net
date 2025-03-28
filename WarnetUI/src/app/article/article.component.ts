import {Component, inject, Injector, Input} from '@angular/core';
import {Article} from '../models/article.model';
import {ArticleService} from '../services/article-service.service';
import {ActivatedRoute} from '@angular/router';
import {PanierService} from '../services/panier.service';

@Component({
  selector: 'app-article',
  standalone: false,
  templateUrl: './article.component.html',
  styleUrl: './article.component.scss'
})
export class ArticleComponent {

  // Attributs
  @Input() article!: Article;
  @Input() isListView: boolean = true;
  relatedArticles!: Article[];
  private readonly articleService: ArticleService = inject(ArticleService);
  private readonly panierService: PanierService = inject(PanierService);
  private readonly router: ActivatedRoute = inject(ActivatedRoute);

  // Constructeur
  constructor() {}

  // Méthodes
  ngOnInit() {
    // Récupération de l'article via son id
    const idParam = this.router.snapshot.paramMap.get('id');

    if (idParam !== null) {
      const id = parseInt(idParam, 10);
      this.articleService.getArticleById(id).subscribe(produit => {
        this.article = produit;

        // Changer l'état de liste
        this.isListView = false;

        this.loadRelatedArticles(this.article.categorie.id);
      });


    }
  }

  // Récupérer les articles de la même catégorie
  loadRelatedArticles(categorieId: number): void {
    this.articleService.getArticlesByCategory(categorieId).subscribe(articles => {
      this.relatedArticles = articles.filter(a => a.id !== this.article.id);
    });
  }

  // Méthode d'ajout au panier
  addToCart(id : number): void {
    // Récupérer l'id de l'utilisateur
    const idUtilisateur = 1;

    // Ajouter l'article complet
    // this.panierService.addArticleToCart(id, idUtilisateur);


  }
}
