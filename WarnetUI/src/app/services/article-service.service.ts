import { Injectable } from '@angular/core';
import {Article} from '../models/article.model';
import {HttpClient} from '@angular/common/http';
import {Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ArticleService {

  catalog!: Article[];
  apiUrl!: string;

  constructor( private http: HttpClient ) {
    this.apiUrl = 'http://localhost:8000/';
  }

  // Méthode de récupération vai l'API
  getAllArticles(): Observable<Article[]> {
    return this.http.get<Article[]>(this.apiUrl + '/articles');
  }

}
