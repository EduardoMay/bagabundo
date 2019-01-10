CREATE TABLE IF NOT EXISTS `atracciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_atracc` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `num_persona` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `auto` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_auto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nombre_comp` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `titular` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_habitacion` int(11) NOT NULL,
  `nom_hotel` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estrellas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `pax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_personas` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_comp` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `reservaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_res_auto` int(11) NOT NULL,
  `id_res_hotel` int(11) NOT NULL,
  `id_res_atracc` int(11) NOT NULL,
  `id_pax` int(11) NOT NULL,
  `hr_llegada` time NOT NULL,
  `hr_salida` time NOT NULL,
  `dia_llegada` date NOT NULL,
  `dia_salida` date NOT NULL,
  `precio_total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `res_atrac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_atracc` int(11) NOT NULL DEFAULT 0,
  `prec_tat` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `res_auto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_auto` int(11) NOT NULL,
  `prec_ta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `res_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_hotel` int(11) NOT NULL DEFAULT 0,
  `precio_total_htl` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_perfil` int(11) NOT NULL,
  `nombre_usu` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_usu` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
);