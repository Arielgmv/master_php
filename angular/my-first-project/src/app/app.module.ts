import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { ReactiveFormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PruebaComponent } from './prueba/prueba.component';
import { ContactoComponent } from './contacto/contacto.component';
import { CarritoComponent } from './cliente/carrito/carrito.component';
import { LoginComponent } from './cliente/login/login.component';
import { NosotrosComponent } from './cliente/nosotros/nosotros.component';
import { PublicacionesComponent } from './cliente/publicaciones/publicaciones.component';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { ComentarioComponent } from './cliente/comentario/comentario.component';
import { InicioComponent } from './cliente/inicio/inicio.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

@NgModule({
  declarations: [
    AppComponent,
    PruebaComponent,
    ContactoComponent,
    CarritoComponent,
    LoginComponent,
    NosotrosComponent,
    PublicacionesComponent,
    ComentarioComponent,
    InicioComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule,
    HttpClientModule,
    BrowserAnimationsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
