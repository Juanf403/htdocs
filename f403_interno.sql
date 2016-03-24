-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-03-2016 a las 21:59:44
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `f403_interno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bocetos`
--

CREATE TABLE IF NOT EXISTS `bocetos` (
  `idbocetos` int(255) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `clienteId` int(255) NOT NULL,
  PRIMARY KEY (`idbocetos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `bocetos`
--

INSERT INTO `bocetos` (`idbocetos`, `fecha`, `categoria`, `url`, `clienteId`) VALUES
(1, '2015-06-05', 'Agencia Aduanal', 'http://livedemo00.template-help.com/wt_53673/', 0),
(2, '2015-06-05', 'Agencia Aduanal', 'http://livedemo00.template-help.com/wt_53976/', 0),
(3, '2015-06-05', 'Boutique', 'http://demo.mysticthemes.com/cs-cart/Metrophobic/basic/', 0),
(4, '2015-06-05', 'Boutique', 'http://demo.mysticthemes.com/cs-cart/Metrophobic/responsive/', 0),
(5, '2015-06-05', 'Boutique', 'http://demo.mysticthemes.com/cs-cart/Metrophobic/rtl/', 0),
(6, '2015-06-05', 'Ventas Tecnologia Joyeria', 'http://demo.mysticthemes.com/cs-cart/Alpha/basic_v1/', 0),
(7, '2015-06-05', 'Ventas Tecnologia Joyeria', 'http://demo.mysticthemes.com/cs-cart/Alpha/res1/', 0),
(8, '2015-06-05', 'Ventas Tecnologia Joyeria', 'http://demo.mysticthemes.com/cs-cart/Alpha/basic_v2/', 0),
(9, '2015-06-05', 'Ventas Tecnologia Joyeria', 'http://demo.mysticthemes.com/cs-cart/Alpha/res2/', 0),
(10, '2015-06-05', 'Ventas Tecnologia Joyeria', 'http://demo.mysticthemes.com/cs-cart/Alpha/basic_v3/', 0),
(11, '2015-06-05', 'Ventas Tecnologia Joyeria', 'http://demo.mysticthemes.com/cs-cart/Alpha/res3/', 0),
(12, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/joomla_49096/', 0),
(13, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/wt_49530/', 0),
(14, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/wt_49565/', 0),
(15, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/joomla_52305/', 0),
(16, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/wt_50505/', 0),
(17, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/joomla_46033/', 0),
(18, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/wt_52650/', 0),
(19, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/wt_52291/', 0),
(20, '2015-06-10', 'Restaurante', 'http://livedemo00.template-help.com/woocommerce_52488/', 0),
(21, '2015-06-10', 'Restaurante', 'http://www.redfactory.nl/themes/therestaurant/', 0),
(22, '2015-06-10', 'Dentista', 'http://livedemo00.template-help.com/wordpress_52437/', 0),
(23, '2015-06-10', '', 'http://themes.suggelab.com/dynamic-frontend/', 0),
(24, '2015-06-10', 'Bocetos', 'http://bootstrapbay.com/', 0),
(25, '2015-06-10', 'Bocetos', 'http://templatemonster.com', 0),
(26, '2015-06-10', 'Bocetos', 'https://wrapbootstrap.com/', 0),
(27, '2015-06-10', 'Bocetos', 'http://themeforest.net/', 0),
(28, '2015-06-11', 'Transportistas Agencias', 'http://livedemo00.template-help.com/wt_53673/', 0),
(29, '2015-06-19', 'Restaurante', 'http://livedemo00.template-help.com/wt_53673/', 0),
(30, '2015-06-19', 'Agencia Aduanal', 'asd', 0),
(31, '2015-06-26', 'Restaurantes', 'http://livedemo00.template-help.com/wt_52680/', 0),
(32, '2015-06-26', 'Restaurantes', 'http://livedemo00.template-help.com/drupal_53752/', 0),
(33, '2015-06-26', 'Restaurantes', 'http://livedemo00.template-help.com/drupal_53895/', 0),
(34, '2015-06-26', 'Restaurantes', 'http://livedemo00.template-help.com/landing_54662/', 0),
(35, '2015-06-26', 'Restaurantes', 'http://livedemo00.template-help.com/wordpress_54733/', 0),
(36, '2015-07-01', 'Construccion', 'http://demo2.jlvextension.com/built/', 0),
(37, '2015-07-03', 'Pisos', 'http://livedemo00.template-help.com/wt_54725/', 0),
(38, '2016-03-17', 'transportistas', 'http://www.templatemonster.com/es/demo/55178.html', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rfc` varchar(100) NOT NULL,
  `privado` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `fecha`, `categoria`, `nombre`, `direccion`, `telefono`, `contacto`, `email`, `rfc`, `privado`) VALUES
(1, '2015-06-01', 'Dentista', 'DentoLife', '', '8671546800', 'Dr. Juan Flores', 'drjmfores@yahoo.com.mx', '', ''),
(2, '2015-06-01', 'Seguros', 'Seguros AP', '', '(867)714-33-13 y 715-21-66 ', 'Lic. Jesus Adolfo Perez GutiÃ©rrez', 'seguros.perez@hotmail.com', '', ''),
(3, '2015-06-01', 'Publicidad', 'Graphix', 'Av. Guerrero 1839', '867 7147486', 'Ricardo Juarez', 'impresiones@gpx.mx', '', 'neubox\r\ngpx_impresiones@yahoo.com.mx\r\nMarizruth25 - \r\nu203151\r\n@HWn4z3{_Dr\r\nFTP: NmrA*T=ePlNE'),
(4, '2015-06-01', 'Agencia Aduanal', 'BBi International FDA', '', '(956) 723-4826', 'Bo Burge', 'bo@boburgeinc.com', '', ''),
(5, '2015-06-02', 'Agencia Aduanal', 'CONSULTAS ADUANALES DE NUEVO LAREDO S.A DE C.V.', 'independencia 3335', '867 2010050, oficina: 7123448', 'Roberto Carlos Ovalle Martinez', 'carlosovalle@consultasaduanales.com.mx', 'CAN121107L30', 'Username: zecagvpu\r\nPassword: 463rYbtZ0f\r\nControl Panel URL: https://xwdz12.dailyrazor.com:8443\r\n\r\nuLsh9%37'),
(6, '2015-06-04', 'Boutique', 'Cosmeticos Plaza de la mujer', 'Culiacan', '', '', '', '', 'Datos de servidor: \r\ncosmeticosplazadelamujer.com.mx:2083\r\ncosmeti8\r\nqpbF@8KB9y\r\n\r\ndatabase:\r\ncosmeti8_panel\r\nTZ&F?cd&i)]P'),
(7, '2015-06-05', '', 'Forbidden 403', 'Peru 3502', '', '', '', '', 'ftp.nuevolaredo.f403.mx\r\nxzited@nuevolaredo.f403.mx\r\nftp4cc3s.D\r\n\r\n\r\nrs -> eL65zXqYNZ8M'),
(8, '2015-06-11', 'Transportistas', 'Alfa Transpo', '', '', '', 'Clientes@alfatranspo.com', '', ''),
(9, '2015-06-17', 'Bienes Raices', 'A.M.P.I.', 'Guatemala Y Ocampo', '', 'Laura Valdez', 'lvbienesraices@hotmail.com', '', ''),
(10, '2015-06-29', 'Importaciones', 'Guia Logistica', '', '8677120507', 'Alfredo Gomeztagle', 'importaciones@guialogistica.com.mx', '', '75115933\r\nGomeztagle1977'),
(11, '2015-06-30', 'Fotografia', 'Angel Color', '', '', '', '', '', ''),
(12, '2015-07-15', 'Albercas', 'Cimarron', '', '7180619', 'Oscar Cipriano', 'deportivocimarron@outlook.com', '', ''),
(13, '2015-07-24', 'Medios Comunicacion', 'Frontera Times Noticias', '', '8671458784', '', 'arturobox78@hotmail.com', '', ''),
(14, '2015-07-24', 'Logistica', 'Maquila Logistics SA DE CV', 'Pino Suarez 3310 Col Centro 88000', '', 'Jorge Tello', 'trafico@maqlogis.com', 'MLO1204301EA', ''),
(15, '2015-07-29', 'Purificadora', 'Bertha Otero', 'Circuito jesus gonzales bastian 229 Norte', '8671763327', 'Bertha Otero', 'josue_rangel-otero@hotmail.com', '', ''),
(16, '2015-08-04', 'Logistica', 'RUSH-BOX', 'PO BOX 450301, Laredo Tx 78045', '9564892390', 'Ramiro de la Garza', 'ramiro@rush-box.com', '', '12114398\r\nChatito13\r\n\r\nrushbo\r\n\r\n--- dalko ---\r\nhttp://dalkotms.com/dalkotms.aspx\r\nRUSHBUSER\r\nRUSHBUSER3101\r\n-- \r\n\r\nhttp://www.rrdonnelley.com/dlsworldwide/\r\nrgarza1\r\nwlccvcnh'),
(17, '2015-08-20', 'Restaurantes', 'Taco Lonche', 'Laredo TExas', '+5218713001690', '', '', '', ''),
(18, '2015-08-20', 'Abogados', 'Villarreal Hernandez Abogados', '', '8671296744', 'Nereo Villarreal', 'nereo_villarreal@hotmail.com', '', ''),
(19, '2016-02-09', 'Logistica', 'Her-sar import and logistics', '', '867 129 9517', 'Luis herrera', 'lherrera71@hotmail.com', '', ''),
(20, '2016-02-09', 'Noticias', 'Frontera al Dia', '', '867 729 9463', 'Ricardo SaldaÃ±a', '', '', ''),
(21, '2016-02-19', '', 'CTM', '', '', 'Juanes', '', '', ''),
(22, '2016-02-22', 'Opticas', 'Opticas Bocanegra', 'Guerrero 1652', '8671964548 y 867 129 9582', 'Juan Bocanegra', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comensolicitud`
--

CREATE TABLE IF NOT EXISTS `comensolicitud` (
  `idsolicitud` int(11) DEFAULT NULL,
  `idcomentario` int(11) DEFAULT NULL,
  `idcomentador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `clienteId` int(255) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `fechaCaptura` date NOT NULL,
  `fechaInicio` date NOT NULL,
  `servicio` text NOT NULL,
  `precioMes` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos_pagos`
--

CREATE TABLE IF NOT EXISTS `contratos_pagos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `contratoId` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `precio` varchar(100) NOT NULL,
  `pago` varchar(100) NOT NULL,
  `fechaP` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `usuarioId` int(255) NOT NULL,
  `clienteId` int(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE IF NOT EXISTS `gastos` (
  `idgastos` int(255) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `concepto` text NOT NULL,
  `precio` varchar(100) NOT NULL,
  PRIMARY KEY (`idgastos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`idgastos`, `fecha`, `concepto`, `precio`) VALUES
(1, '2015-06-05', 'Pizarron parte de programadores', '1250'),
(2, '2015-06-05', 'Fabricacion de escritorio numero 1 para programadores', '2285'),
(3, '2015-06-05', 'comida', '172'),
(4, '2015-06-05', 'Marcadores', '172'),
(5, '2015-06-15', 'muebles mobil art ( 2 sillones y mesita )', '7738'),
(6, '2015-06-15', 'Luz mes de mayo', '900'),
(7, '2015-06-24', 'Pagar carpintero mueble de atras ', '1700'),
(8, '2015-06-29', 'tintas de impresora', '370'),
(9, '2015-06-29', 'escritorio nuevo mas 2 sillas ', '11746'),
(10, '2015-07-13', 'Luz de junio', '1614'),
(11, '2015-07-16', 'segundo escritorio con el carpintero', '2500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `idpagos` int(255) NOT NULL AUTO_INCREMENT,
  `idventa` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text NOT NULL,
  `pago` varchar(200) NOT NULL,
  PRIMARY KEY (`idpagos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`idpagos`, `idventa`, `fecha`, `descripcion`, `pago`) VALUES
(1, 4, '2015-07-14', 'anticipo', '1740'),
(2, 4, '2015-07-14', 'pago final', '1740'),
(3, 3, '2015-07-14', 'anticipo', '3000'),
(4, 3, '2015-07-14', 'finalizacion', '3000'),
(6, 9, '2015-07-13', 'Anticipo', '3500'),
(7, 8, '2015-07-13', 'Anticipo', '5000'),
(8, 7, '2015-07-13', 'Anticipo', '7000'),
(9, 2, '2015-07-13', 'Pago completo', '8000'),
(10, 5, '2015-07-13', 'Anticipo', '2500'),
(11, 6, '2015-07-13', 'Anticipo', '5000'),
(12, 13, '2015-07-24', 'Anticipo', '3000'),
(13, 14, '2015-07-24', 'Anticipo', '5000'),
(14, 15, '2015-07-29', 'anticipo', '3500'),
(15, 16, '2015-08-04', '5800', 'Completo'),
(16, 16, '2015-08-20', 'Liquidacion', '5800'),
(17, 17, '2015-08-20', 'Anticipo', '3000'),
(18, 18, '2015-08-20', 'Anticipo', '3000'),
(19, 19, '2015-08-26', 'anticipo', '12500'),
(20, 7, '2015-11-27', 'liquidacion', '7000'),
(21, 12, '2015-11-27', 'liquidado', '5000'),
(22, 11, '2015-11-27', 'liquidado', '1500'),
(23, 10, '2015-11-27', 'liquidado', '2500'),
(24, 5, '2015-11-27', 'liquidado', '2500'),
(25, 13, '2015-11-27', 'liquidado', '3000'),
(26, 19, '2016-02-02', 'liquidacion', '12500'),
(27, 20, '2016-02-19', 'anticipo', '4000'),
(28, 21, '2016-02-22', 'anticipo', '2000'),
(29, 21, '2016-02-22', 'abono', '1500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `idSolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `Empresa` varchar(80) DEFAULT NULL,
  `Reporto` varchar(25) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Problema` varchar(900) DEFAULT NULL,
  `StatusPeticion` varchar(25) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `fechaFinal` date DEFAULT NULL,
  `idcreadopor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSolicitud`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`idSolicitud`, `Empresa`, `Reporto`, `Fecha`, `Problema`, `StatusPeticion`, `email`, `fechaFinal`, `idcreadopor`) VALUES
(17, 'DentoLife', 'uncliente', '2016-03-24', 'un problem', 'Pendiente', 'un correo', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `idtareas` int(255) NOT NULL AUTO_INCREMENT,
  `idcreado` int(255) NOT NULL,
  `idasignado` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `tarea` text NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fechafinal` date NOT NULL,
  `archivo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idtareas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`idtareas`, `idcreado`, `idasignado`, `fecha`, `tarea`, `estado`, `fechafinal`, `archivo`) VALUES
(9, 1, 1, '2016-02-19', 'cambios de roy en inmujer\r\n\r\nacomodar los archivos por orden sorteable', 'Pendiente', '0000-00-00', NULL),
(10, 1, 8, '2016-02-19', 'hay una manera de poder acomodar las tareas por orden uno arrastrando el contenido, en el sistema de notebook en este enlace: http://flatfull.com/themes/note/list.html aqui puedes ver como se hace, lo que tienes que hacer es buscar que .js y que .css hacen esa funcion y activarla.', 'Pendiente', '0000-00-00', NULL),
(11, 1, 8, '2016-02-19', 'que el sistema de notas sea parecido a este: http://flatfull.com/themes/todo/notes.html#notes/2', 'Pendiente', '0000-00-00', NULL),
(13, 1, 8, '2016-02-19', 'http://f403server.ddns.net/admin.php?m=solicitudesEditar&id=11\r\n- el boton eliminar ponle el icono de la basurita\r\n- que sea un btn-md en vez de btn-sm\r\n- los campos estan descuadrados, que todos se vean en un renglon los label\r\n- el boton de cancelar me lleva a clientes y no a tickets\r\n- en tickets agregar tienes el nombre de la empresa como input, deberia ser como select \r\ny que se quede seleccionado el que elegi, por si en editar me equivoque en el nombre de\r\nla empresa.\r\n\r\n\r\nhttp://f403server.ddns.net/admin.php?m=soporteAgregar\r\n- los campos estan descuadrados\r\n- boton de cancelar lleva a clientes\r\n- que los campos label esten en un solo renglon\r\n- los botones aceptar ycancelar que sean btn-md \r\n', 'Finalizado', '2016-02-22', NULL),
(14, 1, 8, '2016-02-19', 'en el modulo de tareas, cuando alguien me asigna una tarea a mi, necesito poder ver quien me la asigno, cuando veo la tarea.... que diga Creada por: y que salga el nombre de quien la creo.', 'Finalizado', '2016-02-22', NULL),
(15, 1, 4, '2016-02-19', 'para el calendario puedes clonar cualqueira de estos dos...\r\n\r\nhttp://flatfull.com/themes/note/fullcalendar.html\r\nhttp://flatfull.com/themes/todo/calendar.html\r\n\r\nsu usas el de note pues automaticamente se vera, solo busca en los .js como se inicializa y como se le asignan eventos a las fechas, debe de poder hacer lo siguiente:\r\n\r\n- crear eventos para mi o yo asignar eventos para alguien mas\r\n- fecha de inicio y fecha de finalizacion ( para eventos que sean de tal dia a tal dia )\r\n- puedo ver los eventos que se me asignaron a mi o eventos que asigne a alguna persona\r\n- poder dar click al evento y ver ifnormacion del evento\r\n- los datos del formulario es: \r\nfecha inicio\r\nfecha final\r\ntitulo\r\ndescripcion\r\nasignado a: ', 'Pendiente', '0000-00-00', NULL),
(16, 10, 1, '2016-02-19', 'RelaciÃ³n de opticas', 'Finalizado', '2016-02-19', NULL),
(17, 1, 8, '2016-02-19', 'en el modulo de tareas poder adjuntar un archivo o varios. \r\n\r\nPara que ? para si le digo a alguien haz tal pagina aqui te va la informacion y la cargo\r\n\r\nCUIDADO CON LA SEGURIDAD, NO DEBE PERMITIR ARCHIVOS PHP o archivos executables...', 'Finalizado', '2016-02-22', NULL),
(18, 1, 1, '2016-02-21', 'sistema de la kiko\r\n\r\nLA POTOSINA \r\n	- a la hora de agregar el consolidado. falto agregar el nombre del cliente.\r\n	- algunas guias cuentan con doble destinatario, dos telefonos, dos cp\r\n	- base de datos de ocurre, si la guia lleva ocurre que se le indique cual \r\n	es a donde ira.\r\n	- que dando click se pueda ir a rastrear la guia CURL\r\n	* cuando se carguen el consolidado se busca la informacion del cliente para envios\r\n	anteriores para rellenar la informacion.\r\n	- los pesos todos sean en kilos.\r\n\r\n\r\n	poder imprimir las guias por rango de pesos, o individuales\r\n		- 3kg gramos hasta 24kg guia de cinco mexicana\r\n		- 25kg a 49kg guia de 25 mexicana\r\n		- .1 gramos hasta 2.99kg \r\n		- 50kg hasta 64kg \r\n		- 65kg <  \r\n\r\n	- guias de envimex se manejan desde 1kg hasta 15kg los que dicen envimex\r\n	- guia de 50 envimex desde 40kg hasta 49kg, aveces desde 38 o 39kg \r\n\r\n$ 60 usd  y 500 pesos', 'Pendiente', '0000-00-00', NULL),
(19, 1, 1, '2016-02-22', 'cambios de imjuvenl\r\n\r\nsubir cambios de juvechamba\r\npara juve chambas \r\nhttp://thevectorlab.net/metrolab/form_wizard.html', 'Pendiente', '0000-00-00', NULL),
(21, 1, 1, '2016-02-22', 'esperar informacion de luis herrera her-sar', 'Pendiente', '0000-00-00', NULL),
(22, 1, 8, '2016-02-22', '- agregar una respuesta al modulo de tareas del sistema interno \r\n- agregar fecha de entrega de la tarea', 'Finalizado', '2016-02-22', NULL),
(23, 1, 8, '2016-02-22', '- agregar una respuesta al modulo de tareas del sistema interno \r\n- que cuando entres a tareas solo salgan las pendientes, las finalizadas que salgan solo cuando le das click a ver finalizadas', 'Pendiente', '0000-00-00', NULL),
(24, 1, 1, '2016-02-22', 'Cotizaciones pendientes:\r\n- refaccionaria aleman\r\n- laura pendiente respuesta\r\n- travel city', 'Pendiente', '0000-00-00', NULL),
(25, 1, 1, '2016-02-22', 'routing logistics sistema de captura', 'Pendiente', '0000-00-00', NULL),
(26, 1, 1, '2016-02-22', 'cambios de fronteraaldia', 'Pendiente', '0000-00-00', NULL),
(27, 1, 1, '2016-02-22', 'graphix recordar martin landa', 'Pendiente', '0000-00-00', NULL),
(28, 1, 1, '2016-02-22', 'preguntar a ramiro si no tiene algun cliente con el que me pueda acercar', 'Pendiente', '0000-00-00', NULL),
(29, 1, 1, '2016-02-22', 'ver a teza para contrato y nuevo sistema y nueva pagina web', 'Pendiente', '0000-00-00', NULL),
(30, 1, 1, '2016-02-22', 'firmar contrato inmujernl', 'Pendiente', '0000-00-00', NULL),
(31, 1, 8, '2016-02-22', 'sistema interno\r\n\r\n- los administrador deben de poder ver las tareas que tiene asignadas cada personas\r\n', 'Finalizado', '2016-02-24', NULL),
(32, 1, 10, '2016-02-22', 'necesitamos un nuevo nombre para la empresa, necesito algo de una sola palabra, algo que se quede bien grabado en los clientes...\r\n\r\nAsi como "google" su nombre esta bien pensado, cambiaron el nombre por "alphabet" que tambien esta demasiado bien, una palabra, corto pero dice mucho... \r\n\r\nLa diferencia de nosotros a google era que nosotros haciamos software para los negocios, ahora ya no haremos tanto eso, nos enfocaremos a servicios, servicios que podamos cobrar mensualmente o diarios. Entonces necesitamos olvidarnos de f403 para usar otro nombre...\r\n\r\nGoogle tiene gmail, drive, su buscador y demasiadas otras cosas, nosotros haremos algo parecido... \r\n\r\nPara hacerle la competencia a google pero de nuevo laredo y a facebook usaremos "check city" que ya llevo avanzado el proyecto, esta semana debo de tenerlo casi listo para poder empezar a usarlo. Con eso y con otra cosa que me traigo entre manos...\r\n\r\nHaber que nombre se te ocurre, URGE para darlo de alta, mandar diseÃ±ar logo y comenzar de nuevo.\r\n', 'Pendiente', '0000-00-00', NULL),
(41, 1, 8, '2016-02-23', 'ahora que aplicaste el cambio de los archivos no me gusto como quedo... \r\n\r\nsi vas a la parte de agregar tarea donde dice asignar y subir archivos esta uno alado del otro, manten el mismo formato para que se vea parejo\r\nque quede asi:\r\nTarea:\r\nAsignar a:\r\nSubir Archivo:\r\n\r\nTambien en el listado no pongas la fecha de finalizacion y si hay un archivo... \r\n\r\nEs mejor que alado del titulo de la tarea salga un icono que tiene algo adjunto como por ejemplo:\r\n\r\n<i class="fa fa-clip"></i> tarea para wence... \r\n\r\nasi se ve mas estetico y da a entender lo mismo y cuando entras a ver la tarea pues ahi si que te salga para descargar el archivo.\r\n\r\nY la fecha de finalizacion me interesa verla cuando se finalizo, cuadno diga estado: finalizado que me salga abajo la fecha, creo que eso ya lo tenia puesto...', 'Finalizado', '2016-02-29', NULL),
(42, 1, 1, '2016-02-23', 'sistema de seguros...\r\n\r\n- conseguir clientes\r\n- pagina web\r\n- usuario y pass para acceso a sus clientes\r\n- app ?\r\n', 'Pendiente', '0000-00-00', NULL),
(43, 1, 4, '2016-02-23', 'necesito un navegador del tamaÃ±o de la pantalla de un celular que pueda cargar una web en SWIFT para iphone...\r\nla primera version de check city la lanzaremos solo para desplegar cosas entonces no necesitamos mucho, solo cargar la url... ', 'Pendiente', '0000-00-00', NULL),
(47, 6, 1, '2016-02-23', 'CotizaciÃ³n de pagina web y/o  sistema para CBTA No. 50\r\nLa escuela necesita una pagina y/o un tipo sistema o blog, para la interacciÃ³n de alumnos y maestros.\r\nAnÃ¡huac NL\r\n\r\n', 'Pendiente', '0000-00-00', NULL),
(48, 1, 4, '2016-03-16', 'sistema interno, modulo de contratos para saber quien nos renueva nuestros productos\r\neste punto guardalo\r\ncuando terminemos lo del api sigue eso\r\nseguido\r\nlo del api de los tickets', 'Pendiente', '0000-00-00', NULL),
(49, 6, 4, '2016-03-17', 'filtrar los bocetos', 'Pendiente', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo`, `email`, `password`, `nombre`) VALUES
(1, 'Administrador', 'rodolfo.resendez@f403.mx', 'admin', 'Rodolfo Resendez'),
(2, 'Usuario', 'usuario@f403.mx', 'usuario', 'Usuario'),
(4, 'Programador', 'juanm._94@hotmail.com', 'jahumadaF1', 'Juan Ahumada'),
(5, 'Programador', 'luis.dpc@outlook.com', 'ldelapenaF2', 'Luis de la PeÃ±a'),
(6, 'Programador', 'jdanielparra2@icloud.com', 'dparraF3', 'Daniel Parra'),
(7, 'Programador', 'ridley_ninja28@hotmail.com', 'jtononeF4', 'Jorge Tonone'),
(8, 'Programador', 'ram_mtz_w93@hotmail.com', 'wrm210593', 'Wenceslao Ramirez'),
(10, 'Administrador', 'lindanava03@gmail.com', 'lindanava03', 'Linda Nava');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idventas` int(255) NOT NULL AUTO_INCREMENT,
  `usuarioId` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `clienteId` int(255) NOT NULL,
  `concepto` text NOT NULL,
  `precio` varchar(100) NOT NULL,
  `anticipo` varchar(100) NOT NULL,
  PRIMARY KEY (`idventas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idventas`, `usuarioId`, `fecha`, `clienteId`, `concepto`, `precio`, `anticipo`) VALUES
(2, 1, '2015-05-01', 4, 'Desarrollo de pagina web + sistema de newsletter', '8000.00', '8000.00'),
(3, 1, '2015-05-27', 1, 'Pagina web + dominio anual', '6000.00', '3000.00'),
(4, 1, '2015-06-03', 5, 'Actualizacion de pagina web', '3480', ''),
(5, 1, '2015-06-03', 3, 'Sistema de administracion ', '5000.00', '2500.00'),
(6, 1, '2015-06-04', 2, 'Sistema de seguros', '10000.00', '5000.00'),
(7, 1, '2015-06-17', 9, 'Pagina Web + Sistema de administracion personalizado', '14,000', '7000'),
(8, 1, '2015-06-29', 10, '2 paginas web y un sistema', '10,500', '5000'),
(9, 1, '2015-06-30', 11, 'Sistema de administracion ', '7000', '3500'),
(10, 1, '2015-07-13', 3, 'Pagina Web ( rediseÃ±o )', '2500', ''),
(11, 1, '2015-07-13', 5, 'Area de acceso a clientes', '1500', ''),
(12, 1, '2015-07-15', 12, 'Pagina Web + Acceso Clientes', '5000', ''),
(13, 1, '2015-07-20', 13, 'Pagina Web + Dominio anual', '6000', ''),
(14, 1, '2015-07-22', 14, 'Sistema de GPS', '10000', ''),
(15, 1, '2015-07-29', 15, 'Sistema de agua ', '7000', ''),
(16, 1, '2015-08-04', 16, 'Pagina web + panel de control', '5800.00', ''),
(17, 1, '2015-08-18', 17, 'Sistema de control de restaurante', '6000', ''),
(18, 1, '2015-08-20', 18, 'Sistema Adminsitrativo', '6500', ''),
(19, 1, '2015-08-26', 16, 'sistema de fedex', '25000', ''),
(20, 1, '2016-02-19', 21, 'sistema de captura de personal', '6000', ''),
(21, 1, '2016-02-22', 22, 'Sistema administrativo', '7000', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
