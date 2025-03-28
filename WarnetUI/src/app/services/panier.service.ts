import {inject, Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Article} from '../models/article.model';


@Injectable({
  providedIn: 'root'
})
export class PanierService {
  // Injections
  // private readonly http: HttpClient = inject(HttpClient);
  // apiUrl!: string;

  // constructor() {
  //   this.apiUrl = 'http://localhost:8000/api/';
  // }

  // // Méthodes
  // getPanierFromUID(id: number) {

  // }

  // // Ajouter un articles à un panier
  // addArticleToCart(idArticle: number, UID: number): boolean {
  //   this.http.post(this.apiUrl + '/article/', );
  // }

  // // Supprimer un article d'un panier
  // deleteArticleFromCart(id: number, IUD: number) {

  // }
}
