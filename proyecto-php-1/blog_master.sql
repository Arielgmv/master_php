-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-04-2021 a las 19:44:36
-- Versión del servidor: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Acción'),
(2, 'Rol'),
(3, 'Deportes'),
(4, 'religion'),
(6, 'Terror'),
(7, 'Romance'),
(8, 'test'),
(9, 'otro_test'),
(10, 'otro_test_nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(2, 1, 2, 'Review de LOL Online', 'Todo sobre LOL', '2019-08-23'),
(3, 1, 3, 'Nuevos jugadores de FIFA 2019', 'Review de FIFA 2019', '2019-08-23'),
(5, 2, 1, 'Novedades de Assasins', 'Review de Assasins', '2019-08-23'),
(6, 2, 2, 'Review de WOW Online', 'Todo sobre WOW', '2019-08-23'),
(7, 2, 3, 'Nuevos jugadores de PES 2019', 'Review de PES 2019', '2019-08-23'),
(8, 3, 1, 'Novedades de Call od Duty Online', 'Review de Call od Duty', '2019-08-23'),
(9, 3, 2, 'Review de Fortnite Online', 'Todo sobre Fortnite', '2019-08-23'),
(10, 3, 3, 'Nuevos jugadores de Formula 1 2020', 'Review de Formula 1 2020', '2019-08-23'),
(11, 2, 1, 'fsadfsadfsdaf', 'asdfasdfsdaf', '2019-08-23'),
(12, 2, 3, 'cfbhfghdrtyrt54rtyrt', 't34te4rfgdfcxv', '2019-08-23'),
(13, 2, 2, 'prueba entrada', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-08-26'),
(14, 2, 4, 'prueba 8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-08-26'),
(17, 5, 4, '123456', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-09-05'),
(18, 13, 6, 'Novedades de Helloween', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-23'),
(19, 34, 1, 'asdasd', 'asdasdasd', '2021-04-04'),
(20, 34, 8, 'nuevo juego 1', 'nuevo juego 1', '2021-04-04'),
(21, 34, 4, 'test 10', 'test10 añsdfjkñasd ñkasdlñfkasñdlkf ñkñkf añsdkfñkfa ñkñkñkfas ñkñk ñkñksdfasd ñkñksdf', '2021-04-05'),
(22, 34, 1, 'lkajdlkj', 'lkjljklkj', '2021-04-05'),
(23, 34, 1, 'lkajdlkj', 'lkjljklkj', '2021-04-05'),
(24, 34, 10, 'ariel', 'ariel', '2021-04-05');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `entradas_con_nombres`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `entradas_con_nombres` (
`id` int(255)
,`Nombre Usuario` varchar(100)
,`Nombre Categoría` varchar(100)
,`titulo` varchar(255)
,`descripcion` mediumtext
,`fecha` date
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(1, 'Ariel', 'Munoz', 'ariel.munoz.villegas@gmail.com', '$2y$04$2frp.yhk0RKcYM.EP4YfZeBh2HLqpodJSqV29S4QsQpZtiXGIMZf6', '2019-07-15'),
(2, 'holas', 'holas', 'holas@gmail.com', '$2y$04$CE3FGhS6bxqWpql5eqC3bucI1XWcEPcpRPGAFOYfPFUo.xqHEpsLO', '2019-08-23'),
(3, 'ana', 'garcia', 'ana@gmail.com', '$2y$04$5s8Hn0EwHUOakP6o8CfGiu6jPWhHp73LkP7gs2T1lVxk1buVVOXtW', '2019-08-23'),
(4, 'hola', 'hola', 'holahola@gmail.com', '$2y$04$ar9iZJ72wRZOGBqebsspUuJR25g/IRaWrmW4vqel91FcooteNnS9e', '2019-08-27'),
(5, 'hola', NULL, 'hola@gmail.com', '$2y$04$Kqoz5u9ExYjwcUfdGf1BruA8WFUi3EDmTzi6EVKAUbG6R90hOgmx2', '2018-09-03'),
(6, 'Kevin', 'Roldan', 'kevin@kevin.com', '$2y$04$jr4SrEh6McEl2qc/0DVtt.BaVD5dk7BMyE.3qBJinuJPkPIfwBcOO', '2020-09-24'),
(7, 'test', 'test', 'test@test.com', '$2y$04$nqr54vlJXfV7/h2jn96saOt0IYx7oJfTwYZ2Lb19g9vqp.s34MoL2', '2020-09-24'),
(8, 'test\"', 'test', 'test1@gmail.com', '$2y$04$oYHdXRMuxu2zgWSGCs2O3.f7HyXqfKR/mAXtEvO/METYEdFQL3mCi', '2020-09-24'),
(9, 'test\'', 'test\"', 'test@yahoo.com', '$2y$04$OadLIt9EaSPsOEgcbh679.XD1MKPIv6G/QIh3hmJMBQDo/ukjBmji', '2020-09-24'),
(11, 'Ariel\"', 'Muñoz Villegas \'', 'ariel@gmail.com', '$2y$04$I0btZA/cW3ej1Smiqtgd1eUNJjn95lJ5fptcO2SAUKLB7nWl148EC', '2020-09-24'),
(13, 'server\'', 'server\"', 'server@gmail.com', '$2y$04$1bYKaEkNofcBlJLunW7J0evd0dkKyslLHCRZ9ziGXtYm7rikOVjm6', '2020-09-24'),
(14, 'Juan', 'Juan', 'juan@juan.com', '$2y$04$tlw1hqChMhJra5mPaO.aJu8gjExRlwmyO3N.b6HGvszefxGK70EfK', '2020-09-25'),
(15, 'Admin', 'Admin', 'admin@admin.com', 'admin', '2021-02-23'),
(16, 'Nombre desde PHP', 'Apellido desde PHP', 'php@php.com', 'password', '2021-03-10'),
(17, 'ariel', 'muñoz', 'asdasd@gmail.com', 'dasdas', '2021-03-11'),
(22, 'pedro', 'seo', 'pedro@gmail.com', '123', '2021-03-17'),
(23, 'pablo', 'marmol', 'pablo@gmail.com', '$2y$04$MDYB3N3ZgVbmXaXLwI.neOFQ3XlDbjljpz2jLassMNdM1/Vo/p2wS', '2021-03-17'),
(24, 'reina', 'muñoz', 'reina@gmail.com', '$2y$04$CRR97ADbb4AypT8Mf07FvufINP4u4IG8w/WL4pPV4GiuG.S/VQdbC', '2021-03-17'),
(26, 'ariel\"', 'dasdasd', 'asdasssd@gmail.com', '$2y$04$ms4zWFuUmEPwgVCmgmgpEuL1zygeFL9Y4FqVPFZ7gsBngjozL/IO.', '2021-03-18'),
(28, 'Heidi', 'Muñoz Villegas', 'heidi@gmail.com', '$2y$04$ypIoCxJPojCndAv4jBrHoeQWIuZLNBkAv4ZTSCKTS0UGs5b9oUo12', '2021-03-18'),
(29, 'asdasd\"', 'dasdasfafd\'', 'asdssasssd@gmail.com', '$2y$04$EcGFmVD5R355sm04VcMaseg24e6n4Prn8IhxTiGM4ooYsQMic0ti2', '2021-03-18'),
(30, 'rodrigo', 'rodriguez', 'rodriguez@hotmail.com', '$2y$04$WX2xSmoMyq.XMXRoL1f80eXUEkpkyQkXeuCQBCFPtPaCWGBSWtrxm', '2021-03-18'),
(31, 'mauricio', 'villegas', 'mauricio@yahoo.com', '$2y$04$KqoO0HQl.CkUTjbmjJqqNOGHYIfylSZGtBgSfEko3YmfbJ20Jn4Le', '2021-03-18'),
(32, 'canela', 'muñoz', 'canela@ymail.com', '$2y$04$OkrZvdby5pXj5gBG3B5Xi.LjJY5QjnAwhCIAKZsDmecVOQHytokCm', '2021-03-18'),
(33, 'Natalia', 'Centellas Muñoz', 'natita@gmail.com', '$2y$04$FTcK84ucYmU.KRXrentX5eHYGXFpI.hLxdPVFcpC00kYtdVECVxTe', '2021-03-18'),
(34, 'Romuald', 'Fons', 'romuald@romuald.com', '$2y$04$3/SJVFC6gCFTnCnCZlvyd.82BiDmm3jKmX1PaNmD085ST2DXoQLm.', '2021-03-18');

-- --------------------------------------------------------

--
-- Estructura para la vista `entradas_con_nombres`
--
DROP TABLE IF EXISTS `entradas_con_nombres`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `entradas_con_nombres`  AS  select `e`.`id` AS `id`,`u`.`nombre` AS `Nombre Usuario`,`c`.`nombre` AS `Nombre Categoría`,`e`.`titulo` AS `titulo`,`e`.`descripcion` AS `descripcion`,`e`.`fecha` AS `fecha` from ((`entradas` `e` join `usuarios` `u` on(`e`.`usuario_id` = `u`.`id`)) join `categorias` `c` on(`e`.`categoria_id` = `c`.`id`)) order by `e`.`id` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_entrada_usuario` (`usuario_id`),
  ADD KEY `fk_entrada_categoria` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_entrada_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_entrada_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
