/*
SQLyog Community v12.03 (64 bit)
MySQL - 5.7.31 : Database - latorre
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `caixafluxos` */

DROP TABLE IF EXISTS `caixafluxos`;

CREATE TABLE `caixafluxos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) DEFAULT NULL,
  `natureza` varchar(255) DEFAULT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `caixafluxos` */

insert  into `caixafluxos`(`id`,`valor`,`natureza`,`pedido_id`,`data_cadastro`) values (1,'34.50','pedido #000002 de Visitante',2,'2021-05-18'),(2,'-12.00','compra de materiais',NULL,'2021-05-30'),(3,'30.00','pedido #000003 de Visitante',3,'2021-05-31'),(4,'40.00','pedido #000005 de Cliente Dois',5,'2021-06-01'),(5,'-23.00','compra de materiais',NULL,'2021-06-01'),(8,'42.00','Pedido #000013',13,'2021-06-04'),(7,'49.00','Pedido #000012',12,'2021-06-04'),(9,'-50.50','despesas',NULL,'2021-06-04'),(11,'-10.00','despesa extra',NULL,'2021-06-04'),(12,'2.00','gorjeta',NULL,'2021-06-04'),(14,'17.00','Pedido #000015',15,'2021-06-04'),(16,'15.00','Pedido #000014 quitado',14,'2021-06-04'),(17,'17.00','Pedido #000004 quitado',4,'2021-06-03');

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clientes` */

insert  into `clientes`(`id`,`nome`,`cpf`,`data_cadastro`) values (1,'Cliente Teste','00011122233','2021-05-16 19:24:55'),(2,'Cliente Dois','12345678900','2021-05-16 21:32:46'),(5,'Deleteme','1111111111','2021-05-17 21:51:38'),(6,'Cli Tres','456456456','2021-05-17 21:53:19'),(7,'rretretret','99999999','2021-05-17 21:53:48'),(8,'Testetesdsf asdasd aad asdsadasdas asdsadas','44444444','2021-05-17 21:55:02');

/*Table structure for table `configs` */

DROP TABLE IF EXISTS `configs`;

