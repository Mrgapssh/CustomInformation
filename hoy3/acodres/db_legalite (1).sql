-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2016 a las 00:44:59
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_legalite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE IF NOT EXISTS `archivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nombrearchivo` varchar(200) NOT NULL,
  `archivo` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `user_id`, `nombrearchivo`, `archivo`, `descripcion`, `fecha`) VALUES
(2, 9, 'Prueba', '674b689bbf77afa40865f0292e816c9b.jpg', '&lt;p&gt;xx&lt;/p&gt;', '2016-03-05 10:29:50'),
(4, 10, 'xxx', 'd2733cd987b5eebdd675e9110c86d7cd.jpg', '&lt;p&gt;xxx&lt;/p&gt;', '2016-03-18 18:32:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `core`
--

CREATE TABLE IF NOT EXISTS `core` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `money_format` int(20) unsigned NOT NULL DEFAULT '1',
  `money_currency_position` int(20) unsigned NOT NULL DEFAULT '1',
  `pdf_font` varchar(255) DEFAULT 'NotoSans',
  `pdf_path` int(10) unsigned NOT NULL DEFAULT '1',
  `registration` int(10) unsigned NOT NULL DEFAULT '0',
  `templateportal` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `core`
--

INSERT INTO `core` (`id`, `version`, `domain`, `email`, `company`, `tax`, `currency`, `autobackup`, `cronjob`, `last_cronjob`, `last_autobackup`, `invoice_terms`, `company_reference`, `project_reference`, `invoice_reference`, `subscription_reference`, `ticket_reference`, `date_format`, `date_time_format`, `invoice_mail_subject`, `pw_reset_mail_subject`, `pw_reset_link_mail_subject`, `credentials_mail_subject`, `notification_mail_subject`, `language`, `invoice_address`, `invoice_city`, `invoice_contact`, `invoice_tel`, `subscription_mail_subject`, `logo`, `template`, `paypal`, `paypal_currency`, `paypal_account`, `invoice_logo`, `pc`, `vat`, `ticket_email`, `ticket_default_owner`, `ticket_default_queue`, `ticket_default_type`, `ticket_default_status`, `ticket_config_host`, `ticket_config_login`, `ticket_config_pass`, `ticket_config_port`, `ticket_config_ssl`, `ticket_config_email`, `ticket_config_flags`, `ticket_config_search`, `ticket_config_timestamp`, `ticket_config_mailbox`, `ticket_config_delete`, `ticket_config_active`, `ticket_config_imap`, `stripe`, `stripe_key`, `stripe_p_key`, `stripe_currency`, `bank_transfer`, `bank_transfer_text`, `estimate_terms`, `estimate_prefix`, `estimate_pdf_template`, `invoice_pdf_template`, `second_tax`, `estimate_mail_subject`, `money_format`, `money_currency_position`, `pdf_font`, `pdf_path`, `registration`, `templateportal`, `description`, `keywords`, `facebook`, `twitter`) VALUES
(1, '2.3.3', 'www.legalitesas.com', 'contacto@legalitesas.com', 'LEGALITE SAS', '0', '$', 1, 1, 0, 0, 'Thank you for your business. We do expect payment within {due_date}, so please process this invoice within that time.', 41002, 51001, 31001, 61001, 10001, 'Y/m/d', 'g:i A', 'New Invoice', 'Password Reset', 'Password Reset', 'Login Details', 'Notification', 'spanish', 'Av. 6 N# 35 -147  ', 'CUCUTA - NORTE DE SANTANDER', 'LEGALITE SAS', '311 555 5555', 'New Subscription', 'files/media/logo3.png', 'blueline', '0', 'USD', '', 'assets/blueline/images/FC2_logo_dark.png', 'c1030dd6-2669-4435-a3d8-96002a2959b6', '', NULL, 1, 1, 1, 'new', NULL, NULL, NULL, NULL, NULL, NULL, '/notls', 'UNSEEN', 0, NULL, 0, 0, 1, 0, NULL, '', 'USD', 0, '', '', 'EST', 'templates/estimate/whitelight', 'templates/invoice/blueline', '', 'New Estimate #{estimate_id}', 1, 1, 'NotoSans', 1, 0, 'web', 'Para el GRUPO LEGALITE es una filosofía, un objetivo y un compromiso, basado en la satisfacción plena de la Organización, de sus clientes y sus usuarios. Para ello prestamos una Asistencia Profesional Integral con el mejor Recurso Humano, Capacitado y Convencido de su labor, respaldados por un estricto control de procesos, con el fin de garantizar el cumplimiento de las especificaciones del servicio, para así lograr la satisfacción del cliente y buscar un mejoramiento continuo del Sistema de Gestión de Calidad.', 'Asesor Gerencial, Asesor Jurídico, Asesor Contable', 'https://www.facebook.com', '#');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT '0',
  `link` varchar(250) DEFAULT '0',
  `type` varchar(250) DEFAULT '0',
  `icon` varchar(150) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`id`, `name`, `link`, `type`, `icon`, `sort`) VALUES
(1, 'Dashboard', 'dashboard', 'main', 'icon-th', 1),
(9, 'Settings', 'settings', 'main', 'icon-cog', 20),
(10, 'QuickAccess', 'quickaccess', 'widget', NULL, 50),
(11, 'User Online', 'useronline', 'widget', NULL, 51),
(20, 'Usuarios', 'settings/users', 'main', 'icon-user', 3),
(21, 'archivos', 'archivos', 'main', 'icon-file', 4),
(22, 'backup', 'settings/backup', 'main', 'icon-briefcase', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pw_reset`
--

CREATE TABLE IF NOT EXISTS `pw_reset` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT '0',
  `timestamp` varchar(250) DEFAULT '0',
  `token` varchar(250) DEFAULT '0',
  `user` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `quinessomos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `archivo` varchar(200) NOT NULL,
  `nombrearchivo` varchar(200) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `contenido` text NOT NULL,
  `estado` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `queue` bigint(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `nit`, `firstname`, `lastname`, `hashed_password`, `email`, `status`, `admin`, `created`, `userpic`, `title`, `access`, `last_active`, `last_login`, `queue`) VALUES
(9, 'Admin', '123', 'carlos', 's', '65122050e1829fcd69a3811d784e682bb8dc3e1adaccd3d5737c38b729db5655e2eed4e26f3aa5b53e3dd69829417d1678cc9d17cc66af7f3ec4203df8061447', 'carlossuarezquintero@gmail.com', 'active', '1', '2013-01-03 03:00:00', 'no-pic.png', 'Empresa', '1,20,21,22,9,10,11', '0', '1458343104', 0),
(10, 'carlos', '', 'carlos', 'suarez', '48d9d3f2088e8b7f5c0c5213114d3f39299f7fa645ceadb87f885656002692ad2c31fcf1e05ceee42de0fb457fd937136e4b9d6888bdbb245d30f410e47ec765', 'carlossuarezquintero@gmail.com', 'active', '1', '2016-03-11 20:52:27', 'no-pic.png', 'Empresa', '1,9,10', '0', '1457711634', 0),
(11, 'victor', '123456', 'victor', 'arias', '9b38d18576b386be96b4bc5abaa442d8064b71ccf869adf84b818cfa215c298181a1699403787f1669b0c71e2276ab2adfb1e3d3c0b8fccc07ab6a11eabffec1', 'v@hotmail.com', 'active', '1', '2016-03-11 20:55:17', 'no-pic.png', 'Empresa', '1,9,10', '0', '1458253319', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
