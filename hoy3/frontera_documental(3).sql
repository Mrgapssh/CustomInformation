-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 07:56:47
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `frontera_documental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`id`, `nombre`) VALUES
(1, ' 1 Cubierto'),
(2, '2 Cubiertos'),
(3, '3 Cubiertos'),
(4, '4 cubiertos'),
(5, '5 Cubiertos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core`
--

CREATE TABLE `core` (
  `id` int(11) NOT NULL,
  `version` char(10) NOT NULL DEFAULT '0',
  `domain` varchar(65) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `tax` varchar(5) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `autobackup` int(11) DEFAULT NULL,
  `cronjob` int(11) DEFAULT NULL,
  `last_cronjob` int(11) DEFAULT NULL,
  `last_autobackup` int(11) DEFAULT NULL,
  `invoice_terms` mediumtext,
  `company_reference` int(6) DEFAULT NULL,
  `project_reference` int(6) DEFAULT NULL,
  `invoice_reference` int(6) DEFAULT NULL,
  `subscription_reference` int(6) DEFAULT NULL,
  `ticket_reference` int(10) DEFAULT NULL,
  `date_format` varchar(20) DEFAULT NULL,
  `date_time_format` varchar(20) DEFAULT NULL,
  `invoice_mail_subject` varchar(150) DEFAULT NULL,
  `pw_reset_mail_subject` varchar(150) DEFAULT NULL,
  `pw_reset_link_mail_subject` varchar(150) DEFAULT NULL,
  `credentials_mail_subject` varchar(150) DEFAULT NULL,
  `notification_mail_subject` varchar(150) DEFAULT NULL,
  `language` varchar(150) DEFAULT NULL,
  `invoice_address` varchar(200) DEFAULT NULL,
  `invoice_city` varchar(200) DEFAULT NULL,
  `invoice_contact` varchar(200) DEFAULT NULL,
  `invoice_tel` varchar(50) DEFAULT NULL,
  `subscription_mail_subject` varchar(250) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `template` varchar(200) DEFAULT 'blueline',
  `paypal` varchar(5) DEFAULT '1',
  `paypal_currency` varchar(200) DEFAULT 'EUR',
  `paypal_account` varchar(200) DEFAULT '',
  `invoice_logo` varchar(150) DEFAULT 'assets/blueline/img/invoice_logo.png',
  `pc` varchar(150) DEFAULT NULL,
  `vat` varchar(150) DEFAULT NULL,
  `ticket_email` varchar(250) DEFAULT NULL,
  `ticket_default_owner` int(10) DEFAULT '1',
  `ticket_default_queue` int(10) DEFAULT '1',
  `ticket_default_type` int(10) DEFAULT '1',
  `ticket_default_status` varchar(200) DEFAULT 'new',
  `ticket_config_host` varchar(250) DEFAULT NULL,
  `ticket_config_login` varchar(250) DEFAULT NULL,
  `ticket_config_pass` varchar(250) DEFAULT NULL,
  `ticket_config_port` varchar(250) DEFAULT NULL,
  `ticket_config_ssl` varchar(250) DEFAULT NULL,
  `ticket_config_email` varchar(250) DEFAULT NULL,
  `ticket_config_flags` varchar(250) DEFAULT '/notls',
  `ticket_config_search` varchar(250) DEFAULT 'UNSEEN',
  `ticket_config_timestamp` int(11) DEFAULT '0',
  `ticket_config_mailbox` varchar(250) DEFAULT NULL,
  `ticket_config_delete` int(11) DEFAULT '0',
  `ticket_config_active` int(11) DEFAULT '0',
  `ticket_config_imap` int(11) DEFAULT '1',
  `stripe` int(11) DEFAULT '0',
  `stripe_key` varchar(250) DEFAULT NULL,
  `stripe_p_key` varchar(255) DEFAULT '',
  `stripe_currency` varchar(255) DEFAULT 'USD',
  `bank_transfer` int(11) DEFAULT '0',
  `bank_transfer_text` longtext NOT NULL,
  `estimate_terms` longtext NOT NULL,
  `estimate_prefix` varchar(250) DEFAULT 'EST',
  `estimate_pdf_template` varchar(250) DEFAULT 'templates/estimate/blueline',
  `invoice_pdf_template` varchar(250) DEFAULT 'templates/invoice/blueline',
  `second_tax` varchar(5) DEFAULT '',
  `estimate_mail_subject` varchar(255) DEFAULT 'New Estimate #{estimate_id}',
  `money_format` int(20) UNSIGNED NOT NULL DEFAULT '1',
  `money_currency_position` int(20) UNSIGNED NOT NULL DEFAULT '1',
  `pdf_font` varchar(255) DEFAULT 'NotoSans',
  `pdf_path` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `registration` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `templateportal` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `core`
--

INSERT INTO `core` (`id`, `version`, `domain`, `email`, `company`, `tax`, `currency`, `autobackup`, `cronjob`, `last_cronjob`, `last_autobackup`, `invoice_terms`, `company_reference`, `project_reference`, `invoice_reference`, `subscription_reference`, `ticket_reference`, `date_format`, `date_time_format`, `invoice_mail_subject`, `pw_reset_mail_subject`, `pw_reset_link_mail_subject`, `credentials_mail_subject`, `notification_mail_subject`, `language`, `invoice_address`, `invoice_city`, `invoice_contact`, `invoice_tel`, `subscription_mail_subject`, `logo`, `template`, `paypal`, `paypal_currency`, `paypal_account`, `invoice_logo`, `pc`, `vat`, `ticket_email`, `ticket_default_owner`, `ticket_default_queue`, `ticket_default_type`, `ticket_default_status`, `ticket_config_host`, `ticket_config_login`, `ticket_config_pass`, `ticket_config_port`, `ticket_config_ssl`, `ticket_config_email`, `ticket_config_flags`, `ticket_config_search`, `ticket_config_timestamp`, `ticket_config_mailbox`, `ticket_config_delete`, `ticket_config_active`, `ticket_config_imap`, `stripe`, `stripe_key`, `stripe_p_key`, `stripe_currency`, `bank_transfer`, `bank_transfer_text`, `estimate_terms`, `estimate_prefix`, `estimate_pdf_template`, `invoice_pdf_template`, `second_tax`, `estimate_mail_subject`, `money_format`, `money_currency_position`, `pdf_font`, `pdf_path`, `registration`, `templateportal`, `description`, `keywords`, `facebook`, `twitter`) VALUES
(1, '2.3.3', 'www.legalitesas.com', 'contacto@legalitesas.com', 'LEGALITE SAS', '0', '$', 1, 1, 0, 0, 'Thank you for your business. We do expect payment within {due_date}, so please process this invoice within that time.', 41002, 51001, 31001, 61001, 10001, 'Y/m/d', 'g:i A', 'New Invoice', 'Password Reset', 'Password Reset', 'Login Details', 'Notification', 'spanish', 'Av. 6 N# 35 -147  ', 'CUCUTA - NORTE DE SANTANDER', 'LEGALITE SAS', '311 555 5555', 'New Subscription', 'files/media/logo3.png', 'blueline', '0', 'USD', '', 'assets/blueline/images/FC2_logo_dark.png', 'c1030dd6-2669-4435-a3d8-96002a2959b6', '', NULL, 1, 1, 1, 'new', NULL, NULL, NULL, NULL, NULL, NULL, '/notls', 'UNSEEN', 0, NULL, 0, 0, 1, 0, NULL, '', 'USD', 0, '', '', 'EST', 'templates/estimate/whitelight', 'templates/invoice/blueline', '', 'New Estimate #{estimate_id}', 1, 1, 'NotoSans', 1, 0, 'web', 'Para el GRUPO LEGALITE es una filosofía, un objetivo y un compromiso, basado en la satisfacción plena de la Organización, de sus clientes y sus usuarios. Para ello prestamos una Asistencia Profesional Integral con el mejor Recurso Humano, Capacitado y Convencido de su labor, respaldados por un estricto control de procesos, con el fin de garantizar el cumplimiento de las especificaciones del servicio, para así lograr la satisfacción del cliente y buscar un mejoramiento continuo del Sistema de Gestión de Calidad.', 'Asesor Gerencial, Asesor Jurídico, Asesor Contable', 'https://www.facebook.com', '#');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosdiarios`
--

CREATE TABLE `datosdiarios` (
  `id_datos` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `cantidad_cubiertos` varchar(120) NOT NULL,
  `cheque` varchar(120) NOT NULL,
  `ingresos` varchar(120) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosdiarios`
--

INSERT INTO `datosdiarios` (`id_datos`, `id`, `cantidad_cubiertos`, `cheque`, `ingresos`, `fecha`) VALUES
(1, 0, '12', '12', '12', '0000-00-00 00:00:00'),
(2, 9, '12', '12', '12', '0000-00-00 00:00:00'),
(3, 9, '12', '12', '12', '2016-10-24 09:58:08'),
(4, 9, '1', '12', '12', '2016-10-24 09:58:37'),
(5, 9, '12', '12', '12', '2016-10-24 10:07:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nit` int(40) NOT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `representante` varchar(300) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `horario` varchar(200) DEFAULT NULL,
  `telefono` varchar(150) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `archivo` varchar(400) DEFAULT NULL,
  `categoria` varchar(100) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `instagram` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nit`, `nombre`, `representante`, `descripcion`, `horario`, `telefono`, `direccion`, `email`, `archivo`, `categoria`, `facebook`, `twitter`, `instagram`) VALUES
(27, 432789, 'TECNHMICRO', 'Mauricio Orozco', 'Empresa de desarollo tecnologico y automatizacion de procesos', 'LUNES A VIERNES 10 A 12 am ', '(+57) 3203940388', 'Av 3 n14-25 la cabrera', 'Techmicro@gmail.com', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Beats_Electronics_logo.svg/2000px-Beats_Electronics_logo.svg.png', '5 Cubiertos', 'https://www.facebook.com/', 'https://twitter.com/?lang=es', 'https://www.instagram.com/'),
(48, 1090499097, 'GALILEO', 'JUAN PEREZ', 'Re', '8am-9pm', '3203940388', 'av 11·#13 caobos', 'galileo@gmail.com', '753b0b1f152c495ecf25cc1153c896e9.jpg', '3 Tenedores', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/'),
(49, 2147483647, 'er', 'JUAN PEREZ', 'res', '8am-9pm', '3203940388', 'av 11·#13 caobos', 'galileo@gmail.com', '5e148eec48903c449f50b17e1a1af652.jpg', '3 Tenedores', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE `modules` (
  `id` int(10) NOT NULL,
  `name` varchar(250) DEFAULT '0',
  `link` varchar(250) DEFAULT '0',
  `type` varchar(250) DEFAULT '0',
  `icon` varchar(150) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  `orden` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`, `orden`) VALUES
(1, 'Dashboard', 'dashboard', 'main', 'icon-th', 1, 1),
(4, 'Presupuesto mes', 'psupuesto', 'main', 'icon-th', 23, 2),
(9, 'Registros Diarios', 'datosdiario', 'main', 'icon-cog', 20, 3),
(10, 'Informes', 'datosdiario/informe', 'main', 'icon-cog', 50, 4),
(20, 'Usuarios', 'settings/users', 'main', 'icon-user', 3, 6),
(21, 'Graficos', 'datosdiario/grafico', 'main', 'icon-file', 4, 7),
(22, 'backup', 'settings/backup', 'main', 'icon-briefcase', 5, 8),
(23, 'Configuraciones', 'settings', 'main', 'icon-tg', 234, 10),
(24, 'empresas', 'company', 'main', 'icon-tg', 212, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuestos`
--

CREATE TABLE `presupuestos` (
  `id` int(11) NOT NULL,
  `arriendo` bigint(20) DEFAULT NULL,
  `servicios` bigint(20) DEFAULT NULL,
  `brigada` bigint(20) DEFAULT NULL,
  `meseros` bigint(20) DEFAULT NULL,
  `alimentos` bigint(20) DEFAULT NULL,
  `bebidas` bigint(20) DEFAULT NULL,
  `utilidad` int(11) DEFAULT NULL,
  `mes` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `presupuestos`
--

INSERT INTO `presupuestos` (`id`, `arriendo`, `servicios`, `brigada`, `meseros`, `alimentos`, `bebidas`, `utilidad`, `mes`, `year`, `fecha`, `id_user`) VALUES
(1, 13000000, 3000000, 15000000, 11000000, 30000000, 5000000, 70, '11', '2016', '2016-11-04 17:10:30', 9),
(2, 1200000, 600000, 3200000, 1200000, 5200000, 3200000, 50, '11', '2016', '2016-11-21 21:20:25', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pw_reset`
--

CREATE TABLE `pw_reset` (
  `id` int(10) NOT NULL,
  `email` varchar(250) DEFAULT '0',
  `timestamp` varchar(250) DEFAULT '0',
  `token` varchar(250) DEFAULT '0',
  `user` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pw_reset`
--

INSERT INTO `pw_reset` (`id`, `email`, `timestamp`, `token`, `user`) VALUES
(1, 'caicedo31@hotmail.com', '1458307726', 'bdd71004a5452cbca6a5fd2d3380a08b', 1),
(2, 'carlossuarezquintero@gmail.com', '1458307796', '6b2c02dc91a8056712097ae413288fea', 1),
(3, 'carlossuarezquintero@gmail.com', '1458308038', 'b0babeb0320f01d9aac93872ef9b668b', 1),
(4, 'carlossuarezquintero@gmail.com', '1458344682', 'b095b4765a9b864e15196e82376018a5', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quinessomos`
--

CREATE TABLE `quinessomos` (
  `id` int(11) NOT NULL,
  `archivo` varchar(200) NOT NULL,
  `nombrearchivo` varchar(200) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `contenido` text NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `quinessomos`
--

INSERT INTO `quinessomos` (`id`, `archivo`, `nombrearchivo`, `nombre`, `contenido`, `estado`) VALUES
(1, '13b5a1051a9da418403f4bd31aebca8e.png', 'x', 'victor', 'hola', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alimentos` bigint(20) NOT NULL,
  `bebidas` bigint(20) NOT NULL,
  `cubiertos` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `fecha`, `alimentos`, `bebidas`, `cubiertos`) VALUES
(9, '2016-11-04 17:13:36', 1751710, 1053241, 64),
(9, '2016-11-05 05:44:43', 1351710, 1053241, 64),
(9, '2016-11-06 05:44:52', 1151710, 1053241, 64),
(9, '2016-11-07 05:44:56', 1951710, 1053241, 64),
(9, '2016-11-08 05:44:59', 1251710, 1053241, 64),
(9, '2016-11-09 05:45:03', 1951710, 1053241, 64),
(9, '2016-11-10 05:45:06', 1151710, 1053241, 64),
(9, '2016-11-11 05:45:12', 1551710, 1053241, 64),
(9, '2016-11-12 05:45:32', 1751710, 1253241, 64),
(9, '2016-11-15 08:35:34', 2390000, 19300210, 67),
(9, '2016-11-22 00:44:08', 12345, 1234, 12),
(9, '2016-11-22 00:44:33', 2345, 2345, 23),
(9, '2016-11-23 05:06:17', 120, 1234, 12),
(31, '2016-11-12 05:44:52', 1151710, 1053241, 64),
(31, '2016-11-13 05:44:43', 1351710, 1053241, 64),
(31, '2016-11-14 17:13:36', 1751710, 1053241, 64),
(31, '2016-11-16 21:20:49', 500000, 500000, 40),
(31, '2016-11-17 21:20:49', 500000, 500000, 40),
(31, '2016-11-18 21:20:49', 500000, 500000, 40),
(31, '2016-11-19 21:20:49', 500000, 500000, 40),
(31, '2016-11-20 21:20:49', 500000, 500000, 40),
(31, '2016-11-21 21:20:49', 500000, 500000, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `nit` varchar(30) NOT NULL,
  `firstname` varchar(120) DEFAULT NULL,
  `lastname` varchar(120) DEFAULT NULL,
  `hashed_password` varchar(128) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `status` enum('active','inactive','deleted') DEFAULT NULL,
  `admin` enum('0','1') DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `userpic` varchar(250) DEFAULT 'no-pic.png',
  `id_empresa` int(11) NOT NULL,
  `access` varchar(150) NOT NULL DEFAULT '1,2',
  `last_active` varchar(50) DEFAULT NULL,
  `last_login` varchar(50) DEFAULT NULL,
  `queue` bigint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `nit`, `firstname`, `lastname`, `hashed_password`, `email`, `status`, `admin`, `created`, `userpic`, `id_empresa`, `access`, `last_active`, `last_login`, `queue`) VALUES
(9, 'Admin', '12345', 'carlosxx', 'baba', '65122050e1829fcd69a3811d784e682bb8dc3e1adaccd3d5737c38b729db5655e2eed4e26f3aa5b53e3dd69829417d1678cc9d17cc66af7f3ec4203df8061447', 'jajsjs@hotmail.com', 'active', '1', '2013-01-03 08:00:00', 'no-pic.png', 27, '1,4,9,10,20,21,22,23,24', '1479883921', '1479877517', 0),
(31, 'galileo', '', 'juan', 'perez', 'af83cb10afaa3a35ebc0356683cfac9448f3df23ca7250d4dadc76f9916b787432f17b62527400145d362cc4abfbfa2a90108c2ce8def37fd8dfe861a6ed01c6', 'galileo@gmail.com', 'active', '1', '2016-11-21 20:57:16', 'no-pic.png', 48, '1,4,9,10', '1479883820', '1479883443', 0),
(32, 'prueba', '', 'prueba', 'perez', '1597b832a6dd835cb3eefd95a1a8db4c7debf99f3e97df414591ca50b6f933c85ea0c5006f72b1b939ae797d2553e28eb043fc3efbb35c44c1875e2b04c576b5', 'galileo@gmail.com', 'active', '1', '2016-11-22 00:48:38', 'no-pic.png', 49, '1,4,9,10,21', '0', '1479775737', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosdiarios`
--
ALTER TABLE `datosdiarios`
  ADD PRIMARY KEY (`id_datos`,`id`,`fecha`),
  ADD KEY `sdsd_ibfk_1` (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `presupuestos`
--
ALTER TABLE `presupuestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pw_reset`
--
ALTER TABLE `pw_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quinessomos`
--
ALTER TABLE `quinessomos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`,`fecha`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `core`
--
ALTER TABLE `core`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `datosdiarios`
--
ALTER TABLE `datosdiarios`
  MODIFY `id_datos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `presupuestos`
--
ALTER TABLE `presupuestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pw_reset`
--
ALTER TABLE `pw_reset`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `quinessomos`
--
ALTER TABLE `quinessomos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `empres_fk` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
