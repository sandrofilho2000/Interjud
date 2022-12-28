-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Ago-2021 às 17:27
-- Versão do servidor: 10.3.30-MariaDB-cll-lve
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `damixcod_dinamico_interjud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `nome` varchar(50) DEFAULT NULL,
  `email_admin` varchar(50) DEFAULT NULL,
  `senha_admin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`nome`, `email_admin`, `senha_admin`) VALUES
('André', 'andre@gmail.com', '903c118e874ff4865a0f86f47c9005a2'),
('Bruno', 'bruno@gmail.com', '903c118e874ff4865a0f86f47c9005a2'),
('Daniel', 'daniel@gmail.com', 'aa1bf4646de67fd9086cf6c79007026c'),
('Daniel Mateus', 'danielmxsilva@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `creditos`
--

CREATE TABLE `creditos` (
  `nome` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `idcreditos` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `num_processo` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `honorarios_contratuais` varchar(50) NOT NULL,
  `honorarios_sucubenciais` varchar(50) NOT NULL,
  `fase_processual` varchar(50) NOT NULL,
  `tempo_recebimento` varchar(50) NOT NULL,
  `valor_autor` varchar(50) NOT NULL,
  `valor_honorarios` varchar(50) NOT NULL,
  `favorito` varchar(1) DEFAULT NULL,
  `status_rating` varchar(40) DEFAULT NULL,
  `background` varchar(40) DEFAULT NULL,
  `rating` decimal(5,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `creditos`
--

INSERT INTO `creditos` (`nome`, `valor`, `idcreditos`, `id_user`, `num_processo`, `classe`, `materia`, `honorarios_contratuais`, `honorarios_sucubenciais`, `fase_processual`, `tempo_recebimento`, `valor_autor`, `valor_honorarios`, `favorito`, `status_rating`, `background`, `rating`) VALUES
('Sandro Filho', 'R$20.000', 1, 1, '1234567-12.1234.1.12.0', 'Cívil', '7%', '2%', 'undefined', 'introdutória', '3 meses', 'R$5000,00', '7%', 'S', 'avaliado', 'default.png', 4.0),
('InterJud S.A', 'R$5000', 2, 2, '1234567-12.1234.1.12.0000', 'Trabalhista', '10%', '5%', 'undefined', 'decisória', '10 meses', 'R$5000,00', '7%', 'N', 'aguardando', 'interjud_logo.png', 5.0),
('Aurora Web Desing', 'R$10000', 3, 3, '1234567-12.1234.1.12.0000', 'Trabalhista', '25%', '3%', 'undefined', 'decisória', '', 'R$10000,00', '7%', 'N', 'avaliado', 'AURORA.PNG', 0.0),
('Daniel', 'R$15000', 5, 4, '1234567-12.1234.1.12.0000', 'Cívil', '25%', '3%', 'undefined', 'decisória', '', 'R$15000,00', '10%', 'S', 'aguardando', 'default.png', 0.0),
('Bradesco', 'R$1,000,000', 25, 3, '1234567-12.1234.1.12.0000', 'Consumidor', '10%', '5%', '6%', 'Introdutória', '10 meses', '10000', '10%', NULL, 'aguardando', 'bradesco.png', 2.0),
('Santander', 'R$1,000,000', 26, 1, '1234567-12.1234.1.12.0000', 'Consumidor', '20%', '5%', '0', 'Introdutória', '5 meses', '10000', '10%', NULL, 'avaliado', 'santander.png', 5.0),
('Itaú', '$1,000,000', 33, 2, '1234567-12.1234.1.12.0000', 'Cível', '10%', '5%', '6%', 'Introdutória', '57 meses', '$1,000,000', '10%', NULL, 'avaliado', 'itau.png', 4.0),
('NuBank', '$10,000,000', 34, 1, '1234567-12.1234.1.12.0000', 'Consumidor', '20%', '5%', '0', 'Introdutória', '5 meses', '$1,000,000', '10%', NULL, 'avaliado', 'nubank.png', 4.0),
('C6 BANK', '$1,000,000', 35, 1, '1234567-12.1234.1.12.0000', 'Trabalhista', '20%', '5%', '0', 'Introdutória', '21 meses', '$1,000,000', '10%', NULL, 'avaliado', 'C6bank.png', 5.0),
('Coca Cola', '$1,000,000', 42, 1, '1234567-12.1234.1.12.0000', 'Consumidor', '10%', '5%', '6%', 'Introdutória', '$_POST[tempo_recebimento_rating]', '$1,000,000', '10%', NULL, 'aguardando', 'images.jpg', 0.0),
('Spotify', '$10,000,000', 43, 6, '1234567-12.1234.1.12.0000', 'Consumidor', '20%', '5%', '0', 'Introdutória', '10 meses', '$1,000,000', '10%', NULL, 'avaliado', 'spotify.jpg', 3.0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pwd_reset`
--

CREATE TABLE `pwd_reset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.online`
--

INSERT INTO `tb_admin.online` (`id`, `ip`, `ultima_acao`, `token`) VALUES
(143, '45.230.53.127', '2021-08-12 15:16:23', '6115646618bf4'),
(144, '201.82.36.168', '2021-08-12 15:38:25', '6115654f7186d'),
(145, '45.230.53.127', '2021-08-12 16:46:22', '6115782c816c9'),
(146, '179.108.204.196', '2021-08-12 16:53:20', '61157858b4065');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.usuario`
--

CREATE TABLE `tb_admin.usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.usuario`
--

INSERT INTO `tb_admin.usuario` (`id`, `user`, `password`, `img`, `nome`, `cargo`) VALUES
(3, 'admin', 'admin', '60ff16c166459.png', 'Daniel Mateus', 2),
(43, 'subadmin', 'admin', '6104098675b72.jpg', 'bruno belli', 1),
(44, 'subadmin02', 'admin', '6104245921b0e.jpg', 'André', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.visitas`
--

CREATE TABLE `tb_admin.visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.visitas`
--

INSERT INTO `tb_admin.visitas` (`id`, `ip`, `dia`) VALUES
(13, '::1', '2021-07-17'),
(14, '15151515', '2021-07-17'),
(15, '445156165', '2021-07-16'),
(16, 'fdasf', '2021-07-16'),
(17, 'fdsasdf', '2021-07-17'),
(18, '::1', '2021-07-17'),
(19, '::1', '2021-07-20'),
(20, '::1', '2021-07-26'),
(21, '::1', '2021-07-30'),
(22, '45.230.53.127', '2021-07-30'),
(23, '45.230.53.127', '2021-07-30'),
(24, '45.230.53.127', '2021-07-30'),
(25, '45.230.53.127', '2021-07-30'),
(26, '45.230.53.127', '2021-07-30'),
(27, '45.230.53.127', '2021-07-30'),
(28, '45.230.53.127', '2021-07-30'),
(29, '45.230.53.127', '2021-07-30'),
(30, '45.230.53.127', '2021-07-30'),
(31, '45.230.53.127', '2021-07-30'),
(32, '45.230.53.127', '2021-07-30'),
(33, '45.230.53.127', '2021-07-30'),
(34, '45.230.53.127', '2021-07-30'),
(35, '45.230.53.127', '2021-07-30'),
(36, '45.230.53.127', '2021-07-30'),
(37, '45.230.53.127', '2021-07-30'),
(38, '45.230.53.127', '2021-07-30'),
(39, '45.230.53.127', '2021-07-30'),
(40, '45.230.53.127', '2021-07-30'),
(41, '45.230.53.127', '2021-07-30'),
(42, '45.230.53.127', '2021-07-30'),
(43, '45.230.53.127', '2021-07-30'),
(44, '45.230.53.127', '2021-07-30'),
(45, '45.230.53.127', '2021-07-30'),
(46, '45.230.53.127', '2021-07-30'),
(47, '45.230.53.127', '2021-07-30'),
(48, '45.230.53.127', '2021-07-30'),
(49, '45.230.53.127', '2021-07-30'),
(50, '45.230.53.127', '2021-07-30'),
(51, '45.230.53.127', '2021-07-30'),
(52, '45.230.53.127', '2021-07-30'),
(53, '45.230.53.127', '2021-07-30'),
(54, '45.230.53.127', '2021-07-30'),
(55, '45.230.53.127', '2021-07-30'),
(56, '45.230.53.127', '2021-07-30'),
(57, '45.230.53.127', '2021-07-30'),
(58, '45.230.53.127', '2021-07-30'),
(59, '45.230.53.127', '2021-07-30'),
(60, '45.230.53.127', '2021-07-30'),
(61, '45.230.53.127', '2021-07-30'),
(62, '45.230.53.127', '2021-07-30'),
(63, '45.230.53.127', '2021-07-30'),
(64, '45.230.53.127', '2021-07-30'),
(65, '45.230.53.127', '2021-07-30'),
(66, '45.230.53.127', '2021-07-30'),
(67, '45.230.53.127', '2021-07-30'),
(68, '45.230.53.127', '2021-07-30'),
(69, '45.230.53.127', '2021-07-30'),
(70, '177.25.195.10', '2021-07-30'),
(71, '177.25.195.10', '2021-07-30'),
(72, '179.108.204.196', '2021-07-30'),
(73, '177.25.195.10', '2021-07-30'),
(74, '45.230.53.127', '2021-07-30'),
(75, '45.230.53.127', '2021-07-30'),
(76, '45.230.53.127', '2021-07-30'),
(77, '45.230.53.127', '2021-07-30'),
(78, '45.230.53.127', '2021-07-30'),
(79, '45.230.53.127', '2021-07-30'),
(80, '45.230.53.127', '2021-07-30'),
(81, '179.108.204.196', '2021-07-30'),
(82, '45.230.53.127', '2021-07-30'),
(83, '45.230.53.127', '2021-07-30'),
(84, '45.230.53.127', '2021-07-30'),
(85, '45.230.53.127', '2021-07-30'),
(86, '45.230.53.127', '2021-07-30'),
(87, '201.82.36.168', '2021-07-30'),
(88, '201.82.36.168', '2021-07-30'),
(89, '45.230.53.127', '2021-07-30'),
(90, '45.230.53.127', '2021-07-30'),
(91, '45.230.53.127', '2021-07-30'),
(92, '45.230.53.127', '2021-07-30'),
(93, '45.230.53.127', '2021-07-30'),
(94, '45.230.53.127', '2021-07-30'),
(95, '45.230.53.127', '2021-07-30'),
(96, '45.230.53.127', '2021-07-30'),
(97, '45.230.53.127', '2021-07-30'),
(98, '45.230.53.127', '2021-07-30'),
(99, '45.230.53.127', '2021-07-30'),
(100, '45.230.53.127', '2021-07-30'),
(101, '45.230.53.127', '2021-07-30'),
(102, '45.230.53.127', '2021-07-30'),
(103, '45.230.53.127', '2021-07-30'),
(104, '45.230.53.127', '2021-07-30'),
(105, '45.230.53.127', '2021-07-30'),
(106, '45.230.53.127', '2021-07-30'),
(107, '45.230.53.127', '2021-07-30'),
(108, '45.230.53.127', '2021-07-30'),
(109, '45.230.53.127', '2021-07-30'),
(110, '45.230.53.127', '2021-07-30'),
(111, '45.230.53.127', '2021-07-30'),
(112, '45.230.53.127', '2021-07-30'),
(113, '45.230.53.127', '2021-07-30'),
(114, '45.230.53.127', '2021-07-30'),
(115, '45.230.53.127', '2021-07-30'),
(116, '45.230.53.127', '2021-07-30'),
(117, '45.230.53.127', '2021-07-30'),
(118, '45.230.53.127', '2021-07-30'),
(119, '45.230.53.127', '2021-07-30'),
(120, '45.230.53.127', '2021-07-30'),
(121, '45.230.53.127', '2021-07-30'),
(122, '45.230.53.127', '2021-07-30'),
(123, '45.230.53.127', '2021-07-30'),
(124, '45.230.53.127', '2021-07-30'),
(125, '45.230.53.127', '2021-07-30'),
(126, '45.230.53.127', '2021-07-30'),
(127, '45.230.53.127', '2021-07-30'),
(128, '45.230.53.127', '2021-07-30'),
(129, '45.230.53.127', '2021-07-30'),
(130, '45.230.53.127', '2021-07-30'),
(131, '45.230.53.127', '2021-07-30'),
(132, '45.230.53.127', '2021-07-30'),
(133, '45.230.53.127', '2021-07-30'),
(134, '45.230.53.127', '2021-07-30'),
(135, '45.230.53.127', '2021-07-30'),
(136, '45.230.53.127', '2021-07-30'),
(137, '45.230.53.127', '2021-07-30'),
(138, '45.230.53.127', '2021-07-30'),
(139, '45.230.53.127', '2021-07-30'),
(140, '45.230.53.127', '2021-07-30'),
(141, '45.230.53.127', '2021-07-30'),
(142, '45.230.53.127', '2021-07-30'),
(143, '45.230.53.127', '2021-07-30'),
(144, '45.230.53.127', '2021-07-30'),
(145, '45.230.53.127', '2021-07-30'),
(146, '45.230.53.127', '2021-07-30'),
(147, '45.230.53.127', '2021-07-30'),
(148, '45.230.53.127', '2021-07-30'),
(149, '45.230.53.127', '2021-07-30'),
(150, '45.230.53.127', '2021-07-30'),
(151, '45.230.53.127', '2021-07-30'),
(152, '45.230.53.127', '2021-07-30'),
(153, '45.230.53.127', '2021-07-30'),
(154, '45.230.53.127', '2021-07-30'),
(155, '45.230.53.127', '2021-07-30'),
(156, '45.230.53.127', '2021-07-30'),
(157, '45.230.53.127', '2021-07-30'),
(158, '45.230.53.127', '2021-07-30'),
(159, '45.230.53.127', '2021-07-30'),
(160, '45.230.53.127', '2021-07-30'),
(161, '45.230.53.127', '2021-07-30'),
(162, '45.230.53.127', '2021-07-30'),
(163, '45.230.53.127', '2021-07-30'),
(164, '45.230.53.127', '2021-07-30'),
(165, '45.230.53.127', '2021-07-30'),
(166, '45.230.53.127', '2021-07-30'),
(167, '45.230.53.127', '2021-07-30'),
(168, '201.82.36.168', '2021-07-30'),
(169, '45.230.53.127', '2021-07-30'),
(170, '45.230.53.127', '2021-07-30'),
(171, '45.230.53.127', '2021-07-30'),
(172, '45.230.53.127', '2021-07-30'),
(173, '201.82.36.168', '2021-07-30'),
(174, '45.230.53.127', '2021-07-30'),
(175, '45.230.53.127', '2021-07-30'),
(176, '45.230.53.127', '2021-07-30'),
(177, '45.230.53.127', '2021-07-30'),
(178, '45.230.53.127', '2021-07-30'),
(179, '187.58.66.137', '2021-07-30'),
(180, '45.230.53.127', '2021-07-30'),
(181, '45.230.53.127', '2021-07-30'),
(182, '51.15.191.81', '2021-07-31'),
(183, '195.154.61.206', '2021-07-31'),
(184, '195.154.61.206', '2021-07-31'),
(185, '45.230.53.127', '2021-07-31'),
(186, '45.230.53.127', '2021-07-31'),
(187, '45.230.53.127', '2021-07-31'),
(188, '45.230.53.127', '2021-07-31'),
(189, '45.230.53.127', '2021-07-31'),
(190, '45.230.53.127', '2021-07-31'),
(191, '45.230.53.127', '2021-07-31'),
(192, '45.230.53.127', '2021-07-31'),
(193, '45.230.53.127', '2021-07-31'),
(194, '45.230.53.127', '2021-07-31'),
(195, '45.230.53.127', '2021-07-31'),
(196, '45.230.53.127', '2021-07-31'),
(197, '45.230.53.127', '2021-07-31'),
(198, '45.230.53.127', '2021-07-31'),
(199, '45.230.53.127', '2021-07-31'),
(200, '45.230.53.127', '2021-07-31'),
(201, '45.230.53.127', '2021-07-31'),
(202, '45.230.53.127', '2021-07-31'),
(203, '45.230.53.127', '2021-07-31'),
(204, '45.230.53.127', '2021-07-31'),
(205, '45.230.53.127', '2021-07-31'),
(206, '45.230.53.127', '2021-07-31'),
(207, '45.230.53.127', '2021-07-31'),
(208, '45.230.53.127', '2021-07-31'),
(209, '45.230.53.127', '2021-07-31'),
(210, '45.230.53.127', '2021-07-31'),
(211, '45.230.53.127', '2021-07-31'),
(212, '45.230.53.127', '2021-07-31'),
(213, '45.230.53.127', '2021-07-31'),
(214, '45.230.53.127', '2021-07-31'),
(215, '45.230.53.127', '2021-07-31'),
(216, '45.230.53.127', '2021-07-31'),
(217, '45.230.53.127', '2021-07-31'),
(218, '45.230.53.127', '2021-07-31'),
(219, '45.230.53.127', '2021-07-31'),
(220, '45.230.53.127', '2021-07-31'),
(221, '187.26.223.170', '2021-07-31'),
(222, '45.233.48.97', '2021-08-01'),
(223, '195.154.61.206', '2021-08-01'),
(224, '62.4.14.198', '2021-08-01'),
(225, '62.4.14.198', '2021-08-01'),
(226, '195.154.61.206', '2021-08-01'),
(227, '212.83.146.233', '2021-08-01'),
(228, '51.15.191.81', '2021-08-01'),
(229, '45.230.53.127', '2021-08-02'),
(230, '45.230.53.127', '2021-08-02'),
(231, '45.230.53.127', '2021-08-02'),
(232, '45.230.53.127', '2021-08-02'),
(233, '45.230.53.127', '2021-08-02'),
(234, '45.230.53.127', '2021-08-02'),
(235, '45.230.53.127', '2021-08-02'),
(236, '45.230.53.127', '2021-08-02'),
(237, '45.230.53.127', '2021-08-02'),
(238, '45.230.53.127', '2021-08-02'),
(239, '45.230.53.127', '2021-08-02'),
(240, '45.230.53.127', '2021-08-02'),
(241, '45.230.53.127', '2021-08-02'),
(242, '45.230.53.127', '2021-08-02'),
(243, '45.230.53.127', '2021-08-02'),
(244, '45.230.53.127', '2021-08-02'),
(245, '45.230.53.127', '2021-08-02'),
(246, '45.230.53.127', '2021-08-02'),
(247, '45.230.53.127', '2021-08-02'),
(248, '45.230.53.127', '2021-08-02'),
(249, '45.230.53.127', '2021-08-02'),
(250, '45.230.53.127', '2021-08-03'),
(251, '45.230.53.127', '2021-08-03'),
(252, '45.230.53.127', '2021-08-03'),
(253, '45.230.53.127', '2021-08-03'),
(254, '45.230.53.127', '2021-08-03'),
(255, '45.230.53.127', '2021-08-03'),
(256, '45.230.53.127', '2021-08-03'),
(257, '45.230.53.127', '2021-08-03'),
(258, '45.230.53.127', '2021-08-03'),
(259, '45.230.53.127', '2021-08-03'),
(260, '45.230.53.127', '2021-08-03'),
(261, '45.230.53.127', '2021-08-03'),
(262, '45.230.53.127', '2021-08-03'),
(263, '45.230.53.127', '2021-08-03'),
(264, '45.230.53.127', '2021-08-03'),
(265, '45.230.53.127', '2021-08-03'),
(266, '45.230.53.127', '2021-08-03'),
(267, '45.230.53.127', '2021-08-03'),
(268, '45.230.53.127', '2021-08-03'),
(269, '45.230.53.127', '2021-08-03'),
(270, '45.230.53.127', '2021-08-03'),
(271, '45.230.53.127', '2021-08-03'),
(272, '45.230.53.127', '2021-08-03'),
(273, '45.230.53.127', '2021-08-03'),
(274, '45.230.53.127', '2021-08-03'),
(275, '45.230.53.127', '2021-08-03'),
(276, '45.230.53.127', '2021-08-03'),
(277, '179.108.204.196', '2021-08-03'),
(278, '201.82.36.168', '2021-08-04'),
(279, '187.116.94.163', '2021-08-04'),
(280, '45.230.53.127', '2021-08-05'),
(281, '45.230.53.127', '2021-08-05'),
(282, '45.230.53.127', '2021-08-05'),
(283, '45.230.53.127', '2021-08-05'),
(284, '45.230.53.127', '2021-08-05'),
(285, '45.230.53.127', '2021-08-05'),
(286, '45.230.53.127', '2021-08-05'),
(287, '45.230.53.127', '2021-08-05'),
(288, '45.230.53.127', '2021-08-05'),
(289, '45.230.53.127', '2021-08-05'),
(290, '45.230.53.127', '2021-08-05'),
(291, '45.230.53.127', '2021-08-05'),
(292, '45.230.53.127', '2021-08-05'),
(293, '45.230.53.127', '2021-08-05'),
(294, '45.230.53.127', '2021-08-05'),
(295, '45.230.53.127', '2021-08-05'),
(296, '187.106.51.241', '2021-08-06'),
(297, '187.103.72.6', '2021-08-06'),
(298, '45.230.53.127', '2021-08-06'),
(299, '45.230.53.127', '2021-08-06'),
(300, '45.230.53.127', '2021-08-06'),
(301, '45.230.53.127', '2021-08-06'),
(302, '45.230.53.127', '2021-08-06'),
(303, '45.230.53.127', '2021-08-06'),
(304, '45.230.53.127', '2021-08-06'),
(305, '45.230.53.127', '2021-08-06'),
(306, '45.230.53.127', '2021-08-06'),
(307, '45.230.53.127', '2021-08-06'),
(308, '45.230.53.127', '2021-08-06'),
(309, '45.230.53.127', '2021-08-06'),
(310, '45.230.53.127', '2021-08-06'),
(311, '45.230.53.127', '2021-08-06'),
(312, '45.230.53.127', '2021-08-06'),
(313, '45.230.53.127', '2021-08-06'),
(314, '144.86.173.149', '2021-08-07'),
(315, '45.230.53.127', '2021-08-07'),
(316, '45.230.53.127', '2021-08-07'),
(317, '92.118.160.37', '2021-08-07'),
(318, '201.68.175.40', '2021-08-07'),
(319, '35.237.4.214', '2021-08-07'),
(320, '37.120.232.52', '2021-08-07'),
(321, '201.68.175.40', '2021-08-07'),
(322, '201.68.175.40', '2021-08-07'),
(323, '201.68.175.40', '2021-08-07'),
(324, '201.68.175.40', '2021-08-07'),
(325, '201.68.175.40', '2021-08-07'),
(326, '201.68.175.40', '2021-08-07'),
(327, '201.68.175.40', '2021-08-07'),
(328, '201.68.175.40', '2021-08-07'),
(329, '201.68.175.40', '2021-08-07'),
(330, '201.68.175.40', '2021-08-07'),
(331, '201.68.175.40', '2021-08-07'),
(332, '201.68.175.40', '2021-08-07'),
(333, '201.68.175.40', '2021-08-07'),
(334, '201.68.175.40', '2021-08-07'),
(335, '201.68.175.40', '2021-08-07'),
(336, '201.68.175.40', '2021-08-07'),
(337, '201.68.175.40', '2021-08-07'),
(338, '201.68.175.40', '2021-08-07'),
(339, '201.68.175.40', '2021-08-07'),
(340, '201.68.175.40', '2021-08-07'),
(341, '201.68.175.40', '2021-08-07'),
(342, '201.68.175.40', '2021-08-07'),
(343, '201.68.175.40', '2021-08-07'),
(344, '201.68.175.40', '2021-08-07'),
(345, '201.68.175.40', '2021-08-07'),
(346, '201.68.175.40', '2021-08-07'),
(347, '201.68.175.40', '2021-08-07'),
(348, '201.68.175.40', '2021-08-07'),
(349, '194.31.97.8', '2021-08-07'),
(350, '194.31.97.8', '2021-08-07'),
(351, '194.31.97.8', '2021-08-07'),
(352, '194.31.97.8', '2021-08-07'),
(353, '194.31.97.8', '2021-08-07'),
(354, '194.31.97.8', '2021-08-07'),
(355, '194.31.97.8', '2021-08-07'),
(356, '194.31.97.8', '2021-08-07'),
(357, '194.31.97.8', '2021-08-07'),
(358, '194.31.97.8', '2021-08-07'),
(359, '194.31.97.8', '2021-08-07'),
(360, '194.31.97.8', '2021-08-07'),
(361, '194.31.97.8', '2021-08-07'),
(362, '194.31.97.8', '2021-08-07'),
(363, '194.31.97.8', '2021-08-07'),
(364, '194.31.97.8', '2021-08-07'),
(365, '194.31.97.8', '2021-08-07'),
(366, '194.31.97.8', '2021-08-07'),
(367, '194.31.97.8', '2021-08-07'),
(368, '194.31.97.8', '2021-08-07'),
(369, '194.31.97.8', '2021-08-07'),
(370, '194.31.97.8', '2021-08-07'),
(371, '194.31.97.8', '2021-08-07'),
(372, '194.31.97.8', '2021-08-07'),
(373, '194.31.97.8', '2021-08-07'),
(374, '194.31.97.8', '2021-08-07'),
(375, '194.31.97.8', '2021-08-07'),
(376, '194.31.97.8', '2021-08-07'),
(377, '194.31.97.8', '2021-08-07'),
(378, '194.31.97.8', '2021-08-07'),
(379, '194.31.97.8', '2021-08-07'),
(380, '194.31.97.8', '2021-08-07'),
(381, '194.31.97.8', '2021-08-07'),
(382, '194.31.97.8', '2021-08-07'),
(383, '194.31.97.8', '2021-08-07'),
(384, '194.31.97.8', '2021-08-07'),
(385, '194.31.97.8', '2021-08-07'),
(386, '194.31.97.8', '2021-08-07'),
(387, '194.31.97.8', '2021-08-07'),
(388, '194.31.97.8', '2021-08-07'),
(389, '194.31.97.8', '2021-08-07'),
(390, '194.31.97.8', '2021-08-07'),
(391, '194.31.97.8', '2021-08-07'),
(392, '194.31.97.8', '2021-08-07'),
(393, '194.31.97.8', '2021-08-07'),
(394, '194.31.97.8', '2021-08-07'),
(395, '194.31.97.8', '2021-08-07'),
(396, '194.31.97.8', '2021-08-07'),
(397, '194.31.97.8', '2021-08-07'),
(398, '194.31.97.8', '2021-08-07'),
(399, '194.31.97.8', '2021-08-07'),
(400, '194.31.97.8', '2021-08-07'),
(401, '194.31.97.8', '2021-08-07'),
(402, '194.31.97.8', '2021-08-07'),
(403, '194.31.97.8', '2021-08-07'),
(404, '194.31.97.8', '2021-08-07'),
(405, '194.31.97.8', '2021-08-07'),
(406, '194.31.97.8', '2021-08-07'),
(407, '194.31.97.8', '2021-08-07'),
(408, '194.31.97.8', '2021-08-07'),
(409, '194.31.97.8', '2021-08-07'),
(410, '194.31.97.8', '2021-08-07'),
(411, '194.31.97.8', '2021-08-07'),
(412, '194.31.97.8', '2021-08-07'),
(413, '194.31.97.8', '2021-08-07'),
(414, '194.31.97.8', '2021-08-07'),
(415, '194.31.97.8', '2021-08-07'),
(416, '194.31.97.8', '2021-08-07'),
(417, '194.31.97.8', '2021-08-07'),
(418, '92.118.160.41', '2021-08-09'),
(419, '201.82.36.168', '2021-08-09'),
(420, '187.104.128.65', '2021-08-09'),
(421, '192.144.102.250', '2021-08-09'),
(422, '144.86.173.90', '2021-08-11'),
(423, '45.230.53.127', '2021-08-11'),
(424, '45.230.53.127', '2021-08-11'),
(425, '45.230.53.127', '2021-08-11'),
(426, '45.230.53.127', '2021-08-11'),
(427, '45.230.53.127', '2021-08-11'),
(428, '45.230.53.127', '2021-08-11'),
(429, '45.230.53.127', '2021-08-11'),
(430, '45.230.53.127', '2021-08-12'),
(431, '45.230.53.127', '2021-08-12'),
(432, '45.230.53.127', '2021-08-12'),
(433, '45.230.53.127', '2021-08-12'),
(434, '45.230.53.127', '2021-08-12'),
(435, '45.230.53.127', '2021-08-12'),
(436, '45.230.53.127', '2021-08-12'),
(437, '45.230.53.127', '2021-08-12'),
(438, '45.230.53.127', '2021-08-12'),
(439, '45.230.53.127', '2021-08-12'),
(440, '45.230.53.127', '2021-08-12'),
(441, '45.230.53.127', '2021-08-12'),
(442, '45.230.53.127', '2021-08-12'),
(443, '45.230.53.127', '2021-08-12'),
(444, '45.230.53.127', '2021-08-12'),
(445, '45.230.53.127', '2021-08-12'),
(446, '45.230.53.127', '2021-08-12'),
(447, '45.230.53.127', '2021-08-12'),
(448, '45.230.53.127', '2021-08-12'),
(449, '45.230.53.127', '2021-08-12'),
(450, '45.230.53.127', '2021-08-12'),
(451, '45.230.53.127', '2021-08-12'),
(452, '45.230.53.127', '2021-08-12'),
(453, '45.230.53.127', '2021-08-12'),
(454, '45.230.53.127', '2021-08-12'),
(455, '45.230.53.127', '2021-08-12'),
(456, '45.230.53.127', '2021-08-12'),
(457, '45.230.53.127', '2021-08-12'),
(458, '45.230.53.127', '2021-08-12'),
(459, '45.230.53.127', '2021-08-12'),
(460, '45.230.53.127', '2021-08-12'),
(461, '45.230.53.127', '2021-08-12'),
(462, '45.230.53.127', '2021-08-12'),
(463, '45.230.53.127', '2021-08-12'),
(464, '45.230.53.127', '2021-08-12'),
(465, '45.230.53.127', '2021-08-12'),
(466, '45.230.53.127', '2021-08-12'),
(467, '45.230.53.127', '2021-08-12'),
(468, '45.230.53.127', '2021-08-12'),
(469, '45.230.53.127', '2021-08-12'),
(470, '45.230.53.127', '2021-08-12'),
(471, '45.230.53.127', '2021-08-12'),
(472, '45.230.53.127', '2021-08-12'),
(473, '45.230.53.127', '2021-08-12'),
(474, '45.230.53.127', '2021-08-12'),
(475, '45.230.53.127', '2021-08-12'),
(476, '45.230.53.127', '2021-08-12'),
(477, '45.230.53.127', '2021-08-12'),
(478, '45.230.53.127', '2021-08-12'),
(479, '45.230.53.127', '2021-08-12'),
(480, '45.230.53.127', '2021-08-12'),
(481, '45.230.53.127', '2021-08-12'),
(482, '45.230.53.127', '2021-08-12'),
(483, '45.230.53.127', '2021-08-12'),
(484, '45.230.53.127', '2021-08-12'),
(485, '45.230.53.127', '2021-08-12'),
(486, '45.230.53.127', '2021-08-12'),
(487, '45.230.53.127', '2021-08-12'),
(488, '45.230.53.127', '2021-08-12'),
(489, '45.230.53.127', '2021-08-12'),
(490, '45.230.53.127', '2021-08-12'),
(491, '45.230.53.127', '2021-08-12'),
(492, '45.230.53.127', '2021-08-12'),
(493, '45.230.53.127', '2021-08-12'),
(494, '45.230.53.127', '2021-08-12'),
(495, '45.230.53.127', '2021-08-12'),
(496, '45.230.53.127', '2021-08-12'),
(497, '45.230.53.127', '2021-08-12'),
(498, '45.230.53.127', '2021-08-12'),
(499, '45.230.53.127', '2021-08-12'),
(500, '45.230.53.127', '2021-08-12'),
(501, '45.230.53.127', '2021-08-12'),
(502, '45.230.53.127', '2021-08-12'),
(503, '45.230.53.127', '2021-08-12'),
(504, '45.230.53.127', '2021-08-12'),
(505, '45.230.53.127', '2021-08-12'),
(506, '45.230.53.127', '2021-08-12'),
(507, '45.230.53.127', '2021-08-12'),
(508, '45.230.53.127', '2021-08-12'),
(509, '45.230.53.127', '2021-08-12'),
(510, '45.230.53.127', '2021-08-12'),
(511, '45.230.53.127', '2021-08-12'),
(512, '45.230.53.127', '2021-08-12'),
(513, '45.230.53.127', '2021-08-12'),
(514, '45.230.53.127', '2021-08-12'),
(515, '45.230.53.127', '2021-08-12'),
(516, '45.230.53.127', '2021-08-12'),
(517, '45.230.53.127', '2021-08-12'),
(518, '45.230.53.127', '2021-08-12'),
(519, '45.230.53.127', '2021-08-12'),
(520, '45.230.53.127', '2021-08-12'),
(521, '45.230.53.127', '2021-08-12'),
(522, '45.230.53.127', '2021-08-12'),
(523, '45.230.53.127', '2021-08-12'),
(524, '45.230.53.127', '2021-08-12'),
(525, '45.230.53.127', '2021-08-12'),
(526, '45.230.53.127', '2021-08-12'),
(527, '45.230.53.127', '2021-08-12'),
(528, '45.230.53.127', '2021-08-12'),
(529, '45.230.53.127', '2021-08-12'),
(530, '45.230.53.127', '2021-08-12'),
(531, '45.230.53.127', '2021-08-12'),
(532, '45.230.53.127', '2021-08-12'),
(533, '45.230.53.127', '2021-08-12'),
(534, '45.230.53.127', '2021-08-12'),
(535, '45.230.53.127', '2021-08-12'),
(536, '45.230.53.127', '2021-08-12'),
(537, '45.230.53.127', '2021-08-12'),
(538, '45.230.53.127', '2021-08-12'),
(539, '45.230.53.127', '2021-08-12'),
(540, '187.104.131.111', '2021-08-12'),
(541, '45.230.53.127', '2021-08-12'),
(542, '45.230.53.127', '2021-08-12'),
(543, '45.230.53.127', '2021-08-12'),
(544, '45.230.53.127', '2021-08-12'),
(545, '45.230.53.127', '2021-08-12'),
(546, '45.230.53.127', '2021-08-12'),
(547, '45.230.53.127', '2021-08-12'),
(548, '45.230.53.127', '2021-08-12'),
(549, '45.230.53.127', '2021-08-12'),
(550, '45.230.53.127', '2021-08-12'),
(551, '45.230.53.127', '2021-08-12'),
(552, '45.230.53.127', '2021-08-12'),
(553, '45.230.53.127', '2021-08-12'),
(554, '45.230.53.127', '2021-08-12'),
(555, '179.108.204.196', '2021-08-12'),
(556, '45.230.53.127', '2021-08-12'),
(557, '45.230.53.127', '2021-08-12'),
(558, '45.230.53.127', '2021-08-12'),
(559, '45.230.53.127', '2021-08-12'),
(560, '45.230.53.127', '2021-08-12'),
(561, '45.230.53.127', '2021-08-12'),
(562, '45.230.53.127', '2021-08-12'),
(563, '45.230.53.127', '2021-08-12'),
(564, '45.230.53.127', '2021-08-12'),
(565, '45.230.53.127', '2021-08-12'),
(566, '45.230.53.127', '2021-08-12'),
(567, '45.230.53.127', '2021-08-12'),
(568, '45.230.53.127', '2021-08-12'),
(569, '45.230.53.127', '2021-08-12'),
(570, '179.108.204.196', '2021-08-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config_como_funciona`
--

CREATE TABLE `tb_site.config_como_funciona` (
  `titulo` varchar(255) NOT NULL,
  `1_mosaico_titulo` varchar(255) NOT NULL,
  `1_mosaico_prg_1` text NOT NULL,
  `1_mosaico_prg_2` text NOT NULL,
  `1_mosaico_prg_3` text NOT NULL,
  `2_mosaico_titulo` varchar(255) NOT NULL,
  `2_mosaico_prg` text NOT NULL,
  `3_mosaico_titulo` varchar(255) NOT NULL,
  `3_mosaico_prg` text NOT NULL,
  `4_mosaico_titulo` varchar(255) NOT NULL,
  `4_mosaico_prg_1` text NOT NULL,
  `4_mosaico_prg_2` text NOT NULL,
  `5_mosaico_titulo` varchar(255) NOT NULL,
  `5_mosaico_prg_1` text NOT NULL,
  `5_mosaico_prg_2` text NOT NULL,
  `6_mosaico_titulo` varchar(255) NOT NULL,
  `6_mosaico_prg_1` text NOT NULL,
  `6_mosaico_prg_2` text NOT NULL,
  `6_mosaico_prg_3` text NOT NULL,
  `ultimo_titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config_como_funciona`
--

INSERT INTO `tb_site.config_como_funciona` (`titulo`, `1_mosaico_titulo`, `1_mosaico_prg_1`, `1_mosaico_prg_2`, `1_mosaico_prg_3`, `2_mosaico_titulo`, `2_mosaico_prg`, `3_mosaico_titulo`, `3_mosaico_prg`, `4_mosaico_titulo`, `4_mosaico_prg_1`, `4_mosaico_prg_2`, `5_mosaico_titulo`, `5_mosaico_prg_1`, `5_mosaico_prg_2`, `6_mosaico_titulo`, `6_mosaico_prg_1`, `6_mosaico_prg_2`, `6_mosaico_prg_3`, `ultimo_titulo`) VALUES
('COMO FUNCIONA ', 'Ao CADASTRAR os dados do processo, atente-se a:', '- O valor estimado do crédito deve ser o valor total do crédito, incluindo os honorários contratuais.', '- Honorários contratuais são aqueles contratados previamente com o seu advogado', '- Você tem a opção de vender o crédito total (inclui os honorários) ou parcial (apenas parte do crédito ou somente os honorários)', 'RATING', 'A INTERJUD disponibiliza um serviço de avaliação do seu crédito, realizada por uma equipe de especialista. Serão atribuídas de uma a cinco ESTRELAS ao seu crédito, considerando a solidez do devedor, a fase processual em que se encontra, o tempo médio de conclusão do processo, dentre outras características. Esse procedimento, além de auxiliar na venda, dá ao seu proprietário uma ideia do quanto pode aceitar de deságio', 'CRÉDITO DISPONÍVEL NO MARKETPLACE', 'Esse é o grande diferencial da INTERJUD! É o ÚNICO marketplace que permite a livre negociação de créditos judiciais diretamente entre pessoas físicas, viabilizando o acessso a este mercado ainda desconhecido e em plena ascensão.', 'NEGOCIAÇÃO E PROPOSTA', 'Interessados entrarão em contato por meio da plataforma. Disponibilizamos um chat interno para vocês negociarem o valor e as condições do negócio, desde que dentro dos parâmetros legais e dos termos e condições da INTERJUD', 'Concluída a negociação, o comprador deve formalizar a proposta no campo \"Fazer oferta\" e o vendedor será notificado para ACEITÁ-LA ou RECUSÁ-LA', 'CESSÃO DE DIREITOS', 'Aceita a proposta, a equipe da INTERJUD elaborará um contrato de cessão de direitos inteiramente digital, no qual as partes e o advogado do vendedor devem assinar de forma eletrônica, inclusive pelo próprio celular.', 'O contrato de cessão de direitos está previsto nos artigos 286 a 298 do Código Civil e consiste na forma legal e lícita de um credor transferir seu crédito a terceira pessoa.', 'HOMOLOGAÇÃO JUDICIAL E PAGAMENTO', 'Após a assinatura eletrônica pelas partes e do advogado do vendedor, o contrato deve ser submetido à homologação do juízo, cabendo essa providência a qualquer das partes.', 'Homologado pelo juízo, o COMPRADOR deve efetuar o pagamento do preço da cessão e da comissão da plataforma, no prazo estabelecido no contrato.', 'Caso a homologação seja recusada, todo o negócio é desfeito sem ônus para qualquer das partes.', 'GARANTA AGORA SEU DIREITO E ANTECIPE SEUS SONHOS COM A INTERJUD');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config_home`
--

CREATE TABLE `tb_site.config_home` (
  `titulo` varchar(255) NOT NULL,
  `overlay_banner` varchar(255) NOT NULL,
  `titulo_banner` varchar(255) NOT NULL,
  `sessao_3_subtitulo` varchar(255) NOT NULL,
  `sessao_3_ultimo_titulo` varchar(255) NOT NULL,
  `sessao_4_titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config_home`
--

INSERT INTO `tb_site.config_home` (`titulo`, `overlay_banner`, `titulo_banner`, `sessao_3_subtitulo`, `sessao_3_ultimo_titulo`, `sessao_4_titulo`) VALUES
('InterJud | Plataforma de negociação de crédito judicial', '0.3', 'NEGOCIE SEU PROCESSO JUDICIAL', 'Descubra como a InterJud pode ajudar a vender seu processo judicial. ', 'GARANTA AGORA SEU DIREITO E ANTECIPE SEUS SONHOS COM A INTERJUD ', 'VANTAGENS DE UTILIZAR A INTERJUD');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config_imagens`
--

CREATE TABLE `tb_site.config_imagens` (
  `id` int(11) NOT NULL,
  `home_bg` varchar(255) NOT NULL,
  `portal_creditos_img1` varchar(255) NOT NULL,
  `portal_creditos_img2` varchar(255) NOT NULL,
  `portal_creditos_img3` varchar(255) NOT NULL,
  `como_funciona_img1` varchar(255) NOT NULL,
  `como_funciona_img2` varchar(255) NOT NULL,
  `como_funciona_img3` varchar(255) NOT NULL,
  `como_funciona_img4` varchar(255) NOT NULL,
  `como_funciona_img5` varchar(255) NOT NULL,
  `como_funciona_img6` varchar(255) NOT NULL,
  `sobrenos_img1` varchar(255) NOT NULL,
  `sobrenos_img2` varchar(255) NOT NULL,
  `sobrenos_img3` varchar(255) NOT NULL,
  `sobrenos_img4` varchar(255) NOT NULL,
  `sobrenos_img5` varchar(255) NOT NULL,
  `fundo_login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config_imagens`
--

INSERT INTO `tb_site.config_imagens` (`id`, `home_bg`, `portal_creditos_img1`, `portal_creditos_img2`, `portal_creditos_img3`, `como_funciona_img1`, `como_funciona_img2`, `como_funciona_img3`, `como_funciona_img4`, `como_funciona_img5`, `como_funciona_img6`, `sobrenos_img1`, `sobrenos_img2`, `sobrenos_img3`, `sobrenos_img4`, `sobrenos_img5`, `fundo_login`) VALUES
(0, '6115681c3591a.jpg', '6102ee2f99e21.png', '6102efef56a92.png', '6102f02e21831.png', '61098c473ef6e.png', '61098c79ace64.png', '61098cba779ba.png', '61098cf17f479.png', '61098d192a3da.png', '61098d4436153.png', '6102f3d7cae82.png', 'democratizar.png', '6102f571bb0e8.png', '6102f508820d2.png', '6102f4aceb67e.png', '610407eaa6215.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config_investidor`
--

CREATE TABLE `tb_site.config_investidor` (
  `titulo_box1` varchar(255) NOT NULL,
  `titulo_box1_parte1` varchar(255) NOT NULL,
  `titulo_box1_parte2` varchar(255) NOT NULL,
  `titulo_box1_parte3` varchar(255) NOT NULL,
  `ln1_box1_parte2` text NOT NULL,
  `ln2_box1_parte2` text NOT NULL,
  `ln3_box1_parte2` text NOT NULL,
  `ln1_box1_parte3` text NOT NULL,
  `titulo_box2` varchar(255) NOT NULL,
  `titulo_box2_parte1` varchar(255) NOT NULL,
  `ln1_box2_parte1` text NOT NULL,
  `ln2_box2_parte1` text NOT NULL,
  `ln3_box2_parte1` text NOT NULL,
  `ln4_box2_parte1` text NOT NULL,
  `ln5_box2_parte1` text NOT NULL,
  `titulo_box2_parte2` varchar(255) NOT NULL,
  `ln1_box2_parte2` text NOT NULL,
  `ln2_box2_parte2` text NOT NULL,
  `ln3_box2_parte2` text NOT NULL,
  `ln4_box2_parte2` text NOT NULL,
  `ln5_box2_parte2` text NOT NULL,
  `ultimo_titulo` varchar(255) NOT NULL,
  `ulitmo_paragrafo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config_investidor`
--

INSERT INTO `tb_site.config_investidor` (`titulo_box1`, `titulo_box1_parte1`, `titulo_box1_parte2`, `titulo_box1_parte3`, `ln1_box1_parte2`, `ln2_box1_parte2`, `ln3_box1_parte2`, `ln1_box1_parte3`, `titulo_box2`, `titulo_box2_parte1`, `ln1_box2_parte1`, `ln2_box2_parte1`, `ln3_box2_parte1`, `ln4_box2_parte1`, `ln5_box2_parte1`, `titulo_box2_parte2`, `ln1_box2_parte2`, `ln2_box2_parte2`, `ln3_box2_parte2`, `ln4_box2_parte2`, `ln5_box2_parte2`, `ultimo_titulo`, `ulitmo_paragrafo`) VALUES
('O cadastro compreende em três etapas', '1º Cadastro dos dados pessoais', '2º Escolha o crédito de seu interesse', '3º Conclusão da negociação', 'Só na INTERJUD você escolhe, analisa e negocia o crédito de seu interesse de forma livre e direta com o vendedor, garantindo, sempre, a melhor oferta.', 'No marketplace você encontra todas as informações necessárias para tomar a melhor decisão.', 'Se você preferir uma análise do crédito pela equipe INTERJUD, entre em contato conosco. Nossa equipe terá o imenso prazer em atendê-lo.', 'Após a escolha e finalizada a negociação com o vendedor, você deve formalizar a proposta por meio da plataforma, clicando no botão \"FAZER OFERTA\".', 'Compra do crédito', '1º Cessão de direitos', 'Aceita a proposta, a equipe da INTERJUD elaborará um contrato de cessão de diretios interiramente digital, no qual as partes e o advogado do vendedor devem assinar de forma eletrônica, inclusive pelo próprio celular.', 'O contrato de cessão de direitos está previsto nos artigos 286 a 298 do Código Civil e consiste na forma legal e lícita de um credor transferir seu crédito a terceira pessoa.', 'Validade entre as partes: Para a validade do contrato de cessão de direitos entre as partes negociantes, basta que o objeto seja passível de negociação e que cumpra os requisitos legais.', 'Validade contra o devedor: é imprescindível que haja comunicação ao devedor, nos termos do art. 290 do Código Civil.', 'Validade contra terceiros: é necessário que a cessão seja feita por instrumento público ou particular. Neste último caso, o contrato deve ser registrado no cartório de título e documentos e civil de pessoas (art. 221 do Código Civil).', '2º Homologação judicial e pagamento comprador', 'Após a homologação, o dinheiro é liberado ao vendedor. Porém, caso a transaçao não ocorra por algum motivo, o negócio é desfeito sem qualquer ônus para as partes.', 'Após a assinatura eletrônica pelas partes e do advogado do vendedor, o contrato deve ser submetido à homologação do juízo, cabendo essa providência a qualquer das partes.', 'Essa medida traz segurança e transparência à negociação, além de servir como forma de dar validade ao negócio em relação ao devedor.', 'Homologado pelo juízo, o COMPRADOR deve efetuar o pagamento do preço da cessão e da comissão da plataforma, no prazo estabelecido no contrato.', 'Caso a homologação seja recusada, todo o negócio é desfeito sem ônus para qualquer das partes.', 'INVISTA NO SEU FUTURO COM A INTERJUD', 'Compre e receba com juros, invista de uma forma segura e garantida com a interjud.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config_portal_de_creditos`
--

CREATE TABLE `tb_site.config_portal_de_creditos` (
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `mosaico_prg_1` text NOT NULL,
  `mosaico_prg_2` text NOT NULL,
  `mosaico_prg_3` text NOT NULL,
  `mosaico_ultimo_txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config_portal_de_creditos`
--

INSERT INTO `tb_site.config_portal_de_creditos` (`titulo`, `subtitulo`, `mosaico_prg_1`, `mosaico_prg_2`, `mosaico_prg_3`, `mosaico_ultimo_txt`) VALUES
('OFERECEMOS AVALIAÇÃO GRATUITA AO SEU CRÉDITO ', 'Veja mais como pode ser simples a negociação de crédito na nossa plataforma. ', 'Aderindo ao serviço de avaliação de risco, você aceita a pontuação atribuida pelos especialistas e se compromete a negociar este crédito exclusivamente pela plataforma InterJud, pelo prazo de 6 meses. Termos e condições de uso da plataforma como vendedor (Etapa I) Termos e condições do rating (Etapa 3).', 'No marktplace você encontra todas as informações necessárias para tomar a melhor decisão. ', 'Se você preferir uma análise do crédito pela equipe da INTERJUD, entre em contato conosco. Nossa equipe terá imenso prazer em atendê-lo. ', 'Ao contrario dos outros modelos de negócios existentes no mercado, nos quais o crédito é oferecido a uma só pessoa, aqui na INTERJUD seu crédito fica visível a qualquer pessoa em todo o território nacional, o que permite maior lucratividade na sua negociação. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config_sobrenos`
--

CREATE TABLE `tb_site.config_sobrenos` (
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `prg_box1` text NOT NULL,
  `prg_box2` text NOT NULL,
  `prg_box3` text NOT NULL,
  `prg_box4` text NOT NULL,
  `prg_box5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config_sobrenos`
--

INSERT INTO `tb_site.config_sobrenos` (`titulo`, `subtitulo`, `prg_box1`, `prg_box2`, `prg_box3`, `prg_box4`, `prg_box5`) VALUES
('SOBRE NÓS', 'Descubra o cenário que nacseu a INTERJUD.', 'Um processo judicial pode levar em média 8 anos para conclusão, Devido à morosidade do sistema judiciário', 'Com o propósito de democratizar e dar liquidez aos créditos judiciais, nasceu a interjud.', 'De acordo com o Conselho Nacional de Justiça - CNJ, no final de 2019 havia +77 milhões de ações judiciais tramitando no Brasil.', 'É comum receber uma sentença favorável pouco tempo após ajuizar uma ação judicial. Entretanto, o grande gargalo se encontra na fase de execução. Estima-se que a taxa de congestionamento dos processos nessa fase processual esteja em 82,4%.', 'Nesse cenário nasceu a INTERJUD. Com o propósito de democratizar e dar liquidez ao mercado de Crédito Judiciais criamos a plataforma que aproxima detentores de créditos judiciais de investidores em potencial. Só na Interjud/JudCash seu crédito judicial fica disponível em um marketplace que garante receber a melhor proposta. Venha fazer parte dessa revolução!.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config_vendedor`
--

CREATE TABLE `tb_site.config_vendedor` (
  `titulo_box1` varchar(255) NOT NULL,
  `titulo_box1_parte1` varchar(255) NOT NULL,
  `titulo_box1_parte2` varchar(255) NOT NULL,
  `titulo_box1_parte3` varchar(255) NOT NULL,
  `texto_box1_parte3` text NOT NULL,
  `titulo_box2` varchar(255) NOT NULL,
  `subtitulo_box2` varchar(255) NOT NULL,
  `texto_box2` text NOT NULL,
  `titulo_box3` varchar(255) NOT NULL,
  `titulo_box3_parte1` varchar(255) NOT NULL,
  `prg_box3_parte1_ln1` text NOT NULL,
  `prg_box3_parte1_ln2` text NOT NULL,
  `prg_box3_parte1_ln3` text NOT NULL,
  `prg_box3_parte1_ln4` text NOT NULL,
  `titulo_box3_parte2` varchar(255) NOT NULL,
  `prg_box3_parte2_ln1` text NOT NULL,
  `prg_box3_parte2_ln2` text NOT NULL,
  `prg_box3_parte2_ln3` text NOT NULL,
  `prg_box3_parte2_ln4` text NOT NULL,
  `prg_box3_parte2_ln5` text NOT NULL,
  `titulo_box3_parte3` varchar(255) NOT NULL,
  `prg_box3_parte3_ln1` text NOT NULL,
  `prg_box3_parte3_ln2` text NOT NULL,
  `prg_box3_parte3_ln3` text NOT NULL,
  `prg_box3_parte3_ln4` text NOT NULL,
  `prg_box3_parte3_ln5` text NOT NULL,
  `titulo_box4` varchar(255) NOT NULL,
  `prg_box4_ln1` varchar(255) NOT NULL,
  `prg_box4_ln2` varchar(255) NOT NULL,
  `prg_box4_ln3` varchar(255) NOT NULL,
  `prg_box4_ln4` varchar(255) NOT NULL,
  `titulo_box5` varchar(255) NOT NULL,
  `prg_box5` text NOT NULL,
  `titulo_box6` varchar(255) NOT NULL,
  `prg_box6` text NOT NULL,
  `ultimo_titulo` varchar(255) NOT NULL,
  `ulitmo_paragrafo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.config_vendedor`
--

INSERT INTO `tb_site.config_vendedor` (`titulo_box1`, `titulo_box1_parte1`, `titulo_box1_parte2`, `titulo_box1_parte3`, `texto_box1_parte3`, `titulo_box2`, `subtitulo_box2`, `texto_box2`, `titulo_box3`, `titulo_box3_parte1`, `prg_box3_parte1_ln1`, `prg_box3_parte1_ln2`, `prg_box3_parte1_ln3`, `prg_box3_parte1_ln4`, `titulo_box3_parte2`, `prg_box3_parte2_ln1`, `prg_box3_parte2_ln2`, `prg_box3_parte2_ln3`, `prg_box3_parte2_ln4`, `prg_box3_parte2_ln5`, `titulo_box3_parte3`, `prg_box3_parte3_ln1`, `prg_box3_parte3_ln2`, `prg_box3_parte3_ln3`, `prg_box3_parte3_ln4`, `prg_box3_parte3_ln5`, `titulo_box4`, `prg_box4_ln1`, `prg_box4_ln2`, `prg_box4_ln3`, `prg_box4_ln4`, `titulo_box5`, `prg_box5`, `titulo_box6`, `prg_box6`, `ultimo_titulo`, `ulitmo_paragrafo`) VALUES
('O cadastro compreende em três etapas ', '1º Cadastro dos dados do processo (Obrigatório) ', '2º Cadastro dos dados pessoais ', '3º Avaliação do risco(opcional) ', 'O que é? A avaliação do risco é uma análise detalhada do seu crédito, realizada por uma equipe de especialista. Serão atribuídas de uma a cinco ESTRELAS ao seu crédito, considerando a solidez do devedor, a fase processual em que se encontra, o tempo médio de conclusão do processo, entre outras características. Esse procedimento, além de auxiliar na venda, dá ao seu proprietário uma ideia do quanto pode aceitar de deságio.', 'Pronto! Seu crédito já está disponível no PRIMEIRO marketplace de créditos judiciais do Brasil. Agora é só aguardar o contato com a melhor proposta.', 'Veja como vai ficar seu crédito ', 'Ao contrário dos outros modelos de negócios existentes no mercado, nos quais o crédito é oferecido a uma só pessoa, aqui na INTERJUD seu crédito fica visível a qualquer pessoa em todo o território nacional, o que perite maior lucratividade na sua negociação.', 'Venda do crédito', '1º Negociação ', 'Ao visualizar o seu crédito no Marketplace o interessado terá todas as informações para que possa analisar o processo ', 'Nesse momento, vocês porederão negociar de forma livre e direta o valor e as condições do negocio, desde que dentro dos parâmetros legais e dos termos e condições da plataforma Termos e condições ', 'Concluída a negociação, o comprador deve formalizar a proposta no campo \"Fazer oferta\". ', 'Um e-mail será enviado ao vendedor que poderá ACEITAR ou RECUSAR. ', '2º Cessão de direitos ', 'Aceita a proposta, a equipe da INTERJUD elaborará um contrato de cessão de diretios interiramente digital, no qual as partes e o advogado do vendedor devem assinar de forma eletrônica, inclusive pelo próprio celular.', 'O contrato de cessão de direitos está previsto nos artigos 286 a 298 do Código Civil e consiste na forma legal e lícita de um credor transferir seu crédito a terceira pessoa.', 'Validade entre as partes: Para a validade do contrato de cessão de direitos entre as partes negociantes, basta que o objeto seja passível de negociação e que cumpra os requisitos legais.', 'Validade contra o devedor: é imprescindível que haja comunicação ao devedor, nos termos do art. 290 do Código Civil.', 'Validade contra terceiros: é necessário que a cessão seja feita por instrumento público ou particular. Neste último caso, o contrato deve ser registrado no cartório de título e documentos e civil de pessoas (art. 221 do Código Civil).', '3º Homologação judicial e pagamento comprador', 'Após a homologação, o dinheiro é liberado ao vendedor. Porém, caso a transaçao não ocorra por algum motivo, o negócio é desfeito sem qualquer ônus para as partes.', 'Após a assinatura eletrônica pelas partes e do advogado do vendedor, o contrato deve ser submetido à homologação do juízo, cabendo essa providência a qualquer das partes.', 'Essa medida traz segurança e transparência à negociação, além de servir como forma de dar validade ao negócio em relação ao devedor', 'Homologado pelo juízo, o COMPRADOR deve efetuar o pagamento do preço da cessão e da comissão da plataforma, no prazo estabelecido no contrato.', 'Caso a homologação seja recusada, todo o negócio é desfeito sem ônus para qualquer das partes.', 'Serviços a serem oferecidos:', 'Vitrine entre as partes. Por fora.', 'Compra com analise pelo comprador.', 'Compra com analise por nós.', 'Compra com dinheiro do investidor e paga um percentual a ele.', 'SISTEMA DE RATING', 'A Inter Jud disponibiliza Gratuitamente o serviço de avaliação de risco do seu crédito', 'O QUE É', 'A avaliação de risco é uma analise detalhada do seu crédito, realizada por uma equipe de especialistas. Serão atribuidas de uma a cinco * ao seu crédito, considerando a solidez do devedor, o valor aproximado do seu crédito, a fase processual em que se encontra, o tempo médio de conclusão do processo, entre outras características. Esse procedimento, além de auxiliar na venda, dá ao seu proprietário uma ideia do quanto pode aceitar de deságio', 'OFERECEMOS AVALIAÇÃO GRATUITA AO SEU CRÉDITO', 'Aderindo ao serviço de avaliação de risco, você aceita a pontuação atribuida pelos especialistas e se compromete a negociar este crédito exclusivamente pela plataforma InterJud, pelo prazo de 6 meses. Termos e condições de uso da plataforma como vendedor (Etapa I) Termos e condições do rating (Etapa 3).');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.depoimentos`
--

CREATE TABLE `tb_site.depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.depoimentos`
--

INSERT INTO `tb_site.depoimentos` (`id`, `nome`, `depoimento`, `foto`, `order_id`) VALUES
(107, 'Andre', 'Uma duas três quatro cinco seis sete oito nove dez onze doze treze quatorze quinze dezesseis dezessete dezoito dezenove vinte um dois três quatro cinco seis sete oito nove trinta', '60feda9aca113.jpg', 107),
(108, 'Bruno Belli', 'Site incrível!', '60fedaafa32da.jpg', 113),
(111, 'Daniel Mateus', 'depoimento do daniel', '60fedaf9d88df.png', 108),
(114, 'Diego Kaique', 'depoimento do diego', '610409fed7aa6.jpg', 114);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.duvfrequentes`
--

CREATE TABLE `tb_site.duvfrequentes` (
  `id` int(11) NOT NULL,
  `duvida` varchar(255) NOT NULL,
  `resposta` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.duvfrequentes`
--

INSERT INTO `tb_site.duvfrequentes` (`id`, `duvida`, `resposta`, `order_id`) VALUES
(12, 'É possível vender um processo judicial? ', 'A resposta é SIM.  Você não precisa aguardar anos para receber o crédito de um processo judicial. A venda é realizada por um instituto denominado cessão de direitos creditórios, que está previsto nos arts. 286 a 298 do Código Civil. A transação é totalmente legal e lícita. ', 12),
(13, 'O que é cessão de direitos creditórios?', 'A cessão de direitos nada mais é do que um contrato por meio do qual o detentor do processo judicial transfere ao  interessado os direitos e obrigações daquele crédito judicial. ', 13),
(14, 'Como fica meu advogado na venda do processo judicial?', 'Geralmente em um processo judicial o advogado detém parte do crédito obtido na justiça. Ao negociar o seu crédito o advogado pode incluir a parte que lhe corresponde e já antecipar seus honorários ou pode continuar no processo até o final, sem que isso interfira na venda do seu crédito judicial.', 14),
(16, 'Qual o custo de vender meu processo na InterJud?', 'Anunciar e vender seus processos na InterJud é gratuito! Ao aceitar uma proposta feita por um dos investidores cadastrados na plataforma você recebe o valor integral acordado. A InterJud cobra apenas uma comissão de 5% do investidor interessado.', 17),
(17, 'Em que momento posso oferecer meu processo judicial para venda?', 'Em tese, o processo judicial pode ser negociado em qualquer fase processual. Entretanto, os processos que já contenham sentença favorável e os que já superaram a parte recursal são mais atraentes para os investidores.', 16),
(18, 'Quais as vantagens de vender meu processo judicial?', 'Negociar seu processo na InterJud permite receber em pouco tempo valores que ficam anos aguardando o término de um processo judicial. Assim, você consegue antecipar valores que podem ser empregados para quitar dívidas, adquirir a casa própria, um veículo ou mesmo custear a faculdade de seus filhos.', 18),
(19, 'Qual o risco de comprar um processo judicial?', 'O valor da compra de um crédito judicial apenas é transferido ao vendedor após a decisão judicial que homologa a transferência de titularidade do crédito. O risco assumido pelo devedor é inerente à solidez do devedor no processo judicial. Nesse aspecto, a InterJud oferece gratuitamente a avaliação de risco que auxilia na tomada de decisão.', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.servico`
--

CREATE TABLE `tb_site.servico` (
  `id` int(11) NOT NULL,
  `servicos` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.servico`
--

INSERT INTO `tb_site.servico` (`id`, `servicos`, `order_id`) VALUES
(4, 'mais um serviço pro meu site escrito por loren ipsum dollor sit amet domor silor domor ipsum', 6),
(5, 'meu serviço teste sem titulo atualizado', 8),
(6, 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3),
(7, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 4),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.slides`
--

CREATE TABLE `tb_site.slides` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `slide` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.slides`
--

INSERT INTO `tb_site.slides` (`id`, `nome`, `slide`, `order_id`) VALUES
(15, 'slide 01', '60f733ae0523a.jpg', 17),
(16, 'slide 02', '60f71f9f3a962.jpg', 15),
(17, 'slide 03', '60f71fb1acd72.jpg', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.teste`
--

CREATE TABLE `tb_site.teste` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.teste`
--

INSERT INTO `tb_site.teste` (`id`, `nome`, `depoimento`) VALUES
(1, 'DANIEL MATEUS XAVIER DA SILVA', 'ihilbjk\r\n'),
(2, 'dfsafds', 'fdsdfsdsfa'),
(3, 'Daniel Mateus', 'dsffd'),
(4, 'Daniel Mateus', 'dsffd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.vantagens`
--

CREATE TABLE `tb_site.vantagens` (
  `id` int(11) NOT NULL,
  `icone_vantagens` varchar(255) NOT NULL,
  `titulo_vantagens` varchar(255) NOT NULL,
  `prg_vantagens` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_site.vantagens`
--

INSERT INTO `tb_site.vantagens` (`id`, `icone_vantagens`, `titulo_vantagens`, `prg_vantagens`, `order_id`) VALUES
(1, '60ff06d17a169.png', 'SIMPLES E SEM BUROCRACIA', 'Cadastre seu crédito de forma objetiva e descomplicada, receba seu dinheiro e invista no seu futuro.', 3),
(3, 'rapidez.png', 'RAPIDEZ', 'Comece a receber proposta hoje mesmo, cadastre seu crédito na INTERJUD', 4),
(4, '610402c29a668.png', 'AVALIAÇÃO DO RISCO', 'A InterJud disponibiliza GRATUITAMENTE a avaliação de risco do seu crédito. Serão atribuídas de 1 a 5 estrelas que auxiliam na tomada de decisão do investidor.', 5),
(5, '60ff06385dbf5.png', ' LEGAL ', 'A cessão de direitos creditórios é legal e encontra previsão nos artigos 286 a 298 do Código Civil.', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `email` varchar(30) DEFAULT NULL,
  `idusers` int(11) NOT NULL,
  `senha` text DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `num_endereco` varchar(30) DEFAULT NULL,
  `num_oab` varchar(30) DEFAULT NULL,
  `estado_oab` varchar(30) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`email`, `idusers`, `senha`, `nome`, `cpf`, `celular`, `cep`, `complemento`, `endereco`, `num_endereco`, `num_oab`, `estado_oab`, `data_cadastro`) VALUES
('sandrofilho98@yahoo.com.br', 1, '63da5df687c7654967b26ee28909d018', 'Sandro', '182.732.847-94', '(21)9842388792', '24727-130', 'Pontilhão', 'Rua Marli Ferreira, Lote 206 Q', '69', '', '', '2021-06-17'),
('teste222@gmail.com', 2, 'aa1bf4646de67fd9086cf6c79007026c', 'teste junior', '182.732.847-94', '(21)984238879', '24727-130', 'Pontilhão', 'Rua Marli Ferreira, Lote 206 Q', '68', '', '', '2021-06-17'),
('sandrofilo9898@gmail.com', 3, '63da5df687c7654967b26ee28909d018', 'Sandro Filho', '182.732.847-94', '(21)984238879', '24727-130', 'Pontilhão', 'Rua Marli Ferreira, Lote 206 Q', '68', '12345678', 'RJ', '2021-06-17'),
('daniel@teste.com.br', 4, '903c118e874ff4865a0f86f47c9005a2', 'Daniel', '182.732.847-94', '(21)984238879', '24727-130', 'Pontilhão', 'Rua Marli Ferreira, Lote 206 Q', '68', '', '', '2021-06-17'),
('teste@gmail.com.br', 5, 'aa1bf4646de67fd9086cf6c79007026c', 'Teste', '182.732.847-94', '(21)984238879', '24727-130', 'Pontilhão', 'Rua Marli Ferreira, Lote 206 Q', '68', '12345678', 'RJ', '2021-06-20'),
('aurora2@gmail.com', 6, '63da5df687c7654967b26ee28909d018', 'Aurora 2', '182.732.847-94', '(21)984238879', '24727-130', 'Pontilhão', 'Rua Marli Ferreira, Lote 206 Q', '68', '12345678', 'RJ', '2021-06-21'),
('teste555@gmail.com', 7, 'aa1bf4646de67fd9086cf6c79007026c', 'Teste 555', '182.732.847-94', '(21)984238879', '24727-130', 'Pontilhão', 'Rua Marli Ferreira, Lote 206 Q', '68', '12345678', 'RJ', '2021-06-21'),
('teste777@gmail.com', 8, '903c118e874ff4865a0f86f47c9005a2', 'Teste 777', 'd7539b667ab76a4b36a4811d581475', '(21)984238879', '1e07f27980e6c9d3926505b1e495ce', '', '9864e1b228888493ab5300db4cc40e', '', 'd8d08e08f186991a08029c5f893b06', 'RJ', '2021-07-01'),
('danielteste@gmail.com', 9, 'user01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('danielmxsilva@gmail.com', 10, 'e10adc3949ba59abbe56e057f20f883e', 'Daniel Mateus', '182.732.847-94', '(21)984238879', '36204-022', '', 'Santa Luisa - Barbacena', '', '65.123', 'RJ', '2021-07-26');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`idcreditos`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `pwd_reset`
--
ALTER TABLE `pwd_reset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Índices para tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.usuario`
--
ALTER TABLE `tb_admin.usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.duvfrequentes`
--
ALTER TABLE `tb_site.duvfrequentes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.servico`
--
ALTER TABLE `tb_site.servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.slides`
--
ALTER TABLE `tb_site.slides`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.teste`
--
ALTER TABLE `tb_site.teste`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.vantagens`
--
ALTER TABLE `tb_site.vantagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `creditos`
--
ALTER TABLE `creditos`
  MODIFY `idcreditos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de tabela `pwd_reset`
--
ALTER TABLE `pwd_reset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de tabela `tb_admin.usuario`
--
ALTER TABLE `tb_admin.usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=571;

--
-- AUTO_INCREMENT de tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de tabela `tb_site.duvfrequentes`
--
ALTER TABLE `tb_site.duvfrequentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_site.servico`
--
ALTER TABLE `tb_site.servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_site.slides`
--
ALTER TABLE `tb_site.slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_site.teste`
--
ALTER TABLE `tb_site.teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_site.vantagens`
--
ALTER TABLE `tb_site.vantagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `creditos`
--
ALTER TABLE `creditos`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
