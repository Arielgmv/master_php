import { Component, OnInit } from '@angular/core';
import { ComentarioService } from './comentario.service';

@Component({
  selector: 'app-comentario',
  templateUrl: './comentario.component.html',
  styleUrls: ['./comentario.component.css']
})
export class ComentarioComponent implements OnInit {

  comentario: any =[];
  
  constructor(protected comentarioService: ComentarioService) {
    this.comentarioService.lista_comentario().subscribe(
      (res: any) => {
        console.log(res);
        this.comentario = res;
      },
      (error: any) => {
        console.log(error);
      }
    );
   }

  ngOnInit() {
  }

}
