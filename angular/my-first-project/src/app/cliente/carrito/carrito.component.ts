import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';

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
  productos:any = [];
  cant_venta:any= 1;
  
  carrito:any = [];
  total_pagar:number = 0;

  productoForm = new FormGroup({
    nombre: new FormControl(''),
    precio: new FormControl(''),
    cantidad: new FormControl('') 
  })

  constructor() { 
    this.titulo = "Carrito de compras 1";
    this.estado = true;
    this.cant_productos = 8;
    this.categorias.push("ropa");
    this.categorias.push("muebles");
    this.categorias.push("juguetes");

    this.productos.push({
                        nombre:"chamarra",
                        precio: 250,
                        cantidad: 12
                      });
    this.productos.push({
                        nombre:"mesa",
                        precio: 550,
                        cantidad: 6
                      });
    this.productos.push({
                        nombre:"zapato",
                        precio: 250,
                        cantidad: 18
                      });                  

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

  eliminar_producto(i){
    this.productos.splice(i, 1);
  }

  agregar_carrito(prod){
    this.carrito.push({
      nombre: prod.nombre,
      cantidad: this.cant_venta,
      precio: prod.precio
    })
    this.cant_venta = 1;

    this.calcular_total_pagar();
  }

  cambio(data){
    this.cant_venta = data.target.value;
  }

  calcular_total_pagar(){
    this.total_pagar = 0;
    for(let i=0; i<this.carrito.length; i++){
      this.total_pagar += this.carrito[i].precio*this.carrito[i].cantidad;
    }
  }

  agregar_producto(){
    this.productos.push(this.productoForm.value);
  }
}
