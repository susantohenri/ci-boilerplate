<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_kemampuan extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `kemampuan` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `nama` varchar(255) NOT NULL,
        `prosentase` INT(11) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `kemampuan`");
  }

}