-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/04/2021 às 00:59
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filiais`
--

CREATE TABLE `filiais` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidoitens`
--

CREATE TABLE `pedidoitens` (
  `id` int(11) NOT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `produto_valor` double DEFAULT NULL,
  `produto_nome` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `pedido_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `valor_final` double DEFAULT NULL,
  `fiado` tinyint(1) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `filial_id` int(11) DEFAULT NULL,
  `atendente_id` int(11) DEFAULT NULL,
  `data_pedido` datetime DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidostatus`
--

CREATE TABLE `pedidostatus` (
  `id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pedidostatus`
--

INSERT INTO `pedidostatus` (`id`, `status`) VALUES
(1, 'Novo'),
(2, 'Pago'),
(3, 'Em preparo'),
(4, 'Pronto'),
(5, 'Entregue');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `produtotipo_id` int(11) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `filial_id` int(11) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtotipos`
--

CREATE TABLE `produtotipos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `filiacao` int(11) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `usuariotipos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `filiacao`, `data_cadastro`, `usuariotipos_id`) VALUES
(1, 'Tapito', 'tapito@teste.com.br', 'tapito123', 1, '0000-00-00 00:00:00', 1),
(2, 'Tapito', 'tapito@teste.com.br', 'tapito123', 1, '2021-04-08 19:42:10', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuariotipos`
--

CREATE TABLE `usuariotipos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuariotipos`
--

INSERT INTO `usuariotipos` (`id`, `nome`) VALUES
(1, 'Admin'),
(2, 'Gerente'),
(3, 'Cozinha'),
(4, 'Atendente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidoitens`
--
ALTER TABLE `pedidoitens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidostatus`
--
ALTER TABLE `pedidostatus`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtotipos`
--
ALTER TABLE `produtotipos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuariotipos`
--
ALTER TABLE `usuariotipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `filiais`
--
ALTER TABLE `filiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidoitens`
--
ALTER TABLE `pedidoitens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidostatus`
--
ALTER TABLE `pedidostatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtotipos`
--
ALTER TABLE `produtotipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuariotipos`
--
ALTER TABLE `usuariotipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
