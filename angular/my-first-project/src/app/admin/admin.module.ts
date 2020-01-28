import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AdminComponent } from './admin.component';
import { AdminRoutingModule } from './admin-routing.module';
import { CategoriaComponent } from './categoria/categoria.component';
import { ProductoComponent } from './producto/producto.component';
import { ProveedorComponent } from './proveedor/proveedor.component';
import { UsuarioComponent } from './usuario/usuario.component';
import { NavbarComponent } from './componentes/navbar/navbar.component';
import { LayoutModule } from '@angular/cdk/layout';
import { MatToolbarModule } from '@angular/material/toolbar';
import { MatButtonModule } from '@angular/material/button';
import { MatSidenavModule } from '@angular/material/sidenav';
import { MatIconModule } from '@angular/material/icon';
import { MatListModule } from '@angular/material/list';
import { CategoriaCreateComponent } from './categoria/categoria-create/categoria-create.component';
import { CategoriaIndexComponent } from './categoria/categoria-index/categoria-index.component';
import { CategoriaUpdateComponent } from './categoria/categoria-update/categoria-update.component';
import { ProductoCreateComponent } from './producto/producto-create/producto-create.component';
import { ProductoIndexComponent } from './producto/producto-index/producto-index.component';
import { ProductoUpdateComponent } from './producto/producto-update/producto-update.component';
import { ProveedorCreateComponent } from './proveedor/proveedor-create/proveedor-create.component';
import { ProveedorIndexComponent } from './proveedor/proveedor-index/proveedor-index.component';
import { ProveedorUpdateComponent } from './proveedor/proveedor-update/proveedor-update.component';
import { UsuarioCreateComponent } from './usuario/usuario-create/usuario-create.component';
import { UsuarioIndexComponent } from './usuario/usuario-index/usuario-index.component';
import { UsuarioUpdateComponent } from './usuario/usuario-update/usuario-update.component';



@NgModule({
  declarations: [AdminComponent, CategoriaComponent, ProductoComponent, ProveedorComponent, UsuarioComponent, NavbarComponent, CategoriaCreateComponent, CategoriaIndexComponent, CategoriaUpdateComponent, ProductoCreateComponent, ProductoIndexComponent, ProductoUpdateComponent, ProveedorCreateComponent, ProveedorIndexComponent, ProveedorUpdateComponent, UsuarioCreateComponent, UsuarioIndexComponent, UsuarioUpdateComponent],
  imports: [
    CommonModule,
    AdminRoutingModule,
    LayoutModule,
    MatToolbarModule,
    MatButtonModule,
    MatSidenavModule,
    MatIconModule,
    MatListModule
  ]
})
export class AdminModule { }
