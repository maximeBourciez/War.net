import { Component, OnInit } from '@angular/core';
import { Article } from '../models/article.model';
import { ArticleService } from '../services/article-service.service';

@Component({
  selector: 'app-home',
  standalone: false,
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  articlesCatalog: Article[] = [];

  constructor(private articleService: ArticleService) {}

  ngOnInit(): void {
    this.articleService.getAllArticles().subscribe(articles => {
      this.articlesCatalog = articles;
    });
  }

  trackById(index: number, article: Article): number {
    return article.id; // Utilise l'ID de l'article pour le suivre
  }
}
