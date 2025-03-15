export class Image {
  id: number;
  chemin: string;
  alt: string;

  // Constructeur
  constructor(id: number, path: string, alt: string) {
    this.id = id;
    this.chemin = path;
    this.alt = alt;
  }


}
