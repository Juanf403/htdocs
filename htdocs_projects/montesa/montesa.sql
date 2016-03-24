-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-09-2015 a las 23:34:28
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

Drop database `f403_montesa`;
Create database `f403_montesa`;
use `f403_montesa`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) unsigned auto_increment Primary Key,
  `nombre` varchar(45) NOT NULL, 
  `login` varchar(45) NOT NULL,
  `tipo_usuario` varchar(10) NOT NULL,
  `sucursal` varchar(45),
  `password` varchar(45) NOT NULL,
  `ingreso` datetime NOT NULL
);




INSERT INTO usuarios (`nombre`, `login`, `tipo_usuario`,`sucursal`, `password`, `ingreso`) VALUES
('juan manuel ahumada vazquez ', 'juanadmin' , 'admin','poniente', '1f7d060dab05ab8e2ebdbdd679046bee', '2015-09-07 23:15:58'),
('Gerardo Diaz', 'Gerardo','gerente','poniente', '01b3ebf87868b70121dc42784c97038a', '2015-08-17 23:28:25');



CREATE TABLE IF NOT exists `productos` (
`id_producto` int(10) unsigned auto_increment Primary Key,
`nombre` varchar(128) NOT NULL , 
`precio_venta` numeric(15,2) NOT NULL, 
`precio_compra` numeric(15,2) ,
`tipo` varchar(64),
`marca` varchar(64),
`observaciones` varchar(256)
/*'`cantidad` int(8) not NULL, componente[s] activo[s]'*/

);


CREATE TABLE IF NOT EXISTS `stock` (
`id_producto` int(10) unsigned not null, 
sucursal varchar(50) not null,
cantidad int(8) not null, 
FOREIGN KEY(`id_producto`) REFERENCES `productos`(`id_producto`)
);

Insert into productos(nombre, precio_venta,precio_compra,tipo,marca,observaciones)
Values
('objeto1',25.95,34.95,'tipo prueba','marca prueba','observaciones de prueba'),
('Alienware R5',27999.99,34999.99,'electronicos','Dell Alienware','It\'s an Alienware!'),
('objeto 2',25.95,34.95,'tipo prueba 2','marca 2 prueba','observaciones de prueba2')

/*INSERT INTO `stock` (`id_stock`, `articulo`, `marca`, `tipo`, `stock`, `precio`, `precioventa`, `observaciones`, `fecha`) VALUES
(1, 'objeto prueba', 'marca prueba', 'tipo prueba', '5', '150', '200', 'observaciones prueba', '2015-09-04'),
(2, 'objeto prueba1', 'marca prueba1', 'tipo prueba1', '6', '1500', '2000', 'obseraviones prueba', '2015-09-04'),
(3, 'objeto prueba3', 'marca prueba3', '5*5', '50', '700', '1400', 'Observaciones prueba', '2015-09-07');*/


--
-- AUTO_INCREMENT de la tabla `usuarios`

