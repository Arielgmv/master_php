import { Injectable } from '@angular/core';
import { environment } from './../../../environments/environment.prod';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class LoginService {

  base = environment.servidor;

  constructor(protected http:HttpClient) { }

  login(request){
    return this.http.post(this.base + "/auth/login", request);
    //return this.http.post(this.base + "/auth/login", request);
  }
}
