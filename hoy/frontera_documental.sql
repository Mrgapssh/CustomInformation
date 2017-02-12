-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2016 a las 20:18:28
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
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nombrearchivo` varchar(200) NOT NULL,
  `archivo` varchar(200) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `twitter` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nit`, `nombre`, `representante`, `descripcion`, `horario`, `telefono`, `direccion`, `email`, `archivo`, `categoria`, `facebook`, `twitter`) VALUES
(27, 432789, 'TECNHMICRO', 'Mauricio Orozco', 'Empresa de desarollo tecnologico y automatizacion de procesos', 'LUNES A VIERNES 10 A 12 am ', '(+57) 3203940388', 'Av 3 n14-25 la cabrera', 'Techmicro@gmail.com', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Beats_Electronics_logo.svg/2000px-Beats_Electronics_logo.svg.png', '5 Cubiertos', 'www.facebook.com/', 'www.twitter.com'),
(28, 223452, 'ALMAXIMO S.A.S', 'Yein Contreras', 'Empresa de tipo retail', 'LUNES A VIERNES 6 A 12 am ', '(+57) 3203940388', 'Av 6 calle x centro', 'almaximo@hotmail.com.co', 'http://www.logospike.com/wp-content/uploads/2015/11/Logo_Image_01.png', '3 Cubiertos', 'www.facebook.com/', 'www.twitter.com'),
(44, 256221235, 'camilo', 'bautista', 'pruea', 'LUNES A VIERNES 8 A 8 pm', '3132456321', 'cnakks 23', 'jajsj@hotmal.com', 'http://netdna.webdesignerdepot.com/uploads/circular_logos/Accelrys.jpg', '2 Cubiertos', 'www.facebook.com/', 'www.twitter.com'),
(45, 1090490097, 'Software company', 'Carlos Suarez', 'Empresa de desarollo de software especializada.', 'LUNES A VIERNES 8 A 12 am ', '3203940388', 'av 11 n18-36 las americas', 'carlossuarezquintero@gmail.com', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRGvIT1qKR9NHto_MrGddjntYxsR-2EEnDuSq1CaGKXpzmtbNDF8w', '4 Cubiertos', 'www.facebook.com/', 'www.twitter.com');

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
  `sort` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES
(1, 'Dashboard', 'dashboard', 'main', 'icon-th', 1),
(4, 'company', 'company', 'main', NULL, 23),
(9, 'Settings', 'settings', 'main', 'icon-cog', 20),
(10, 'QuickAccess', 'quickaccess', 'widget', NULL, 50),
(11, 'User Online', 'useronline', 'widget', NULL, 51),
(20, 'Usuarios', 'settings/users', 'main', 'icon-user', 3),
(21, 'archivos', 'archivos', 'main', 'icon-file', 4),
(22, 'backup', 'settings/backup', 'main', 'icon-briefcase', 5);

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
(1, 13000000, 3000000, 15000000, 11000000, 30000000, 5000000, 70, '11', '2016', '2016-11-04 17:10:30', 9);

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
(9, '2016-11-04 17:13:36', 1751710, 1053241, 64);

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
  `title` varchar(150) NOT NULL,
  `access` varchar(150) NOT NULL DEFAULT '1,2',
  `last_active` varchar(50) DEFAULT NULL,
  `last_login` varchar(50) DEFAULT NULL,
  `queue` bigint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `nit`, `firstname`, `lastname`, `hashed_password`, `email`, `status`, `admin`, `created`, `userpic`, `title`, `access`, `last_active`, `last_login`, `queue`) VALUES
(9, 'Admin', '12345', 'carlosxx', 'baba', '65122050e1829fcd69a3811d784e682bb8dc3e1adaccd3d5737c38b729db5655e2eed4e26f3aa5b53e3dd69829417d1678cc9d17cc66af7f3ec4203df8061447', 'jajsjs@hotmail.com', 'active', '1', '2013-01-03 08:00:00', 'no-pic.png', 'Coordinacion Operativa', '1,20,21,22,9,10,11,4', '1478279617', '1478278539', 0),
(10, 'carlos', '', 'carlos', 'jose', '413dc2cd77ce164f936247f219d0bdff0fc68b79c3ee8d91222ca0cfd206bbf5b35c696a4168ac67439fe3a14002f54c259ded6adc71344648acb1b04168af72', 'medina4@hotmail.com', 'active', '0', '2016-03-12 01:52:27', 'no-pic.png', 'Desarrollo Tecnológico', '1,9,10', '0', '1472705594', 0),
(11, 'victor', '123456', 'victor', 'arias', '9b38d18576b386be96b4bc5abaa442d8064b71ccf869adf84b818cfa215c298181a1699403787f1669b0c71e2276ab2adfb1e3d3c0b8fccc07ab6a11eabffec1', 'v@hotmail.com', 'deleted', '1', '2016-03-12 01:55:17', 'no-pic.png', 'Empresa', '1,21,9,10', '0', '1472228700', 0),
(12, 'm.sotelo', '', 'Mauricio', 'Sotelo', 'b9dd1875e48e50359e2028f1cc9605f0eaf03b0ec4e2574f345ef97e6346510a2c63c6cc4e17dae8c7916234fd739b43bc240f66c58f66abaecaf124e40b31ab', 'm.sotelo@unisimonbolivar.edu.co', 'deleted', '0', '2016-08-31 15:45:12', 'no-pic.png', 'Usuarios', '1,2', NULL, NULL, 0),
(13, 'a.peñaloza', '', 'arlene', 'peñaloza', '9ffbc864b05353c51f101a37d36a9921d082c00a7cab47deb14f2a4bbc7d7bed4d8afa8f454b30a71d8f6419c930ed450d9fb640d0bc1ae15b4dbccb16d3879b', 'a.penaloza@unismonboliva.edu.co', 'deleted', '0', '2016-08-31 15:46:50', 'no-pic.png', 'Usuarios', '1,2', NULL, NULL, 0),
(14, 'juan', '', 'camilo', 'bautista', '7f6d57cc90483837c98ca463a351a61b34716be165e14f2ff6fec8cc0ca168374edfe54e577bb75e306b1ab55f9b493f253125f69f161cee83150e4de8aaa015', 'jasj@hotmail.com', 'deleted', '1', '2016-08-31 16:42:48', 'no-pic.png', 'Coordinacion Operativa', '1,2', NULL, NULL, 0),
(15, 'sdd', '', 'sdsd', 'dsds', '47919138ba1b4e9f0d923f42376179d0de27a00643f00cc473c2a4ee09b517c1d3ac4db604ce86953432d21a830489588e93ab97ee9a8a9510ea14230f4ef256', 'dsd@hotmail.com', 'deleted', '1', '2016-08-31 16:47:18', 'no-pic.png', 'Emprendimieto', '1,2', NULL, NULL, 0),
(16, 'camilo', '', 'bautista', 'hsdjshd', 'f4d81c9b231a121369feb1901f7ebc0aa7098a76a8f70227c622f568b2ff9a183e7453b32afb7c6f4544b62a5b11b77e009b287968ee62bed5edba25d53ad293', 'sdjsdhj', 'deleted', '0', '2016-09-01 15:02:47', 'no-pic.png', 'Coordinacion Operativa', '1,2', NULL, NULL, 0),
(17, 'jdfjdj', '', 'jjfdjd', 'jfdjf', '4b68051396a41b4c0a42183832798469d934f749392ea80e36e42a985acfd2d9444f9f663e696397099db2f9cb557094412dc66583028a97fbe84db0d61c06b9', 'jdjfdfj', 'deleted', '1', '2016-09-01 15:16:06', 'no-pic.png', 'Coordinacion Operativa', '1,2', NULL, NULL, 0),
(18, 'sdf', '', 'sdf', 'sdf', 'f11b5cc72451e5893e88d806e4cfbb07ae2ef5f5153ed30b982e2c8fd64cb1499a3b9394ed512fa965bd441493c99248134e8841300c744000485be92683aa91', 'sdf', 'deleted', '1', '2016-09-01 15:18:01', 'no-pic.png', 'Emprendimieto', '1,2', NULL, NULL, 0),
(19, 'dfs', '', 'sdfsdf', 'sdf', '8110ba8d117d5e77b1dbacae4aad2f22c2b41b1ab6600e4132a67a26fb34afa5e50b73df1a3514791c9559eeaa2c6bf4c6880f82cc11a0ac43fda1f3b127f46b', 'sdf', 'deleted', '1', '2016-09-01 15:22:43', 'no-pic.png', 'Area prototipaje', '1,2', NULL, NULL, 0),
(20, 'cmi', '', 'jasi', 'naskas', '0627c3e8db745bf9f21a3e8df6e56fc35b0cea497b481cdc93dbf6852a84415941c067e9b61be261d75a176134dae3a52581e98c4ac1ed7aa72ed23b2a59ca7b', 'ass@hotmail.com', 'deleted', '1', '2016-09-01 15:24:26', 'no-pic.png', 'Emprendimieto', '1,2', NULL, NULL, 0),
(21, 'fgh', '', 'fgh', 'fgh', '9f6775d86e7d5c5f652fbd016d11df388e97700aea84c2053ff9e2dc54399ad4227134c327550131c985bda57195a8796e76face6b5075bfa911a4ac3fdff6ee', 'gh', 'deleted', '1', '2016-09-01 15:27:29', 'no-pic.png', 'Coordinacion Operativa', '1,2', NULL, NULL, 0),
(22, 'dfg', '', 'dfg', 'dfg', '4007061184edf2d1fb1108f42b3a70971e5b4f24eb465983b02000de0a3eee194eb10e2d89cb2795b8e7f7c443d241a494b9c1d8327de1ede7ee25e0bcb52df5', 'dfg', 'deleted', '1', '2016-09-01 16:31:43', 'no-pic.png', 'Emprendimieto', '1,2', NULL, NULL, 0),
(23, 'camacolcucuta', '', 'arlene', 'dsds', '78bb9884fe05b45a08413b1b86f474d049eca43d59379c53fb7b3cdbb126b9345b971449e3f5c5714acb3b1bb3fe742c17942c241413f50b41bd8496b81c7a14', 'jdjj@hotmail.com', 'deleted', '1', '2016-09-01 16:56:34', 'no-pic.png', 'Coordinacion Operativa', '1,2', NULL, NULL, 0),
(24, 'e', '', 'e', 'e', '56dee8a7cccb191a9f734b38f23ba2e7b8f23970dad35b41b211c115d7a7a1c5cd8535758f2246a85b0182329e8460165290ce96bd50a81a7f1e57c992746f96', 'admin', 'deleted', '1', '2016-09-01 20:58:35', 'no-pic.png', '', '1,2', NULL, NULL, 0),
(25, 'jsdj', '', 'jsdjsj', 'jjsdjdsj', 'ec3c1944ad9a549711f72cd6160916f15da91efbcd2d6aa1b0a27b6ec58671424b558405ed362f642067de26d3fc0696acec1d25df78210e19b01f5d46f4f92d', 'jsjdjsdj@hotmail.com', 'deleted', '1', '2016-09-02 04:03:16', 'no-pic.png', 'Emprendimieto', '1,2', NULL, NULL, 0),
(26, 'jcbautista', '', 'camilo', 'bautista', '30cec5d8a5794e9192aa1ca24d9defc56dd62518d9c72ee05574948b520ea185fb107b6443dac25de3a8adf680428fd058736a326d5966f4f6887212a8c9e38a', 'jsja2@hotmail.com', 'deleted', '1', '2016-09-02 04:46:48', 'no-pic.png', 'Emprendimieto', '1,2', NULL, NULL, 0),
(27, 'juans', '', 'camilo', 'bauts', '4c36f2a7e61d5edc7dec84d27cb7dbbbe959d8146461b9864ededf3647b0a057a65b4407e1a1efa3ea06acc42e3e7a537377877787bfa051d448adae9e7f39af', 'jasj@htp.com', 'deleted', '1', '2016-09-02 05:27:04', 'no-pic.png', 'Coordinacion Operativa', '1,2', NULL, NULL, 0),
(28, 'jjaaja', '', 'jajajaj', 'jjajaja', '10a0de57dca3cd4725be31f9e555cef604143f8037d10802cc05e4e8a8eeb0093ce28356faf0c0629da1c7f6860f16c23bc9f89bfc19f7ba2ec4fc6d8940a374', 'jajsjs@hotmail.com', 'active', '1', '2016-09-02 06:08:54', 'no-pic.png', 'Usuarios', '1,2', NULL, NULL, 0),
(29, 'jukheb', '', 'camilo', 'bautista', 'f8218c9c9a7da5b54ce6533a3e1471d45c1a23c010e50cfde4fc31c9901fcd6ade5fa8b0e0077991189e42fbec3c7e50c23c4a62d44afe3d6cf9443e5e492d48', 'jcbautista12@hotmail.com', 'active', '0', '2016-10-24 14:46:01', 'no-pic.png', 'Coordinacion Operativa', '1,2', '1477297359', '1477297267', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `presupuestos`
--
ALTER TABLE `presupuestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
