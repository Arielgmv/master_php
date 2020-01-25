import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CarritoComponent } from './cliente/carrito/carrito.component';
import { NosotrosComponent } from './cliente/nosotros/nosotros.component';
import { LoginComponent } from './cliente/login/login.component';
import { PublicacionesComponent } from './cliente/publicaciones/publicaciones.component';


const routes: Routes = [
  {
    path: 'carrito',
    component: CarritoComponent
  },
  {
    path: 'nosotros',
    component: NosotrosComponent
  },
  {
    path: 'login',
    component: LoginComponent
  },
  {
    path: 'publicaciones',
    component: PublicacionesComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
