CREATE DATABASE taller;
CREATE TABLE vehiculos (idVehiculo int PRIMARY KEY AUTO_INCREMENT, propietario varchar(40), fichaTecnica int, diagnosis mediumtext);
CREATE TABLE clientes (idCliente int PRIMARY KEY AUTO_INCREMENT, nombre varchar(40), dni char(9), fichaTecnicaCliente int);
CREATE TABLE mecanicos (idMecanico int PRIMARY KEY AUTO_INCREMENT, nombreCliente varchar(40), nombreMecanico varchar(40));
CREATE TABLE fichasTecnicas (idFichaTecnica int PRIMARY KEY AUTO_INCREMENT, tipo varchar(9), matricula char(7), anyo int(4), marca varchar(20), modelo varchar(30));
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_ClientesFichasTecnicas_idFichaTecnica` FOREIGN KEY (`fichaTecnicaCliente`) REFERENCES `fichastecnicas` (`idFichaTecnica`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD KEY `Clientes_nombre` (`nombre`);
ALTER TABLE `mecanicos`
  ADD CONSTRAINT `fk_MecanicosClientes_nombre` FOREIGN KEY (`nombreCliente`) REFERENCES `clientes` (`nombre`) ON UPDATE CASCADE;
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `fk_VehiculosClientes_propietario` FOREIGN KEY (`propietario`) REFERENCES `clientes` (`nombre`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_VehiculosClientes_fichaTecnicaCliente` FOREIGN KEY (`fichaTecnica`) REFERENCES `clientes` (`fichaTecnicaCliente`) ON DELETE SET NULL ON UPDATE CASCADE;
  
INSERT INTO fichastecnicas(tipo,matricula,anyo,marca,modelo) VALUES ('coche','1234QWE',2008,'Volkswagen','Passat');
INSERT INTO fichastecnicas(tipo,matricula,anyo,marca,modelo) VALUES ('coche','5678TYG',2006,'Subaru','Impreza');
INSERT INTO clientes(nombre,dni,fichaTecnicaCliente) VALUES ('Pepe','12345678A',1);
INSERT INTO clientes(nombre,dni,fichaTecnicaCliente) VALUES ('Juan','87654321Z',2);
INSERT INTO mecanicos(nombreCliente,nombreMecanico) VALUES ('Pepe','Antonio');
INSERT INTO mecanicos(nombreCliente,nombreMecanico) VALUES ('Juan','Ana');
INSERT INTO vehiculos(propietario,fichaTecnica,diagnosis) VALUES ('Pepe',1,'Falla motor');
INSERT INTO vehiculos(propietario,fichaTecnica,diagnosis) VALUES ('Juan',2,'Cambio de aceite');
