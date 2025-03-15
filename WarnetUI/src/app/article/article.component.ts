import {Component, Injector, Input} from '@angular/core';
import {Article} from '../models/article.model';
import {ArticleService} from '../services/article-service.service';
import {ActivatedRoute} from '@angular/router';

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

  // Constructeur
  constructor(private articleService: ArticleService, private router: ActivatedRoute) {}

  // Méthodes
  ngOnInit() {
    // Récupération de l'article via son id
    const idParam = this.router.snapshot.paramMap.get('id');

    if (idParam !== null) {
      const id = parseInt(idParam, 10);
      this.articleService.getArticleById(id).subscribe(produit => {
        this.article = produit;

        this.loadRelatedArticles(this.article.categorie.id);
      });

      // Changer l'état de liste
      this.isListView = false;
    }
  }

  // Récupérer les articles de la même catégorie
  loadRelatedArticles(categorieId: number): void {
    this.articleService.getArticlesByCategory(categorieId).subscribe(articles => {
      this.relatedArticles = articles.filter(a => a.id !== this.article.id); // On filtre l'article courant pour ne pas l'afficher dans la liste des similaires
    });
  }
}
