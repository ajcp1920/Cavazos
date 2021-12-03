create database sesionsql;
use sesionsql;

create table nuevousuario(
    idU smallint not null auto_increment,
    nombre_completo varchar(60),
    correo varchar(60),
    usuario varchar(60),
    contrasena varchar(60),
    primary key(idU)
);

select * from nuevousuario;
insert into nuevousuario(nombre_completo, correo, usuario, contrasena) values ('Arturo Cavazos', 'ajcp1920@gmail.com', 'ajcp', '18100158');
insert into nuevousuario(nombre_completo, correo, usuario, contrasena) values ('Jesus Pastrana', 'ajcptec19@gmail.com', 'ajcp1', '18100159');
