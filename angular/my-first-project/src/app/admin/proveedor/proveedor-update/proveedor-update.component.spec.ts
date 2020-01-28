import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProveedorUpdateComponent } from './proveedor-update.component';

describe('ProveedorUpdateComponent', () => {
  let component: ProveedorUpdateComponent;
  let fixture: ComponentFixture<ProveedorUpdateComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProveedorUpdateComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProveedorUpdateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
