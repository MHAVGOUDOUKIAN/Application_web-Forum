import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  login = '';
  password = '';
  errorMessage = '';
  aff = true;

  constructor() { }

  ngOnInit(): void {
  }

  afficher(): void {
    console.log(this.login);
    console.log(this.password);
  }
}
