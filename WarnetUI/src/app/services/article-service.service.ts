import { Injectable } from '@angular/core';
import {Article} from '../models/article.model';
import {HttpClient} from '@angular/common/http';
import {Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ArticleService {

  apiUrl!: string;

  constructor( private http: HttpClient ) {
    this.apiUrl = 'http://localhost:8000/api/';
  }

  // Méthodes

  // Récupération de tous les articles
  getAllArticles(): Observable<Article[]> {
    return this.http.get<Article[]>(this.apiUrl + 'articles');
  }

  // Récupération d'un article par son id
  getArticleById(id: number): Observable<Article>{
    return this.http.get<Article>(this.apiUrl + 'article/' + id);
  }
}
