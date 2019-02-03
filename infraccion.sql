create database infraccion;

use infraccion;

create table usuarios(
   id int not null primary key,
   username varchar(50) not null,
   password varchar(255) not null,
   email varchar(100) not null,
   nombreCompleto varchar(100) not null,
   rol char(1) DEFAULT 1
);


create table persona(
  id int not null primary key,
  cedula varchar(11) not null,
  licencia varchar(20) not null,
  primerNombre varchar(20) not null,
  segundoNombre varchar(20) null,
  primerApellido varchar(20) not null,
  segundoApellido varchar(20) not null,
  telefono NUMERIC(10) not null
);

create table TipoVehiculo(
  id int not null primary key,
  tipoVehiculo varchar(20) not null
);

create table vehiculo(
  id int not null primary key,
  placa varchar(20) not null,
  marca varchar(20) not null,
  modelo varchar(20) not null,
  tipoServicio varchar(100) not null,
  idTipoVehiculo int not null,
  FOREIGN KEY(idTipoVehiculo) REFERENCES TipoVehiculo(id)
);

create table infraccion(
  id int not null primary key,
  fechaMulta DATETIME,
  ciudad varchar(10) not null,
  direccion varchar(10) not null,
  multa float not null,
  idPersona int not null,
  idVehiculo int not null,
  FOREIGN KEY(idPersona) REFERENCES persona(id),
  FOREIGN KEY(idVehiculo) REFERENCES vehiculo(id)
);


create table pagoInfraccion(
  id int not null primary key,
  idInfraccion int not null,
  FOREIGN KEY(idInfraccion) REFERENCES infraccion(id),
  fechaPago DATETIME
);

