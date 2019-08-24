<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_struk extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `struk` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `jatahDesa` varchar(255) NOT NULL,
        `jamaah` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`),
        KEY `jatahDesa` (`jatahDesa`),
        KEY `jamaah` (`jamaah`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `struk`");
  }

}