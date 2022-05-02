CREATE DATABASE  IF NOT EXISTS `preparacao_pwa2022` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `preparacao_pwa2022`;
-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: preparacao_pwa2022
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artigo`
--

DROP TABLE IF EXISTS `artigo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `artigo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `categoria` int(11) DEFAULT NULL,
  `autor` int(11) DEFAULT NULL,
  `data_publicacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_actualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `categoria` (`categoria`),
  KEY `autor` (`autor`),
  CONSTRAINT `artigo_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `artigo_ibfk_2` FOREIGN KEY (`autor`) REFERENCES `autor` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artigo`
--

LOCK TABLES `artigo` WRITE;
/*!40000 ALTER TABLE `artigo` DISABLE KEYS */;
INSERT INTO `artigo` VALUES (1,'O que é o HTML','O HTML (HyperText Markup Language) é um conjunto estruturado de\r\ninstruções, conhecidas por etiquetas ou tags (em inglês), que dizem a um\r\nbrowser como publicar uma página web, ou seja, o browser interpreta essas\r\netiquetas e desenha a página no ecrã. Estes conjuntos de instruções estão\r\nagrupados em ficheiros de tipo texto, i.e., sem qualquer tipo especial de\r\nformatação.',1,1,'2022-05-02 09:35:55','2022-05-02 09:35:55'),(3,'Elementos de HTML','Todas as páginas de HTML são compostas por elementos. Um elemento pode\r ser visto com um contentor em que é colocada uma secção de uma página web.\r Tudo o que estiver dentro desse contentor fica com as características desse\r mesmo elemento. Se, por exemplo, se quiser fazer uma tabela toda a\r informação referente a essa tabela terá que estar colocado no interior do\r elemento <<table> </table>>',1,1,'2022-05-02 09:41:22','2022-05-02 09:41:22'),(4,'Etiquetas ou tags','Por vezes os termos elemento ou tag, de uma forma errada são usados\r\nindistintamente. Um elemento é composto por duas etiquetas: uma a abrir e\r\noutra a fechar. Apesar de no HTML esta distinção não ser muito importante já no\r\ncaso do XHTML ela torna-se fundamental.\r\nTodas as tags são construídas da mesma forma. A etiqueta inicia-se com o sinal\r\nde “menor que” (<) seguido do nome do elemento e termina com o sinal de\r\n“maior que” (>). A forma da etiqueta para a abertura de um parágrafo é: <p>. A\r\ntag de terminação diferencia-se apenas por possuir uma barra (/) antes do nome\r\ndo elemento: </p>. O conteúdo fica entre as etiquetas de início e fim.\r\nAlguns elementos não precisam de uma tag de terminação porque não incluem\r\nqualquer tipo de conteúdo e são por isso denominados elementos vazios. É\r\nassim que, por exemplo, o elemento de quebra de linha <br> não requer uma\r\netiqueta de terminação.',1,2,'2022-05-02 13:11:59','2022-05-02 13:11:59'),(5,'Atributos e valores','Os atributos são outro elemento importante da linguagem HTML. Um atributo é\r\nutilizado para definir as características de um elemento e é colocado no interior HTML\r\nda tag de abertura do elemento. Por exemplo, para atrbuir a cor a uma palavra\r\nutiliza-se o elemento FONT em conjunto com o atributo COLOR: <font color=” “>.\r\nO sinal de igual e as aspas são fundamentais pois atribuem um valor a um\r\natributo.',1,2,'2022-05-02 13:16:01','2022-05-02 13:16:01'),(6,'Historia do MySQL','O MySQL foi desenvolvido por uma empresa da Suécia, a MySQL\r\nAB, fundada por Michael Widenius, David Axmark e Allan Larsson. O\r\ndesenvolvimento original do MySQL por Widenius e Axmark começou\r\nem 1994. A primeira versão do MySQL apareceu em 23 de maio de 1995.\r\nInicialmente foi criada para uso pessoal a partir do mSQL, considerado\r\nmuito lento e inflexível. O MySQL apresentava, portanto, uma nova\r\ninterface SQL, mantendo a mesma API do mSQL.\r\nA versão do MySQL para Windows (95 e NT) foi lançada em 8 de janeiro\r\nde 1998. Em 2008, a Sun Microsystems adquiriu a MySQL AB. A Oracle\r\nadquiriu a Sun Microsystems em 27 de janeiro de 2010. Portanto, o MySQL atualmente faz parte da linha de produtos oferecidos ao\r\nmercado pela Oracle Corporation.\r\nDurante os últimos anos o MySQL foi o SGBD disponibilizado com mais\r\nfrequência pelos provedores de hospedagem de sites da internet.\r\nEm janeiro de 2009, antes da aquisição do MySQL por parte da Oracle,\r\nMichael Widenius iniciou um \"garfo\" do MySQL – o MariaDB – com\r\nlicenciamento conforme a GPL. O banco de dados MariaDB baseiase na mesma base de código do MySQL 5.5 e pretende manter a\r\ncompatibilidade com as versões fornecidas pela Oracle.',3,1,'2022-05-02 14:43:51','2022-05-02 14:43:51');
/*!40000 ALTER TABLE `artigo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor`
--

LOCK TABLES `autor` WRITE;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT INTO `autor` VALUES (1,'salomaojosevaloi@gmail.com','Salomao Valoi','valoi','12345'),(2,'antoniocumbe97@gmail.com','Antonio Cumbe','cumbe97','12345');
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'HTML'),(3,'MySql');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'preparacao_pwa2022'
--

--
-- Dumping routines for database 'preparacao_pwa2022'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-02 15:59:46
