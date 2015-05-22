-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-05-2015 a las 22:03:10
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vodmebd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `producto_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `proveedor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_productos`
--

CREATE TABLE IF NOT EXISTS `categoria_productos` (
  `cod_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `categoria_productos`
--

INSERT INTO `categoria_productos` (`cod_categoria`, `categoria`, `imagen`, `estado`) VALUES
(1, 'Iluminacion y Bombillas LED', 'a.jpg', 'A'),
(2, 'Iluminacion Interior', 'Bajos-en-serio_7462_image.jpg', 'A'),
(3, 'Iluminacion Exterior', '51i6SKR0b9L.jpg', 'A'),
(5, 'Proteccion y Control', 'MeinlPercussionMTA1SNT-M.jpg', 'A'),
(6, 'Armarios y Cuadros electricos', 'YamahaFlauta.jpg', 'A'),
(7, 'Tuberia y canalizacion', 'BehringerMicrofono.jpg', 'A'),
(8, 'Canaletas y Bandejas', 'afinador.jpg', 'A'),
(9, 'Material Pequeño', 'amplificador.jpg', 'A'),
(10, 'Herramientas', NULL, 'A'),
(11, 'Material Electrico Vario', NULL, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(250) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL,
  `empresa` varchar(250) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(250) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nombres`, `direccion`, `telefono`, `email`, `clave`, `empresa`, `fecha_nacimiento`, `sexo`, `estado`) VALUES
(1, 'Anuhar Eid Sugata', 'Calle del Silencio', '992782013', 'anuhar_eid07@hotmail.com', '123456', 'blick', '2014-10-03', 'Masculino', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE IF NOT EXISTS `contenidos` (
  `cod_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_contenido` varchar(250) DEFAULT NULL,
  `contenido` text,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `cod_foto` int(11) NOT NULL AUTO_INCREMENT,
  `cod_galeria` int(11) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_foto`),
  KEY `foto-galer` (`cod_galeria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_fotos`
--

CREATE TABLE IF NOT EXISTS `galeria_fotos` (
  `cod_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_galeria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_productos`
--

CREATE TABLE IF NOT EXISTS `galeria_productos` (
  `cod_galeria_producto` int(11) NOT NULL AUTO_INCREMENT,
  `cod_producto` int(11) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_galeria_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `galeria_productos`
--

INSERT INTO `galeria_productos` (`cod_galeria_producto`, `cod_producto`, `imagen`, `estado`) VALUES
(1, 4, '1eranio.jpg', 'A'),
(2, 4, 'tyaaa.jpg', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `group_permission`
--

CREATE TABLE IF NOT EXISTS `group_permission` (
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `allowed` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `cod_orden` varchar(250) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `fechapedido` datetime DEFAULT NULL,
  `observaciones` text,
  `bruto` double DEFAULT NULL,
  `igv` double DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`cod_orden`, `cod_cliente`, `fechapedido`, `observaciones`, `bruto`, `igv`, `total`) VALUES
('', 0, '2015-05-11 03:05:55', '', 0, 0, 0),
('', 0, '2015-05-11 03:07:22', '3214231', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalle`
--

CREATE TABLE IF NOT EXISTS `pedido_detalle` (
  `cod_orden` varchar(250) DEFAULT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `cod_producto` int(11) NOT NULL AUTO_INCREMENT,
  `cod_categoria` int(11) DEFAULT NULL,
  `cod_sub_categoria` int(11) DEFAULT NULL,
  `nom_producto` varchar(250) DEFAULT NULL,
  `descripcion` text,
  `oferta` varchar(2) DEFAULT NULL,
  `precio_oferta` double DEFAULT NULL,
  `precio_normal` double DEFAULT NULL,
  `novedad` varchar(20) DEFAULT NULL,
  `fecha_ing` date DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `ficha_tecnica` varchar(250) DEFAULT NULL,
  `banner_grande` varchar(250) DEFAULT NULL,
  `banner_chico` varchar(250) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_producto`),
  KEY `prod-subcate` (`cod_sub_categoria`),
  KEY `prod-cate` (`cod_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `cod_categoria`, `cod_sub_categoria`, `nom_producto`, `descripcion`, `oferta`, `precio_oferta`, `precio_normal`, `novedad`, `fecha_ing`, `imagen`, `ficha_tecnica`, `banner_grande`, `banner_chico`, `video`, `estado`) VALUES
(1, 1, 1, 'Yamaha', '', 'SI', 450, 500, 'SI', '0000-00-00', 'a.jpg', '', 'Bajos-en-serio_7462_image.jpg', '', '', 'A'),
(2, 6, 4, 'BehringerULTRAVOICE', '', 'SI', 64, 70, 'SI', '0000-00-00', 'BehringerMicrofono.jpg', '', 'BehringerMicrofono.jpg', '', '', 'A'),
(3, 6, 7, 'Bambo', '', 'SI', 56.9, 60, 'SI', '0000-00-00', 'Bambooquenaflute$39-49.jpg', '', 'Bambooquenaflute$39-49.jpg', '', '', 'A'),
(4, 7, 6, 'SonyOmnidirectional', '', 'SI', 21.5, 23, 'SI', '0000-00-00', 'SonyOmnidirectionalMicrophone$7-99.jpg', '', '', '', '', 'A'),
(5, 6, 8, 'HisonicSignature', '', 'SI', 310.99, 350, 'SI', '0000-00-00', 'a.jpg', '', 'HisonicSignature$119-99.jpg', '', '', 'A'),
(6, 5, 9, 'HohnerKidsGlockenspiel', '', 'SI', 53.9, 55.5, 'SI', '0000-00-00', 'HohnerKidsGlockenspielSongbook$26-52.jpg', '', '500.jpg', '', '', 'A'),
(8, 1, 5, 'KramerAssault', '', 'SI', 699.9, 700.5, 'SI', '0000-00-00', 'KramerAssault$305-47.jpg', '', 'KramerAssault$305-47.jpg', '', '', 'A'),
(9, 1, 5, 'DeanGuitarsVMNT-AOD', '', 'no', 3, 3, 'SI', '0000-00-00', 'DeanGuitarsVMNT-AOD.jpg', '', 'DeanGuitarsVMNT-AOD.jpg', '', '', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_stock`
--

CREATE TABLE IF NOT EXISTS `producto_stock` (
  `cod_producto` int(11) NOT NULL,
  `tipo_movimiento` char(1) NOT NULL,
  `cantidad` int(11) NOT NULL,
  KEY `pro_prostock` (`cod_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_stock`
--

INSERT INTO `producto_stock` (`cod_producto`, `tipo_movimiento`, `cantidad`) VALUES
(3, 'E', 80),
(3, 'S', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `proveedor_id` int(11) NOT NULL AUTO_INCREMENT,
  `ruc` varchar(50) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` int(15) NOT NULL,
  PRIMARY KEY (`proveedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categoria_productos`
--

CREATE TABLE IF NOT EXISTS `sub_categoria_productos` (
  `cod_sub_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `cod_categoria` int(11) DEFAULT NULL,
  `subcategoria` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_sub_categoria`),
  KEY `subcate-cate` (`cod_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `sub_categoria_productos`
--

INSERT INTO `sub_categoria_productos` (`cod_sub_categoria`, `cod_categoria`, `subcategoria`, `imagen`, `estado`) VALUES
(1, 1, 'LUCES DE EMERGENCIA LED', 'luc_led.jpg', 'A'),
(2, 5, 'Cajon', 'MeinlPercussion$109-99.jpg', 'A'),
(3, 7, 'Microfonos Inalambricos', 'BehringerMicrofono.jpg', 'A'),
(4, 6, 'Flauta', 'YamahaFlauta.jpg', 'A'),
(5, 1, 'CAMPANAS INDUSTRIALES LED', 'cam_le.jpg', 'A'),
(6, 7, 'Alambricos', 'SonyOmnidirectionalMicrophone$7-99.jpg', 'A'),
(7, 6, 'Quena', 'Bambooquenaflute$39-49.jpg', 'A'),
(8, 6, 'Trompeta', 'HisonicSignature$119-99.jpg', 'A'),
(9, 5, 'Xilofono', 'HohnerKidsGlockenspielSongbook$26-52.jpg', 'A'),
(10, 5, 'Maracas', 'CannonUPMMLargeWoodMaracas$14-26.jpg', 'A'),
(11, 5, 'Timbales', 'GPPercussionLT156Timbale$10802.jpg', 'A'),
(12, 8, 'Afinadorres', 'FenderFSRFT-004Clip-On$8-99.jpg', 'A'),
(13, 8, 'Cuerda para Guitarra', 'ErnieBall.jpg', 'A'),
(14, 5, 'Conga', 'TunableWoodCongaNatural$37-52.jpg', 'A'),
(15, 2, 'LUCES DE EMERGENCIA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `remember_token` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `email`, `username`, `password`, `estado`, `remember_token`, `updated_at`, `group_id`, `created_at`) VALUES
(1, 'Gmarcorp', 'anuhar_eid07@hotmail.com', 'gmarcorp', '$2y$10$xlieMeESbCHzid0fzDq2XOuOlUVO5S8UruJ05v7dwUid.EYoQRGEi', 'A', '45CYZmX9XFIVFuSkhOwnkivS3WFgCHFt3CSRYK2QtvsVJqDvJ4UnDS8YW6l1', '2015-05-16 22:14:34', 1, '0000-00-00 00:00:00'),
(2, 'Abdul Sugata', 'anuhar_381@hotmail.com', 'sugata', '123456', 'A', 'U42ZjNkxosL8BvdaTaiTYWy385iXEgYtDjmxUD0Xrwel30xLg66Cmy6SC7NU', '2015-05-14 08:18:04', 1, '0000-00-00 00:00:00'),
(4, 'Christian Avalos Cristobal', 'xepher95@gmail.com', 'christianac', '$2y$10$pBH0VhNYAB12XYp1WFqwheK9b0ObX3GXjFGoB3Bx7OQJCETfoKE5C', 'A', 'xHFWofUS8XTkQU0VlphxQJotF4tpCR7gQlQ8jpEREyb5wLVGXZUmDOv3wUfR', '2015-05-21 15:45:23', 1, '2015-05-16 21:53:27');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `foto-galer` FOREIGN KEY (`cod_galeria`) REFERENCES `galeria_fotos` (`cod_galeria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `prod-cate` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria_productos` (`cod_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prod-subcate` FOREIGN KEY (`cod_sub_categoria`) REFERENCES `sub_categoria_productos` (`cod_sub_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_stock`
--
ALTER TABLE `producto_stock`
  ADD CONSTRAINT `pro_prostock` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sub_categoria_productos`
--
ALTER TABLE `sub_categoria_productos`
  ADD CONSTRAINT `subcate-cate` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria_productos` (`cod_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
