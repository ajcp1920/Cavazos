create database FormularioEnLinea;
use FormularioEnLinea;

create table Usuario(
id int not null,
pass varchar(10) not null,
primary key(id)
);

create table Datos(
nomcom varchar(50) not null,
numerotel varchar(10) not null,
direccion varchar(50) not null,
ciudad varchar(30) not null,
estado varchar(30) not null,
codpos int not null,
email varchar(30) not null,
comentariosextras varchar(100) not null,
foreign key (id) references Usuario (id)
);

insert into Usuario values (1, '5fg5jko9nb');
insert into Usuario values (2, 'dsgkjdkgdf');
insert into Usuario values (3, 'fdgdfgfdgg');
insert into Usuario values (4, 'bvfgdzvghd');
insert into Usuario values (5, 'osdpsndffg');

insert into Datos values ('Arturo de Jesus Cavazos Pastrana','8971074895','Independencia #403','Cd. Mier','Tamaulipas',88390,'ajcp1920@gmail.com','Casa naranja arbol grande');
insert into Datos values ('Cristina Cavazos Pastrana','8971003456','Mezquital','Cd. Miguel Aleman','Tamaulipas',88785,'crispycrim@gmail.com','Casa con porton electrico');
insert into Datos values ('Celima Cavazos Pastrana','8971077689','Madero','Cd. Mier','Tamaulipas',88390,'celicavazos@gmail.com','Casa con dos perros afuera y una casa de perro azul');
insert into Datos values ('Gloria Pastrana Gonzalez','8971048976','Independencia #403','Cd. Mier','Tamaulipas',88390,'gloriaeugpas@gmail.com','casa naranja arbol grande afuera');
insert into Datos values ('Arturo Cavazos Peña','8971056785','Independencia #403','Cd. Mier','Tamaulipas',88390,'peñaarturo@gmail.com','casa naranja con arbol grande afuera y barda naranja');