-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2014 a las 20:27:35
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comunick`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE IF NOT EXISTS `comunidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `administrador` int(11) NOT NULL,
  `fecha_ini` date NOT NULL,
  `descripcion` text NOT NULL,
  `descripcion_larga` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`id`, `nombre`, `administrador`, `fecha_ini`, `descripcion`, `descripcion_larga`) VALUES
(1, 'Rock Nacional', 1, '2007-02-13', 'Comunidad de aficionados amantes del rock nacional, somos muchos unete a nuestra comunidad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio. Pellentesque pharetra metus ut mauris sagittis facilisis. Etiam iaculis dui quis nibh suscipit, sit amet tincidunt metus cursus. Cras tincidunt imperdiet ligula sit amet fermentum. Nunc sit amet tempor purus, ac dignissim orci. Pellentesque consectetur fringilla eros in varius. Mauris magna nulla, cursus eget vulputate ut, egestas vitae lectus. Nullam egestas fermentum convallis. Donec ut pharetra erat.'),
(2, 'Tecno Bar', 1, '2010-06-02', 'Comunidad de aficionados amantes de la tecnologia, somos muchos unete a nuestra comunidad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio. Pellentesque pharetra metus ut mauris sagittis facilisis. Etiam iaculis dui quis nibh suscipit, sit amet tincidunt metus cursus. Cras tincidunt imperdiet ligula sit amet fermentum. Nunc sit amet tempor purus, ac dignissim orci. Pellentesque consectetur fringilla eros in varius. Mauris magna nulla, cursus eget vulputate ut, egestas vitae lectus. Nullam egestas fermentum convallis. Donec ut pharetra erat.'),
(3, 'Artes Visuales', 1, '2013-10-05', 'Comunidad de aficionados amantes de las artes visuales, somos muchos unete a nuestra comunidad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio. Pellentesque pharetra metus ut mauris sagittis facilisis. Etiam iaculis dui quis nibh suscipit, sit amet tincidunt metus cursus. Cras tincidunt imperdiet ligula sit amet fermentum. Nunc sit amet tempor purus, ac dignissim orci. Pellentesque consectetur fringilla eros in varius. Mauris magna nulla, cursus eget vulputate ut, egestas vitae lectus. Nullam egestas fermentum convallis. Donec ut pharetra erat.'),
(4, 'Compositores Musicales', 1, '2011-10-18', 'Comunidad de aficionados amantes de la composicion musical, somos muchos unete a nuestra comunidad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio. Pellentesque pharetra metus ut mauris sagittis facilisis. Etiam iaculis dui quis nibh suscipit, sit amet tincidunt metus cursus. Cras tincidunt imperdiet ligula sit amet fermentum. Nunc sit amet tempor purus, ac dignissim orci. Pellentesque consectetur fringilla eros in varius. Mauris magna nulla, cursus eget vulputate ut, egestas vitae lectus. Nullam egestas fermentum convallis. Donec ut pharetra erat.'),
(5, 'Cafe', 1, '2010-06-02', 'Comunidad de aficionados amantes del cafe, somos muchos unete a nuestra comunidad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio. Pellentesque pharetra metus ut mauris sagittis facilisis. Etiam iaculis dui quis nibh suscipit, sit amet tincidunt metus cursus. Cras tincidunt imperdiet ligula sit amet fermentum. Nunc sit amet tempor purus, ac dignissim orci. Pellentesque consectetur fringilla eros in varius. Mauris magna nulla, cursus eget vulputate ut, egestas vitae lectus. Nullam egestas fermentum convallis. Donec ut pharetra erat.'),
(6, 'Vicentico', 1, '2010-06-02', 'Comunidad de aficionados amantes de vicentico, somos muchos unete a nuestra comunidad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vehicula nisi, at vehicula orci semper vel. Nunc eget nulla tincidunt, tempor lectus at, sollicitudin odio. Pellentesque pharetra metus ut mauris sagittis facilisis. Etiam iaculis dui quis nibh suscipit, sit amet tincidunt metus cursus. Cras tincidunt imperdiet ligula sit amet fermentum. Nunc sit amet tempor purus, ac dignissim orci. Pellentesque consectetur fringilla eros in varius. Mauris magna nulla, cursus eget vulputate ut, egestas vitae lectus. Nullam egestas fermentum convallis. Donec ut pharetra erat.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comu_post_user`
--

CREATE TABLE IF NOT EXISTS `comu_post_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comunidad` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contenido` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fec_nac` date NOT NULL,
  `pais` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  `estado` text NOT NULL,
  `rol` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_comunidad`
--

CREATE TABLE IF NOT EXISTS `usuario_comunidad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `comunidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
