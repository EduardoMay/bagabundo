CREATE TABLE `attracc_res` (
  `id` int(11) NOT NULL,
  `id_attracc` int(11) NOT NULL DEFAULT 0,
  `total_price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attractions`
--

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

CREATE TABLE `car_res` (
  `id` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

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

CREATE TABLE `hotel_res` (
  `id` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL DEFAULT 0,
  `total_price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pax`
--

CREATE TABLE `pax` (
  `id` int(11) NOT NULL,
  `num_personas` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
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

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `floor_number` int(11) NOT NULL,
  `type_room` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `amenities` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `max_people` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
