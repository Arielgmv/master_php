import { Component, OnInit } from '@angular/core';
import { PublicacionesService } from './publicaciones.service';

@Component({
  selector: 'app-publicaciones',
  templateUrl: './publicaciones.component.html',
  styleUrls: ['./publicaciones.component.css']
})
export class PublicacionesComponent implements OnInit {

  publicaciones: any =[];

  constructor(protected publicacionesService: PublicacionesService) { 
    this.publicacionesService.lista_publicaciones().subscribe(
      (res: any) => {
        console.log(res);
        this.publicaciones = res;
      },
      (error: any) => {
        console.log(error);
      }
    );
  }

  ngOnInit() {
  }

}
