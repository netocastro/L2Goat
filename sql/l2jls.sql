/*
Navicat MySQL Data Transfer

Source Server         : connection
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : l2jls

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2020-06-17 12:15:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `accounts`
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `login` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) DEFAULT NULL,
  `lastactive` bigint(13) unsigned NOT NULL DEFAULT '0',
  `accessLevel` tinyint(4) NOT NULL DEFAULT '0',
  `lastIP` char(15) DEFAULT NULL,
  `lastServer` tinyint(4) DEFAULT '1',
  `userIP` char(15) DEFAULT NULL,
  `pcIp` char(15) DEFAULT NULL,
  `hop1` char(15) DEFAULT NULL,
  `hop2` char(15) DEFAULT NULL,
  `hop3` char(15) DEFAULT NULL,
  `hop4` char(15) DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of accounts
-- ----------------------------
INSERT INTO `accounts` VALUES ('123456', 'fEqNCco3Yq9h5ZUglD3CZJT4lBs=', '1587869375795', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('147', 's8BzDPP1BhPkBWHmfIcf25KCDPk=', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('1973', 'OugM5/pHQCTd95WANcgVPjXPkSw=', '1587938841925', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('254', 'yfE8FhRAZanrzLIW8+yDKzPhaTw=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('2549', 'yfE8FhRAZanrzLIW8+yDKzPhaTw=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('258', 'mC/YtxEnmIijtU9a8k8YUEHSLuY=', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('3232', 'o9Y8CwR5rFDNGZ0UonJdrfHh6Vo=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('444', 'mj5htrzIq+wI8ZVSbDEy1aSpjMA=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('456', 'UerGtHGihNM0HYwMY9DxooYmKhg=', '1587869607147', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('555', 'z6EVDxeHGGdCqaiEtzpD2M8hn5s=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('598', 'kes3Xo5x2c4vfN6LCnV/ZslMmYo=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('789', '/BIAx6eqUhCddiqfAFsUmr7wFHk=', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('88', '888', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('888', '88', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('987', 'irzaLbqaXFxnTmWTM4KFghIsX1Y=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('A', '4MkDWJjdUvxlxBRUzsnE0mEb+zc=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('aaa', 'aaa', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('aaaaa', 'fiQN50+x7Qj6CNOAY/amqRRiqBU=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('admin', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1591495704624', '0', '170.84.157.50', '1', null, '192.168.1.101', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('administrador', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1592352074106', '0', '170.84.157.34', '1', null, '192.168.1.103', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('asd', '8Q4oIbu+pSfqAiADUjE7wFlEUZA=', '1588305171668', '0', '45.183.98.65', '1', null, '192.168.0.103', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('asdasd', 'asd', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('asdasdasdasd', 's', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('asdasdasdsad', 'a', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('ashe', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1590448172786', '0', '170.84.157.42', '1', null, '192.168.1.101', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('bnm', 'bILG7vzZPgWz5jIVPEJKcwPsZQ0=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('dagurasugamer', 'YkdD1FSuRyRh3pyhKIkuuqreOP4=', '1587063391798', '0', '45.174.16.38', '1', null, '192.168.0.105', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('deywid', 'P7p6H6w9MXtFytpOX+zlaB+5In4=', '1587253430648', '0', '173.0.146.72', '1', null, '10.0.0.104', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('dfffgffg', 'v8iW4ezTXTJoceYMcGSaHplXH/o=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('draven', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1590450774907', '0', '170.84.157.42', '1', null, '192.168.1.104', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('eaipaunocu@gmail.com', '0ioUgm67eFlsu63mTo1iRO24mhQ=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('emporra', 'UHFzvYAYEs2aJXERY6tSr0yWM6s=', '1587218402780', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('fff', 'f', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('ffff', '0z/vWL7dOdwcLTjxYwWxABDpBY4=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('gaga', 'FZsMSu6aglvkiVBxg/HOwDlR2mM=', '1591323325255', '0', '45.183.98.65', '1', null, '192.168.0.103', '192.168.0.1', '10.0.24.1', '45.183.98.5', '10.2.3.181');
INSERT INTO `accounts` VALUES ('ggg', 'B9zTcVYLxDxI9WovVXOaxmdB1Z0=', '1588305816409', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('ggggg', 'BIkN2OjQw5uSvL+NmY5fzo3o1rg=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('ghj', 'BGgntY8SjV9SITS5xKw8bWg3cFU=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('graveeler', '0cSyxPVSSnfGV92OoGEzRBIZKPs=', '1591201839600', '0', '45.183.98.65', '1', null, '192.168.0.103', '192.168.0.1', '94.142.117.192', '10.0.24.1', '94.142.125.33');
INSERT INTO `accounts` VALUES ('graveelerdfd', 'RFLXFoe2vCyTicM0n9wX+9c7gzs=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('graves', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1591149186568', '0', '170.84.157.50', '1', null, '192.168.1.104', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('grt', 'asd', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('infinity', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1591194175933', '0', '45.183.98.65', '1', null, '192.168.0.103', '192.168.0.1', '10.0.24.1', '45.183.98.5', '10.2.3.181');
INSERT INTO `accounts` VALUES ('jkl', '15jUM4retVOhCJpY5h4Ywvzfd7s=', '1588171633730', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('jub', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('jujuba', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1587933442102', '0', '170.84.157.42', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('jupi', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1587932850550', '0', '170.84.157.42', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('Kaka', '1', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('kamaelporra', '+oQ9XO8B8Kr/+CdPMI+nfQuBCRQ=', '1587312966774', '0', '45.183.98.65', '1', null, '192.168.0.102', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('khil', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('kill', '2jmj7l5rSw0yVb/vlWAYkK/YBwk=', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('kruuu', 'Lm+bDViFtgEPkWd4dEVhf1U6c18=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('lalala', '3y76Bg4zX5dijKOcn+9Uaas8uDc=', '1587933819447', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('ll', 'EQyKMMFgcL8oE0gNlJKhoXCn2Ao=', '1589652563717', '0', '45.183.98.65', '1', null, '192.168.0.101', '192.168.0.1', '10.0.24.1', '45.183.98.5', '10.2.3.181');
INSERT INTO `accounts` VALUES ('lll', '6AstJghxHLszEtt8Ryekb7rZYBo=', '1588305860376', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('loide', 'Lm+bDViFtgEPkWd4dEVhf1U6c18=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('luck', 'Lm+bDViFtgEPkWd4dEVhf1U6c18=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('Marcos1173', 'lA5kxtZiWiW+MVB/Ga7Gn+n4Rx4=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('necroporra', 'mQuVY0f7bkySPWq05EvpP8NHibk=', '1587252454075', '0', '45.183.98.65', '1', null, '192.168.0.102', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('Netogay', '123456', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('netospoil12', 'Y8h0ejqBMxs0n2+m0bObZwcXZ68=', '1587094908930', '0', '179.97.41.200', '1', null, '192.168.1.104', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('netto', 'XURqnCbdjs4tzYg/voIx4tJKhdU=', '1589930192402', '0', '170.84.156.11', '1', null, '10.0.0.108', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('nettok2', 'XURqnCbdjs4tzYg/voIx4tJKhdU=', '1589941375257', '0', '170.84.156.11', '1', null, '10.0.0.108', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('nirvanajr', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1591149052059', '0', '170.84.157.50', '1', null, '192.168.1.104', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('novo', '2jmj7l5rSw0yVb/vlWAYkK/YBwk=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('opop', 'sFi9Ky53u2rLnhqlbRZWoZHl8uY=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('outlander', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1587339838358', '0', '170.84.157.56', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('pedro', 'RBDZnO/lfsLCzb0/HVz4YrtPtvg=', '1589024665115', '0', '45.183.98.65', '1', null, '192.168.0.104', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('pedroeugeniotop', 'FkmU3vR76DeX+Bl1ismVJjAVZlE=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('ph', 'jfdN2hhMGd8Z1HVWAhCFQOBxvzg=', '1588852193993', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('poleiroporra', 'teTdMtuon4ggN8rAGx86L7UDgk8=', '1587253860131', '0', '45.183.98.65', '1', null, '192.168.0.102', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('porleiroporra', 'teTdMtuon4ggN8rAGx86L7UDgk8=', '1587253840687', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('qqq', 'oFbI0FrprGyhgLyZG5O3/+N1Y+A=', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('qtqt', '/wjp0FyQjdsui8NIzmvBthd4wys=', '1588826352594', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('qwe', 'BW6v589SIg3i3zaEW47RcMZ+I+M=', '1588171734974', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('Rafaeldutra', 'do8jUmMTsyNyCwGMtr2jSJ5EJo8=', '1589941474077', '0', '192.140.8.129', '1', null, '192.168.100.128', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('recuperarsenha', '0cSyxPVSSnfGV92OoGEzRBIZKPs=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('rtg', 'l3ct0Ab+dCYlvKRfRc6umLDxnuA=', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('scania', 'Lm+bDViFtgEPkWd4dEVhf1U6c18=', '1591149071432', '0', '170.84.157.50', '1', null, '192.168.1.103', '192.168.1.1', '10.82.78.203', '10.56.0.45', '10.56.1.166');
INSERT INTO `accounts` VALUES ('serie4', 'Lm+bDViFtgEPkWd4dEVhf1U6c18=', '1592265266418', '0', '170.84.157.34', '1', null, '192.168.1.103', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('smsm', 'smsm', '0', '0', null, '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('sphporra', 'RItOeMxhCu+aj84hgknXLu3y1S4=', '1587039504440', '0', '45.183.98.65', '1', null, '192.168.0.103', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('sukita', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1590932580374', '0', '170.84.157.50', '1', null, '192.168.1.104', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('tankerporra', 'aqVo+avTDJ285DyNtaFF+M7Yyfg=', '1589673670497', '0', '45.183.98.65', '1', null, '192.168.0.101', '192.168.0.1', '10.0.24.1', '45.183.98.5', '10.2.3.181');
INSERT INTO `accounts` VALUES ('tassio', 'ibWFfdgfWXE3EikAVJaq3RmFeH4=', '1588112534098', '0', '186.208.75.3', '1', null, '192.168.88.222', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('tassioj', 'ibWFfdgfWXE3EikAVJaq3RmFeH4=', '1587087115608', '0', '186.208.75.3', '1', null, '192.168.88.222', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('tassioj985', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1587080303072', '0', '186.208.75.3', '1', null, '192.168.88.222', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('testando', '+PDZ3yRjoqmo5U0YgcxDk2tnKok=', '1587607337517', '0', '170.84.157.58', '1', '', '0', '0', '0', '0', '0');
INSERT INTO `accounts` VALUES ('teste', 'Lm+bDViFtgEPkWd4dEVhf1U6c18=', '1590711530441', '0', '45.183.98.65', '1', null, '192.168.0.103', '192.168.0.1', '10.0.24.1', '45.183.98.5', '10.2.3.181');
INSERT INTO `accounts` VALUES ('teste2', 'lqYsqYvex/VTQ/jPpZQ3m9unbMk=', '1590106353738', '0', '45.183.98.65', '1', null, '192.168.0.101', '192.168.0.1', '10.0.24.1', '100.65.31.6', '100.64.10.7');
INSERT INTO `accounts` VALUES ('teste3', 'VFjLAGMfxnSPnTpSz2wirpsjLpE=', '1590113457551', '0', '45.183.98.65', '1', null, '192.168.0.102', '192.168.0.1', '10.0.24.1', '45.183.98.5', '10.2.3.181');
INSERT INTO `accounts` VALUES ('testeporra', 'w3EObwJpPLPBnGgoiE+7QdWjd3c=', '1587438831941', '0', '45.183.98.65', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('top', 'fci833J1WVlO4R3II66fVAe6K1A=', '1587043403347', '0', '177.37.170.209', '1', null, null, null, null, null, null);
INSERT INTO `accounts` VALUES ('top01', 'fci833J1WVlO4R3II66fVAe6K1A=', '1587332405488', '0', '177.37.170.209', '1', null, '192.168.1.3', '0.0.0.0', '0.0.0.0', '0.0.0.0', '0.0.0.0');
INSERT INTO `accounts` VALUES ('xx', 'xxx', '0', '0', null, '1', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `account_data`
-- ----------------------------
DROP TABLE IF EXISTS `account_data`;
CREATE TABLE `account_data` (
  `account_name` varchar(45) NOT NULL DEFAULT '',
  `var` varchar(20) NOT NULL DEFAULT '',
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`account_name`,`var`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account_data
-- ----------------------------

-- ----------------------------
-- Table structure for `connection_test_table`
-- ----------------------------
DROP TABLE IF EXISTS `connection_test_table`;
CREATE TABLE `connection_test_table` (
  `a` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of connection_test_table
-- ----------------------------

-- ----------------------------
-- Table structure for `contas_site`
-- ----------------------------
DROP TABLE IF EXISTS `contas_site`;
CREATE TABLE `contas_site` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `login_site` varchar(45) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `login_site` (`login_site`),
  CONSTRAINT `contas_site_ibfk_1` FOREIGN KEY (`login_site`) REFERENCES `accounts` (`login`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contas_site
-- ----------------------------
INSERT INTO `contas_site` VALUES ('a', '4MkDWJjdUvxlxBRUzsnE0mEb+zc=', 'A');
INSERT INTO `contas_site` VALUES ('gaga@gaga', 'FZsMSu6aglvkiVBxg/HOwDlR2mM=', 'gaga');
INSERT INTO `contas_site` VALUES ('gg@hotmail.com', 'Lm+bDViFtgEPkWd4dEVhf1U6c18=', 'kruuu');
INSERT INTO `contas_site` VALUES ('p.victorcavalcante@hotmail.com', 'Lm+bDViFtgEPkWd4dEVhf1U6c18=', 'loide');

-- ----------------------------
-- Table structure for `gameservers`
-- ----------------------------
DROP TABLE IF EXISTS `gameservers`;
CREATE TABLE `gameservers` (
  `server_id` int(11) NOT NULL DEFAULT '0',
  `hexid` varchar(50) NOT NULL DEFAULT '',
  `host` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`server_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gameservers
-- ----------------------------
INSERT INTO `gameservers` VALUES ('1', '6fd722731753b7b3ea951f7507a94257', '');
