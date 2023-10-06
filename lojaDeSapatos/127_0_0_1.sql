-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Set-2023 às 19:10
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_lojasapatos`
--
CREATE DATABASE IF NOT EXISTS `bd_lojasapatos` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_lojasapatos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tenis`
--

DROP TABLE IF EXISTS `tb_tenis`;
CREATE TABLE IF NOT EXISTS `tb_tenis` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Categoria` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Tamanho` int NOT NULL,
  `Cor` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Material` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Preço` decimal(10,0) NOT NULL,
  `Estoque` int NOT NULL,
  `Foto` varchar(350) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_tenis`
--

INSERT INTO `tb_tenis` (`ID`, `Nome`, `Marca`, `Categoria`, `Tamanho`, `Cor`, `Material`, `Preço`, `Estoque`, `Foto`) VALUES
(1, 'Tênis Renew Ride 3 ', 'Nike', 'Masculino', 43, 'Preto', 'Borracha', '310', 100, 'fotos/8e5c744874d2e7841cf8cd398dd70c7d.jpg'),
(4, 'Air Force 1', 'NIke', 'Streetwear', 41, 'Branco/Off White', 'Camurça', '600', 2, 'fotos/5dc8e25f315a18ff2780571bc775dede.jpg'),
(10, 'Camisa II COR', 'Nike', 'Esportes', 0, 'Preta/Branca', 'Dri-fit', '299', 15, 'fotos/d8fd6508ffd2eee48a171548887e6ce3.jpg'),
(6, 'Adidas NMD', 'Adidas', 'Streetwear', 39, 'Grey Five / Cloud White / Carbon', 'Couro', '999', 4, 'fotos/dfa6668013474d2816b5b886a286803b.jpg'),
(9, 'Camisa I COR', 'NIke', 'Esportes', 0, 'Branca', 'Dri-fit', '300', 10, 'fotos/483886531877ce07ef0f2fc87aad84d4.jpg'),
(11, 'Camisa COR Japão', 'Nike', 'Esportes', 0, 'Marrom', 'Dri-fit', '400', 20, 'fotos/120e39d23420a7f8636547b40f236e81.jpg'),
(12, 'Camisa COR Goleiro', 'Nike', 'Esportes', 0, 'Amarelo', 'Dri-fit', '399', 12, 'fotos/e8590205124dead37d13bde5e0a7e63c.jpg'),
(13, 'Chuteira CR7', 'Nike - CR7', 'Esportes', 41, 'Preta/Dourado', 'Couro', '399', 2, 'fotos/c223fb35fa37d8b3d31c2bffd4f74cdf.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
