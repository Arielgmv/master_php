import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CarritoComponent } from './cliente/carrito/carrito.component';
import { NosotrosComponent } from './cliente/nosotros/nosotros.component';
import { LoginComponent } from './cliente/login/login.component';
import { PublicacionesComponent } from './cliente/publicaciones/publicaciones.component';
import { ComentarioComponent } from './cliente/comentario/comentario.component';
import { InicioComponent } from './cliente/inicio/inicio.component';
import { AuthGuard } from './guards/auth.guard';

const routes: Routes = [
  {
    path: '',
    component: InicioComponent,
    children: [
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
      },
      {
        path: 'comentario',
        component: ComentarioComponent
      },
    ]
  },
  {
    path: 'admin',
    loadChildren: './admin/admin.module#AdminModule',
    canActivate: [AuthGuard]
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
