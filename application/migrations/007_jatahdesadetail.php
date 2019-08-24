<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_jatahdesadetail extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `jatahdesadetail` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `jatahDesa` varchar(255) NOT NULL,
        `infaq` varchar(255) NOT NULL,
        `nominal` INT(11) NOT NULL,
        PRIMARY KEY (`uuid`),
        KEY `jatahDesa` (`jatahDesa`),
        KEY `infaq` (`infaq`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `jatahdesadetail`");
  }

}