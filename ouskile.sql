/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50638
 Source Host           : localhost:8889
 Source Schema         : crb

 Target Server Type    : MySQL
 Target Server Version : 50638
 File Encoding         : 65001

 Date: 28/06/2018 15:21:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for objet
-- ----------------------------
DROP TABLE IF EXISTS `objet`;
CREATE TABLE `objet` (
  `id` int(255) NOT NULL,
  `nom` text,
  `description` text,
  `variante` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of objet
-- ----------------------------
BEGIN;
INSERT INTO `objet` VALUES (1, 'London rock', 'Sucre d\'orge à la menthe poivrée en forme de canne éventuellement torsadée et quand on le coupe à quelque hauteur que ce soit on découvre sur la section de la canne l\'inscription \"London Rock\"', 'Où-c-qui-l-est Irlandais');
INSERT INTO `objet` VALUES (2, 'Bobine de ficelle à poulet (Big Bobby)', 'Se rendre dans un magasin de bricolage, on demande une bobine de ficelle à poulet, on la paye au prix demandé par le commercant et on la baptiste \"Big Bobby\" au cours d\'une brève cérémonie au bord de l\'eau', 'Où-c-qui-l-est Irlandais');
INSERT INTO `objet` VALUES (3, 'Poignée de sable du Mozambique', 'Poignée de zable du Mozambique, soit en se rendant personnellement au Mozambique, soit en faisant appel à un ami qui a des appointances sabloneuses dans ce pays', 'Où-c-qui-l-est Irlandais');
INSERT INTO `objet` VALUES (4, 'Ziboinboin', 'Kangourou mais il est traditionnellement figuré sous les traits d\'un castor. On trouve dans la vallée de la Nièvre des boutiques spécialisées qui vendent des miniatures de castor en plastique, on en achète une, on la baptise Ziboinboin, de préférence pendant l\'open de tennis d\'Australie', 'Où-c-qui-l-est Tantale');
INSERT INTO `objet` VALUES (5, 'Butter Basilic', 'C\'est une figurine que l\'on fabrique en sculptant dans cette grosse courge qu\'on appelle Butternut une réplique de la basilique Sagrada Familia de Barcelone', 'Où-c-qui-l-est Tantale');
INSERT INTO `objet` VALUES (6, 'L\'ami Pierrot', 'Dessert gourmand fabriqué par le chef 3 étoiles Pierre Ganière', 'Où-c-qui-l-est Tantale');
COMMIT;

-- ----------------------------
-- Table structure for utilisateur
-- ----------------------------
DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
  `id` int(220) NOT NULL AUTO_INCREMENT,
  `username` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of utilisateur
-- ----------------------------
BEGIN;
INSERT INTO `utilisateur` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
