import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from './../../../environments/environment.prod';

@Injectable({
  providedIn: 'root'
})
export class CategoriaService {


  base = environment.servidor
  reqHeader: HttpHeaders;
  constructor(protected http:HttpClient) {
    this.reqHeader = new HttpHeaders({
      'Content-Type': 'aplication/json',
      'Authorization': 'Bearer ' + atob(localStorage.getItem('token'))
    });
   }

   index(){
     return this.http.get(this.base + "/categoria", {headers: this.reqHeader});
   }

   store(datos){
     return this.http.post(this.base + "/categoria", datos, {headers: this.reqHeader});
   }

   show(id:any){
     return this.http.get(this.base + "/categoria/"+id, {headers: this.reqHeader});
   }

   update(datos, id:number){
    return this.http.put(this.base + "/categoria/"+id, datos, {headers: this.reqHeader});
   }

   destroy(id: Number){
     return this.http.delete(this.base + "/categoria/" +id, {headers: this.reqHeader});
   }
}
