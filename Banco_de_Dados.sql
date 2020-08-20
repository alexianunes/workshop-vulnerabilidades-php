-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2018 às 22:57
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vulnerabilidades`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `cpf` char(14) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `loginhash` varchar(32) DEFAULT NULL,
  `num_cartao` varchar(255) DEFAULT NULL,
  `cod_seguranca` varchar(255) DEFAULT NULL,
  `dt_validade` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `username`, `senha`, `cpf`, `telefone`, `celular`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `loginhash`, `num_cartao`, `cod_seguranca`, `dt_validade`) VALUES
(5, 'TomÃ¡s Raul MÃ¡rio da Paz', 'ttomasraulmariodapaz@anfip.org.br', 'tomas01', '$2y$10$qCYv7tqTClnAdldLnDHvYuPHNfNrgtbqOh6lPUPtNSN1SeUFtPCo2', '640.516.655-42', '(62) 3925-1088', '(62) 99118-6842', '74922-650', 'Rua X 23', 'SÃ­tios Santa Luzia', 'Aparecida de GoiÃ¢nia', 'GO', NULL, '~†\0«AÖ!¿h¾L8yoªÇSÒíVH<D€uH4Fù“ÍñáIx¢]e÷õ´\0±˜ç\"ÂâÏtÇ²Qç®éµ=Àç^‘›³^È\\»hý»\0£«Ý´ÁZÌÇGr2ÇD1º“ÕE-t”z]?j»~±³A', 'A-džè†\'éw°N¨Æô´%†3@øuYÛ/sïÆÔØsõ’Â^\\ìþqð¤^ð\Z¨~ø¦-åÉa?]Dëò]¶:\n½=Ää®®è»Õ˜\'êI3X(ÕŽÂ!Ýú§øä1\"Ê¡DY€Á¿!FU¾¨ÑvV·öš@ÆJ', 'G‘ õ\"å•¬m/Ü ±$\rí[áfÏ”HÎ‡Íê‡øÈ¬DÎh)p!âIIÃ1Äá?m¹|—?·)²ráK?7Œ°öâ4Å/ºÈ—È@„LÌ|´é[<n’8.m®4^%ÔÍ· b“nýn,hT·„›Æ,˜—´ý‰òí'),
(6, 'Emanuel Henry Novaes', 'emanuelhenrynovaes@unimedrio.com.br', 'emanuel02', '$2y$10$6R7S8YTUhNS0zikgk536NuA5KhchAvHNsj3LSqVpZOo5I0TsK4dQi', '895.727.285-20', '(86) 3933-6210', '(86) 99229-4744', '64004-010', 'Rua TomÃ¡s RebÃªlo', 'Mafrense', 'Teresina', 'PI', '3b2df96b1557335561931393edd762a6', 'uÓòÃ,¼x¨½kv÷Þ(«0Ë‘æz>ÿK+èÿ+…–kbhhÅº™Ö±/i(¯jÏ“3ø%ûøW9 WIÑ×\"û	·1@Õˆw1tJ\Z	Ú­‹¿¡xb–gÛb]!ñ(Í×zë¸Ëñdê]¿Œoj\0$ÍïÍ¡ö3JìÊAé', '$G¯¥Ö>pA*ÖIxL\0&¹*OaÆž\nÍ“ž³u,qHmï•s¥¾Æf«…<ó„r¿m<£`”\\Â·ØŸnw“¼~jšù†5RBšœ>y±£Î\"*d€\náèæù6·s43ÁxÈŸ]ùí\"YªŸ`‘°Ð³)£Ú', '\nÍ9þÀgØ›økÎIVFžóV³!ÈÃU¿²¡Éhn†û©G¨Õß‘ëô#þßŒ\\+×&;8:	#C­aË‰\r\0?‹5ùã™K$\Zz¸µ.VµÍ/aLÕ¾$-ßÐQZÏ™Î·eÜ-u¹NËöŽU”cŒûE-í¸5ô¯¨»'),
(7, 'Laura Regina Pinto', 'laurareginapinto_@cordeiromaquinas.com.br', 'laura03', '$2y$10$bj9SDAReKLAKxJXhxPGSr.EkzCyHOlY8Glv/ByhenUJdyFTlMfEA.', '179.829.979-88', '(27) 2588-7468', '(27) 99807-5182', '29010-011', 'Rua Ilka Monteiro SimÃµes', 'Centro', 'VitÃ³ria', 'ES', 'ff70c053ee110d092b681f1c368350b1', '\n SÝ Oï˜fËñ—­Uåª€.j³ÆpDã‚yû\n%ˆç\"kN®	”MÁ·]ÖiSÆnå¤(;&a òå™ƒ÷¾!ÐÙg³W¶\\’XØY–~6˜”	{U\Zm¤šÝ~›àRÐêÚ;>b]Ù§Å¾«_ŒNL¬â?Ý iÂOô', '“É\\5÷sZCåÉ›;Þ¶jh›Ú5‰…ñI\Z¸+¹£³€—çcìµÌ¡í¾òÚC¦› *Oa‰sMÊ„{ä@ŒÙ‡q]þ¿¯SŠÇ‰/÷Øi\rƒâ*îìièŽ±ŒÏâ¯¾·íë¦O‘™Žã38Á]ºS˜&ÑI´7¦O`áL', '2Ç0Pf^×cÓ³|ÊÒ÷âþv²žþÿtSÒ¸q=¨A\Z åX\0ˆ`+ÿˆ‰K¥i\rÿDütUh,5³>G‘Z–ÙTíwøÿNª_«\'½úHs¹˜}îÝÛÎ§ê^+Ö—ö\Z¯Ì`Ö®ÿ\'!‚Ì­Ü…£ì“\'bðÛœ\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
