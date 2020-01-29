import { Component, OnInit } from '@angular/core';
import { FormControl, Validators, FormGroup } from '@angular/forms';
import { LoginService } from './login.service';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  loginForm = new FormGroup({
    email: new FormControl('', [Validators.required, Validators.email]),
    password: new FormControl('',Validators.required)
  });


  constructor(protected loginService: LoginService,
              protected router: Router) { }

  ngOnInit() {
  }

  ingresar(){
    console.log(this.loginForm.value);
    this.loginService.login(this.loginForm.value).subscribe(
      (res: any) => {
        console.log(res);
        localStorage.setItem('token', btoa(res.access_token));
        localStorage.setItem('usuario', btoa(JSON.stringify(res.usuario)));
        this.router.navigate(["/admin"]);
      },
      (error: any) =>{
        console.log(error);
      }
    );
  }

}
