import { Component, OnInit } from '@angular/core';
import { CategoriaService } from '../categoria.service';
import { HttpErrorResponse } from '@angular/common/http/http';

@Component({
  selector: 'app-categoria-index',
  templateUrl: './categoria-index.component.html',
  styleUrls: ['./categoria-index.component.css']
})
export class CategoriaIndexComponent implements OnInit {
  
  categorias: any [];

  constructor(protected categoriaService:CategoriaService) {
    this.categoriaService.index().subscribe(
      (res:any) =>{
        this.categorias = res.datos;
        console.log(this.categorias)
      },
      (error: HttpErrorResponse) => {
        console.log(error.error.message)
        alert("No estas autorizado");
      }
    );
  }

  ngOnInit() {
  }

}
