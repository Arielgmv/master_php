import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-carrito',
  templateUrl: './carrito.component.html',
  styleUrls: ['./carrito.component.css']
})
export class CarritoComponent implements OnInit {

  titulo:string;
  estado:boolean;
  cant_productos:number = 0;
  categorias:any = [];

  constructor() { 
    this.titulo = "Carrito de compras 1";
    this.estado = true;
    this.cant_productos = 8;
    this.categorias.push("ropa");
    this.categorias.push("muebles");
    this.categorias.push("juguetes");
  }

  ngOnInit() {
  }

  cerrar_tienda(){
    if (this.estado) {
      this.estado=false;
    }else{
      this.estado=true;
    }
  }

}
