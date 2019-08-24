<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_strukdetail extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `strukdetail` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `struk` varchar(255) NOT NULL,
        `jatahDesaDetail` varchar(255) NOT NULL,
        `dijatah` INT(11) NOT NULL,
        `dibulatkan` INT(11) NOT NULL,
        `diterima` INT(11) NOT NULL,
        PRIMARY KEY (`uuid`),
        KEY `struk` (`struk`),
        KEY `jatahDesaDetail` (`jatahDesaDetail`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `strukdetail`");
  }

}