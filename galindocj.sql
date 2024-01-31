-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2024 a las 00:26:33
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galindocj`
--
CREATE DATABASE IF NOT EXISTS `galindocj` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `galindocj`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

CREATE TABLE `habilidades` (
  `habilidad_id` int(11) NOT NULL,
  `habilidad_nombre` varchar(50) NOT NULL,
  `habilidad_descripcion` varchar(255) NOT NULL,
  `habilidad_porcentaje` int(11) NOT NULL,
  `habilidad_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habilidades`
--

INSERT INTO `habilidades` (`habilidad_id`, `habilidad_nombre`, `habilidad_descripcion`, `habilidad_porcentaje`, `habilidad_img`) VALUES
(15, 'Html', 'Poseo habilidades avanzadas en HTML, convirtiendo conceptos simples en sitios web atractivos y funcionales, priorizando una experiencia positiva para el usuario.', 55, 'vista/img/html.webp'),
(16, 'css', 'Con habilidades sólidas en CSS, transformo conceptos básicos en diseños atractivos y funcionales, mejorando la experiencia visual de los sitios web.', 55, 'vista/img/css.webp'),
(17, 'mongo DB', 'Experiencia destacada en MongoDB, gestionando datos de manera eficiente para crear aplicaciones robustas y escalables con un enfoque centrado en la base de datos.', 60, 'vista/img/mongoDB.png'),
(18, 'my Sql', 'Experiencia sólida en MySQL, gestionando bases de datos con eficiencia para desarrollar aplicaciones confiables y escalables con un enfoque centrado en los datos.', 40, 'vista/img/sql.png'),
(19, 'PHP', 'Con conocimientos intermedios en PHP, desarrollo aplicaciones web dinámicas, integrando funcionalidades y optimizando la interacción usuario-servidor de manera efectiva.', 40, 'vista/img/php.png'),
(20, 'Node JS', 'Con nociones básicas en Node.js, desarrollo aplicaciones sencillas, explorando el potencial del entorno JavaScript del lado del servidor.', 35, 'vista/img/nodeks.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_sobre_mi`
--

CREATE TABLE `inicio_sobre_mi` (
  `presentacion` text NOT NULL,
  `quien_soy` text NOT NULL,
  `mi_objetivo` text NOT NULL,
  `id` int(11) NOT NULL,
  `dato_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inicio_sobre_mi`
--

INSERT INTO `inicio_sobre_mi` (`presentacion`, `quien_soy`, `mi_objetivo`, `id`, `dato_foto`) VALUES
('Soy Jose Luis Galindo Cárdenas, un entusiasta estudiante de ingeniería de sistemas con una pasión por el desarrollo web y la programación. Con 22 años de edad, mi camino académico en la Universidad Jose María Arguedas me ha proporcionado una sólida base para explorar y contribuir al emocionante mundo de la tecnología.', 'Jose Luis Galindo Cárdenas, un estudiante de ingeniería de sistemas de 22 años de edad apasionado por el desarrollo web y la programación. Actualmente, estoy cursando la carrera profesional de ingeniería de sistemas en la Universidad Jose María Arguedas.', 'Mi objetivo principal es completar mi carrera universitaria en el ciclo académico 2025-2 con éxito. Además, tengo la meta de contribuir al mundo de la tecnología mediante el desarrollo de soluciones innovadoras. Disfruto especialmente trabajando en proyectos relacionados con el desarrollo web.', 1, 'vista/img/fotoyo.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `proyecto_id` int(11) NOT NULL,
  `proyectos_nombre` varchar(25) NOT NULL,
  `proyectos_descripcion` text NOT NULL,
  `proyecto_github` varchar(255) NOT NULL,
  `proyecto_url` varchar(255) NOT NULL,
  `proyecto_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`proyecto_id`, `proyectos_nombre`, `proyectos_descripcion`, `proyecto_github`, `proyecto_url`, `proyecto_img`) VALUES
(12, 'Portafolio personal', 'mi pagina web con mi horario de estudio.', 'https://github.com/jos3lo89/joseluis_web', 'https://joseluis-web.vercel.app/', 'vista/img/imgMiWeb.png'),
(13, 'Mi primer hola mundo', 'mi primer hola mundo en un hosting', 'https://github.com/jos3lo89/joseluis33', 'https://joseluis33.vercel.app/', 'vista/img/imgMiWeb22.png'),
(14, 'html, css y js', 'practicando css y js', 'https://github.com/jos3lo89/soy-chivolo-dev', 'https://soy-chivolo-dev.vercel.app/', 'vista/img/imgMiWeb21.png'),
(15, 'pagina de películas ', 'intento de pagina de películas', 'https://github.com/jos3lo89/peliculas-999', 'https://peliculas-999.vercel.app/', 'vista/img/55f985a0-7fcc-4e8c-8009-cda73592bb35.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_usuario` varchar(15) NOT NULL,
  `usuario_nombre` varchar(70) NOT NULL,
  `usuario_apellido` varchar(100) NOT NULL,
  `usuario_correo` varchar(30) NOT NULL,
  `usuario_clave` varchar(255) NOT NULL,
  `usuario_foto` varchar(255) NOT NULL,
  `usuario_fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario_fecha_modificacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `usuario_rol` varchar(15) NOT NULL,
  `usuario_pregunta1` varchar(50) NOT NULL,
  `usuario_pregunta2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_usuario`, `usuario_nombre`, `usuario_apellido`, `usuario_correo`, `usuario_clave`, `usuario_foto`, `usuario_fecha_registro`, `usuario_fecha_modificacion`, `usuario_rol`, `usuario_pregunta1`, `usuario_pregunta2`) VALUES
(1, 'galindocj', 'jose luis', 'galindo cardenas', 'jos3luis558@gmail.com', '$2y$10$XaFkFnAPOS38Wb035VGrteXRb5d07oEMtCxgD9VGH4RDglUl7F.4S', 'vista/fotoPerfil/fotoyo.webp', '2024-01-13 23:22:40', '2024-01-13 23:22:40', 'administrador', 'feliz', 'navidad'),
(35, 'revisor', 'revisor', 'revisor', 'revisor@revisor', '$2y$10$lyF36EnVD8IiEtWF4iS/BuvsBNcB8y6AaoJwx76z3lgW9cY3z0LfW', 'vista/fotoPerfil/omaiga.jpg', '2024-01-09 05:48:13', '2024-01-09 05:48:13', 'revisor', 'revisor', 'revisor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`habilidad_id`);

--
-- Indices de la tabla `inicio_sobre_mi`
--
ALTER TABLE `inicio_sobre_mi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`proyecto_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `habilidad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `inicio_sobre_mi`
--
ALTER TABLE `inicio_sobre_mi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `proyecto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
