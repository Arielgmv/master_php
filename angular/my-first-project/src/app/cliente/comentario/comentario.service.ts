import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ComentarioService {

  constructor(protected http: HttpClient) { }

  lista_comentario(){
    return this.http.get("https://jsonplaceholder.typicode.com/comments");
  }
}
