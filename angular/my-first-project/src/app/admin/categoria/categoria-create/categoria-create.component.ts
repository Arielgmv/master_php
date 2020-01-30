import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { CategoriaService } from '../categoria.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-categoria-create',
  templateUrl: './categoria-create.component.html',
  styleUrls: ['./categoria-create.component.css']
})
export class CategoriaCreateComponent implements OnInit {

  categoriaForm = new FormGroup({
    nombre: new FormControl('', Validators.required),
    descripcion: new FormControl('')
  });
  
  constructor(protected categoriaService: CategoriaService,
    protected router:Router
    ) { }

  ngOnInit() {
  }

  guardar(){
    this.categoriaService.store(this.categoriaForm.value).subscribe(
      (res:any) => {
        console.log(res);
        this.router.navigate(['/admin/categoria']);
      },
      (error:any) =>{
        console.log(error);
      }
    )
  }
}
