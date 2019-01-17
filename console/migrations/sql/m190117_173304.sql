-
-- Base de datos: `bagabundo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attracc_res`
--

DROP TABLE IF EXISTS `attracc_res`;

CREATE TABLE `attracc_res` (
  `id` int(11) NOT NULL,
  `id_attracc` int(11) NOT NULL DEFAULT 0,
  `total_price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attractions`
--

DROP TABLE IF EXISTS `attractions`;

CREATE TABLE `attractions` (
  `id` int(11) NOT NULL,
  `type_attraction` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `num_people` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `car`
--

DROP TABLE IF EXISTS `car`;

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `model` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `type_car` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `car_res`
--

DROP TABLE IF EXISTS `car_res`;

CREATE TABLE `car_res` (
  `id` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `full_name` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `headline` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `hotel_name` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel_res`
--

DROP TABLE IF EXISTS `hotel_res`;

CREATE TABLE `hotel_res` (
  `id` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL DEFAULT 0,
  `total_price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura de tabla para la tabla `pax`
--

DROP TABLE IF EXISTS `pax`;

CREATE TABLE `pax` (
  `id` int(11) NOT NULL,
  `num_personas` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `avatar` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_car_res` int(11) NOT NULL,
  `id_hotel_res` int(11) NOT NULL,
  `id_attracc_res` int(11) NOT NULL,
  `id_pax` int(11) NOT NULL,
  `check_in` time NOT NULL,
  `departure_time` time NOT NULL,
  `day_arrival` date NOT NULL,
  `day_exit` date NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `room`
--

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `floor_number` int(11) NOT NULL,
  `type_room` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `amenities` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `max_people` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `type_user` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attracc_res`
--
ALTER TABLE `attracc_res`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_res_atrac_atracciones` (`id_attracc`);

--
-- Indices de la tabla `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `car_res`
--
ALTER TABLE `car_res`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_res_auto_auto` (`id_car`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_clientes_usuarios` (`id_user`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_hotel_habitacion` (`id_room`);

--
-- Indices de la tabla `hotel_res`
--
ALTER TABLE `hotel_res`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_res_hotel_hotel` (`id_hotel`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `pax`
--
ALTER TABLE `pax`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_reservaciones_clientes` (`id_customer`),
  ADD KEY `FK_reservaciones_res_auto` (`id_car_res`),
  ADD KEY `FK_reservaciones_res_hotel` (`id_hotel_res`),
  ADD KEY `FK_reservaciones_pax` (`id_pax`),
  ADD KEY `FK_reservaciones_atracciones` (`id_attracc_res`);

--
-- Indices de la tabla `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuarios_perfil` (`id_profile`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attracc_res`
--
ALTER TABLE `attracc_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `car_res`
--
ALTER TABLE `car_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hotel_res`
--
ALTER TABLE `hotel_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pax`
--
ALTER TABLE `pax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `attracc_res`
--
ALTER TABLE `attracc_res`
  ADD CONSTRAINT `FK_res_atrac_atracciones` FOREIGN KEY (`id_attracc`) REFERENCES `attractions` (`id`);

--
-- Filtros para la tabla `car_res`
--
ALTER TABLE `car_res`
  ADD CONSTRAINT `FK_res_auto_auto` FOREIGN KEY (`id_car`) REFERENCES `car` (`id`);

--
-- Filtros para la tabla `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `FK_clientes_usuarios` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `FK_hotel_habitacion` FOREIGN KEY (`id_room`) REFERENCES `room` (`id`);

--
-- Filtros para la tabla `hotel_res`
--
ALTER TABLE `hotel_res`
  ADD CONSTRAINT `FK_res_hotel_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`);

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_reservaciones_atracciones` FOREIGN KEY (`id_attracc_res`) REFERENCES `attracc_res` (`id`),
  ADD CONSTRAINT `FK_reservaciones_clientes` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `FK_reservaciones_pax` FOREIGN KEY (`id_pax`) REFERENCES `pax` (`id`),
  ADD CONSTRAINT `FK_reservaciones_res_auto` FOREIGN KEY (`id_car_res`) REFERENCES `car_res` (`id`),
  ADD CONSTRAINT `FK_reservaciones_res_hotel` FOREIGN KEY (`id_hotel_res`) REFERENCES `hotel_res` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_usuarios_perfil` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id`);
COMMIT;