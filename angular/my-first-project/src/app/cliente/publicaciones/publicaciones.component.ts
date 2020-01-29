import { Component, OnInit } from '@angular/core';
import { PublicacionesService } from './publicaciones.service';

@Component({
  selector: 'app-publicaciones',
  templateUrl: './publicaciones.component.html',
  styleUrls: ['./publicaciones.component.css']
})
export class PublicacionesComponent implements OnInit {

  cargando: boolean = false;
  publicaciones: any =[];

  constructor(protected publicacionesService: PublicacionesService) { 
    this.cargando = true;
    this.publicacionesService.lista_publicaciones().subscribe(
      (res: any) => {
        console.log(res);
        this.publicaciones = res;
        this.cargando = false;
      },
      (error: any) => {
        console.log(error);
        this.cargando = false;
      }
    );
  }

  ngOnInit() {
  }

}
