import { Component } from '@angular/core';
import {Router} from '@angular/router';

@Component({
  selector: 'app-header',
  standalone: false,
  templateUrl: './header.component.html',
  styleUrl: './header.component.scss'
})
export class HeaderComponent {
  isLoggedIn: boolean = false;

  constructor(private router: Router) {}

  ngOnInit() {
    // Vérifie si l'utilisateur est connecté (par exemple, en vérifiant une session ou un token)
    this.isLoggedIn = sessionStorage.getItem('login') !== null && sessionStorage.getItem('pwd') !== null;
  }

  logout() {
    sessionStorage.removeItem('login');
    sessionStorage.removeItem('pwd');
    this.isLoggedIn = false;
    this.router.navigate(['/']);
  }
}
