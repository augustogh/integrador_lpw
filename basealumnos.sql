SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `medicina`
  CHARACTER SET `utf8`
  COLLATE `utf8_general_ci`;

USE `medicina`;

/* Tables */
CREATE TABLE `administradores` (
  `id_admin`  int(1) NOT NULL,
  `usuario`   varchar(20) NOT NULL,
  `password`  varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE = MyISAM;

CREATE TABLE `alumnos` (
  `dni`                int(8) NOT NULL,
  `apellido y nombre`  varchar(50) CHARACTER SET `utf8` COLLATE `utf8_general_ci` NOT NULL,
  `direccion`          varchar(50) CHARACTER SET `utf8` COLLATE `utf8_general_ci` NOT NULL,
  `email`              varchar(50) CHARACTER SET `utf8` COLLATE `utf8_general_ci` NOT NULL,
  `ciudad`             varchar(50) CHARACTER SET `utf8` COLLATE `utf8_general_ci` NOT NULL,
  `provincia`          varchar(50) CHARACTER SET `utf8` COLLATE `utf8_general_ci`,
  `id_carrera`         int(1) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE = MyISAM;

CREATE TABLE `carrera` (
  `id_carrera`            int(1) NOT NULL,
  `nombre de la carrera`  varchar(50) CHARACTER SET `utf8` COLLATE `utf8_general_ci` NOT NULL,
  `duracion de carrera`   int(1) NOT NULL,
  `facultad`              varchar(60) CHARACTER SET `utf8` COLLATE `utf8_general_ci` NOT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE = MyISAM;