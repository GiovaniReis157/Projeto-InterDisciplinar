-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2020 às 22:59
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aula_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_nf`
--

CREATE TABLE `itens_nf` (
  `id` int(11) NOT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `num_nf` int(11) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens_nf`
--

INSERT INTO `itens_nf` (`id`, `cod_produto`, `num_nf`, `qtde`, `subtotal`) VALUES
(1, 1, 1, 1, '5.00'),
(2, 1, 1, 2, '10.00'),
(3, 1, 1, 1, '5.00'),
(4, 1, 2, 3, '15.00'),
(5, 1, 2, 1, '5.00'),
(6, 1, 2, 1, '5.00'),
(7, 1, 3, 4, '20.00'),
(8, 1, 3, 1, '5.00'),
(9, 2, 6, 1, '165.00'),
(10, 2, 7, 2, '330.00'),
(11, 1, 8, 7, '35.00'),
(12, 3, 10, 1, '8.00'),
(13, 1, 11, 1, '5.00'),
(14, 1, 11, 2, '10.00'),
(15, 1, 11, 1, '5.00'),
(16, 4, 12, 2, '24.00'),
(17, 2, 12, 1, '165.00'),
(18, 1, 13, 1, '5.00'),
(19, 3, 13, 2, '16.00'),
(20, 5, 14, 2, '60.00'),
(21, 2, 14, 1, '165.00'),
(22, 3, 15, 2, '16.00'),
(23, 1, 15, 3, '15.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `nf` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`nf`, `data`, `valor_total`) VALUES
(1, '0000-00-00', '0.00'),
(2, '2020-09-07', '0.00'),
(3, '2020-09-30', '25.00'),
(4, '2020-09-30', NULL),
(5, '0000-00-00', NULL),
(6, '2020-09-30', NULL),
(7, '2020-09-30', '330.00'),
(8, '2020-10-01', '35.00'),
(9, '0000-00-00', NULL),
(10, '2020-10-04', '8.00'),
(11, '2020-10-01', '20.00'),
(12, '2020-10-01', '189.00'),
(13, '2020-10-01', '21.00'),
(14, '2020-10-02', '225.00'),
(15, '2020-10-02', '31.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `marca`) VALUES
(1, 'iorgut', '5.00', 'Danone'),
(2, 'Panela', '165.00', 'Polishop'),
(3, 'Desodorante', '8.00', 'Rexona'),
(4, 'Nescau Cereal', '12.00', 'NestlÃ©'),
(5, 'Carrinho', '30.00', 'tectoys'),
(6, 'Alcool em Gel', '20.00', 'Bayer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Giovani dos Reis Gil', 'giovani@email.com', '1234'),
(2, 'Jailson Mendes', 'urso@email.com', '1234'),
(3, '', 'ander@email.com', '1234'),
(4, 'Antonio', '123@email.com', '1234'),
(5, 'Geraldin', 'geraldo@gmail.com', '1234'),
(6, 'IgÃ£o', 'igor@email.com', '1234'),
(7, 'ZÃ©', 'ze@email.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_produto` (`cod_produto`),
  ADD KEY `num_nf` (`num_nf`);

--
-- Indexes for table `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD PRIMARY KEY (`nf`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itens_nf`
--
ALTER TABLE `itens_nf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `nf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD CONSTRAINT `itens_nf_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `itens_nf_ibfk_2` FOREIGN KEY (`num_nf`) REFERENCES `nota_fiscal` (`nf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