CREATE TABLE `configs` (
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chave` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `configs_chave_unique` (`chave`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `configs` */

insert  into `configs`(`descricao`,`chave`,`valor`,`select`) values ('Nomes das Mesas separados por vírgula','lista_mesas','1,2,3,4,5,6,7,8,9,10,11,12',NULL),('Limite de Comandas na Cozinha','limite_comandas','4',NULL),('Tamanho da fonte Comandas da Cozinha','tamanho_fonte_cozinha','18px',NULL),('Tempo de Atualização Tela da Cozinha (segundos)','tempoat_cozinha','5',NULL);

/*Table structure for table `filiais` */

DROP TABLE IF EXISTS `filiais`;

CREATE TABLE `filiais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `filiais` */

insert  into `filiais`(`id`,`nome`) values (1,'Principal');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2021_05_12_231110_add_login_usuarios',1),(2,'2021_05_16_104018_add_icone_produtotipos',2),(3,'2021_05_17_031151_tabela_configs',3),(4,'2021_05_18_075846_add_mesa_pedidos',4),(5,'2021_06_03_201133_add_cliente_pedidos',5);

/*Table structure for table `pedidoitens` */

DROP TABLE IF EXISTS `pedidoitens`;

CREATE TABLE `pedidoitens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) DEFAULT NULL,
  `produto_valor` double DEFAULT NULL,
  `produto_nome` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pedidoitens` */

insert  into `pedidoitens`(`id`,`produto_id`,`produto_valor`,`produto_nome`,`quantidade`,`pedido_id`) values (1,1,4,'Coca-Cola Lata 350ml',2,1),(2,4,15,'Hamburguer Simples',1,1),(3,5,17,'Lasanha Pequena - Frango',1,1),(4,6,17,'Lasanha Pequena - Bolonhesa',1,2),(5,5,17,'Lasanha Pequena - Frango',1,2),(6,4,15,'Hamburguer Simples',2,3),(7,6,17,'Lasanha Pequena - Bolonhesa',1,4),(8,1,4,'Coca-Cola Lata 350ml',2,5),(9,4,15,'Hamburguer Simples',1,5),(10,5,17,'Lasanha Pequena - Frango',1,5),(11,6,17,'Lasanha Pequena - Bolonhesa',1,6),(12,5,17,'Lasanha Pequena - Frango',1,6),(13,1,4,'Coca-Cola Lata 350ml',1,7),(14,4,15,'Hamburguer Simples',1,7),(15,6,17,'Lasanha Pequena - Bolonhesa',2,8),(16,5,17,'Lasanha Pequena - Frango',1,9),(17,4,15,'Hamburguer Simples',1,10),(18,6,17,'Lasanha Pequena - Bolonhesa',1,10),(19,5,17,'Lasanha Pequena - Frango',1,10),(20,1,4,'Coca-Cola Lata 350ml',3,11),(21,4,15,'Hamburguer Simples',3,11),(22,1,4,'Coca-Cola Lata 350ml',1,12),(23,4,15,'Hamburguer Simples',3,12),(24,1,4,'Coca-Cola Lata 350ml',2,13),(25,6,17,'Lasanha Pequena - Bolonhesa',1,13),(26,5,17,'Lasanha Pequena - Frango',1,13),(27,4,15,'Hamburguer Simples',1,14),(28,6,17,'Lasanha Pequena - Bolonhesa',1,15),(29,1,4,'Coca-Cola Lata 350ml',2,16);

/*Table structure for table `pedidos` */

DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesa` varchar(20) NOT NULL,
  `valor_final` double DEFAULT NULL,
  `fiado` tinyint(1) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `cliente_nome` varchar(45) NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `filial_id` int(11) DEFAULT NULL,
  `atendente_id` int(11) DEFAULT NULL,
  `data_pedido` datetime DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pedidos` */

insert  into `pedidos`(`id`,`mesa`,`valor_final`,`fiado`,`cliente`,`cliente_nome`,`status_id`,`filial_id`,`atendente_id`,`data_pedido`,`descricao`) values (1,'3',40,1,2,'Cliente Dois',5,1,4,'2021-05-18 08:59:19','sem cebola'),(2,'4',34,0,NULL,'Visitante',5,1,2,'2021-05-18 12:03:03',''),(3,'10',30,0,NULL,'Visitante',5,1,2,'2021-05-31 15:01:39',''),(4,'1',17,1,2,'Cliente Dois',2,1,2,'2021-06-01 15:05:36','observacao de teste'),(5,'7',40,0,2,'Cliente Dois',5,1,2,'2021-06-01 15:05:56',''),(6,'8',34,0,NULL,'Visitante',0,1,2,'2021-06-01 15:06:58','sem cebola'),(12,'2',49,0,0,'Visitante',5,1,2,'2021-06-04 01:29:12',''),(13,'3',42,0,6,'Cli Tres',5,1,2,'2021-06-04 01:30:11',''),(14,'11',15,1,2,'Cliente Dois',2,1,2,'2021-06-04 03:14:26',''),(15,'1',17,0,0,'Visitante',5,1,2,'2021-06-04 03:14:37',''),(16,'6',8,1,1,'Cliente Teste',5,1,2,'2021-06-04 06:08:31','');

/*Table structure for table `pedidostatus` */

DROP TABLE IF EXISTS `pedidostatus`;

CREATE TABLE `pedidostatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pedidostatus` */

insert  into `pedidostatus`(`id`,`status`) values (1,'Novo'),(2,'Pago'),(3,'Em preparo'),(4,'Pronto'),(5,'Entregue');

/*Table structure for table `produtos` */

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `produtotipo_id` int(11) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `filial_id` int(11) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `produtos` */

insert  into `produtos`(`id`,`nome`,`valor`,`produtotipo_id`,`ativo`,`imagem`,`filial_id`,`descricao`) values (1,'Coca-Cola Lata 350ml',4,1,1,'p-60a181fa6a605.png',1,'nada de mais'),(3,'Coca-Cola Mini',3,1,0,'',1,NULL),(4,'Hamburguer Simples',15,2,1,'',1,'carne e salada'),(5,'Lasanha Pequena - Frango',17,3,1,'',1,NULL),(6,'Lasanha Pequena - Bolonhesa',17,3,1,'',1,NULL);

/*Table structure for table `produtotipos` */

DROP TABLE IF EXISTS `produtotipos`;

CREATE TABLE `produtotipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `icone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `produtotipos` */

insert  into `produtotipos`(`id`,`nome`,`icone`) values (1,'Bebidas','cocktail'),(2,'Lanches','hamburger'),(3,'Pratos','utensils');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `filiacao` int(11) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `usuariotipos_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nome`,`login`,`email`,`senha`,`filiacao`,`data_cadastro`,`usuariotipos_id`) values (2,'Usuario Root','root','teste@teste.com.br','25f9e794323b453885f5181f1b624d0b',1,'2021-04-08 19:42:10',1),(3,'Gerente Geral','gerente','teste@teste.com.br','25f9e794323b453885f5181f1b624d0b',1,'2021-05-14 18:42:47',2),(4,'Garçom 1','gar1','teste@teste.com.br','25f9e794323b453885f5181f1b624d0b',1,'2021-05-14 18:43:31',4),(6,'Cozinheiro Teste','cozinha','teste@teste.com','25f9e794323b453885f5181f1b624d0b',1,'2021-05-14 21:38:27',3),(7,'Operador Um','operador','teste@teste.com','25f9e794323b453885f5181f1b624d0b',1,'2021-06-04 03:47:28',5);

/*Table structure for table `usuariotipos` */

DROP TABLE IF EXISTS `usuariotipos`;

CREATE TABLE `usuariotipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuariotipos` */

insert  into `usuariotipos`(`id`,`nome`) values (1,'Admin'),(2,'Gerente'),(3,'Cozinha'),(4,'Atendente'),(5,'Caixa');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
