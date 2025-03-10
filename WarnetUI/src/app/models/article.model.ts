import {Categorie} from './categorie.model';
import {Image} from './image.model';

export class Article {
  id: number;
  titre: string;
  description: string;
  descriptionLongue: string;
  prix: number;
  quantiteDispo: number
  category: Categorie;
  image: Image;

  // Constructeur
  constructor(id: number, titre: string, description: string, descriptionLongue: string, prix: number, quantiteDispo: number, category: Categorie, image: Image) {
    this.id = id;
    this.titre = titre;
    this.description = description;
    this.descriptionLongue = descriptionLongue;
    this.prix = prix;
    this.quantiteDispo = quantiteDispo;
    this.category = category;
    this.image = image;
  }
}
