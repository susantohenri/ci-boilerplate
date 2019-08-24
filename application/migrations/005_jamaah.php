<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_jamaah extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `jamaah` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `nama` varchar(255) NOT NULL,
        `kemampuan` varchar(255) NOT NULL,
        `posisi` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`),
        KEY `kemampuan` (`kemampuan`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `jamaah`");
  }

}