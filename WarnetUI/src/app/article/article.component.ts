import {Component, Input} from '@angular/core';
import {Article} from '../models/article.model';

@Component({
  selector: 'app-article',
  standalone: false,
  templateUrl: './article.component.html',
  styleUrl: './article.component.scss'
})
export class ArticleComponent {

  // Attributs
  @Input() article!: Article;

  // Méthodes
  edit(){

  }
}
