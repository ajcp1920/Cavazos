create database FormularioEnLinea;
use FormularioEnLinea;

create table Datos(
nomcom varchar(50),
numerotel varchar(10),
direccion varchar(50),
ciudad varchar(30),
estado varchar(30),
codpos int,
email varchar(30),
comentariosextras varchar(100)
);

insert into Datos values ('Arturo de Jesus Cavazos Pastrana','8971074895','Independencia #403','Cd. Mier','Tamaulipas',88390,'ajcp1920@gmail.com','Casa naranja arbol grande');
insert into Datos values ('Cristina Cavazos Pastrana','8971003456','Mezquital','Cd. Miguel Aleman','Tamaulipas',88785,'crispycrim@gmail.com','Casa con porton electrico');
insert into Datos values ('Celima Cavazos Pastrana','8971077689','Madero','Cd. Mier','Tamaulipas',88390,'celicavazos@gmail.com','Casa con dos perros afuera y una casa de perro azul');
insert into Datos values ('Gloria Pastrana Gonzalez','8971048976','Independencia #403','Cd. Mier','Tamaulipas',88390,'gloriaeugpas@gmail.com','casa naranja arbol grande afuera');
insert into Datos values ('Arturo Cavazos Peña','8971056785','Independencia #403','Cd. Mier','Tamaulipas',88390,'peñaarturo@gmail.com','casa naranja con arbol grande afuera y barda naranja');