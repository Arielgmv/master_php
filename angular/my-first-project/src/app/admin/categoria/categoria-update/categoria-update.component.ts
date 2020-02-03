import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { CategoriaService } from '../categoria.service';
import { FormGroup, FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-categoria-update',
  templateUrl: './categoria-update.component.html',
  styleUrls: ['./categoria-update.component.css']
})
export class CategoriaUpdateComponent implements OnInit {
  id: any;
  categoria: any = {};

  categoriaForm = new FormGroup({
    nombre: new FormControl('', Validators.required),
    descripcion: new FormControl('')
  });

  constructor(protected route: ActivatedRoute,
              protected categoriaService: CategoriaService,
              protected router: Router) {    
    this.route.params.subscribe(
      (res:any) =>{
        this.id = res.id
      });
  this.categoriaService.show(this.id).subscribe(
    (res:any) =>{
      this.categoria = res.datos;
      console.log(res.datos);
      this.cargarFormulario();
    }
  )
  }

  ngOnInit() {
  }

  cargarFormulario(){
    this.categoriaForm = new FormGroup({
    nombre: new FormControl(this.categoria.nombre, Validators.required),
    descripcion: new FormControl(this.categoria.descripcion)
    });
  }

  modificar(){
    this.categoriaService.update(this.categoriaForm.value, this.id).subscribe(
      (res) =>{
        console.log(res);
        this.router.navigate(["/admin/categoria"]);
      },
      (error: any)=>{
        console.log(error);
      }
    )
  }
}
