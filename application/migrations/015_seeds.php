<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_seeds extends CI_Migration {

  function up () {
  	$this->load->model(array('Users', 'Roles', 'Permissions'));
  	$admin = $this->Roles->create(array('name' => 'admin'));
    foreach (array('User', 'Role', 'Permission', 'Infaq', 'Jamaah', 'JatahDesa', 'JatahDesaDetail', 'Kemampuan', 'Struk', 'StrukDetail', 'Kas', 'Masjid', 'Qurban', 'KasRemaja'/*additionalEntity*/) as $entity)
    {
      foreach (array('index', 'create', 'read', 'update', 'delete') as $action)
      {
        $this->Permissions->create(array(
          'role' => $admin,
          'action' => $action,
          'entity' => $entity
        ));
      }
    }

    $this->Users->create(array(
  		'username' => 'admin',
  		'password' => md5('admin'),
  		'role' => $admin
  	));

    $this->db->query("
      INSERT INTO `infaq` (`uuid`, `orders`, `createdAt`, `updatedAt`, `nama`, `level`, `kk`) VALUES ('cb46f512-c62a-11e9-94b3-af3d22f46108', '29', NULL, NULL, 'IR (%)', '', ''),
      ('cb46f846-c62a-11e9-94b3-af3d22f46108', '30', NULL, NULL, 'DAPUR PUSAT', '', ''),
      ('cb46fa3a-c62a-11e9-94b3-af3d22f46108', '32', NULL, NULL, 'ORGANISASI PUSAT', '', ''),
      ('cb46fada-c62a-11e9-94b3-af3d22f46108', '33', NULL, NULL, 'BATA MERAH', '', ''),
      ('cb46fb70-c62a-11e9-94b3-af3d22f46108', '34', NULL, NULL, 'PEMBELAAN DAERAH', '', ''),
      ('cb46fbfc-c62a-11e9-94b3-af3d22f46108', '35', NULL, NULL, 'KESJA MUBALIGH DAERAH', '', ''),
      ('cb46fc88-c62a-11e9-94b3-af3d22f46108', '36', NULL, NULL, 'CKM PONPES', '', ''),
      ('cb46fd0a-c62a-11e9-94b3-af3d22f46108', '37', NULL, NULL, 'PPG DAERAH', '', ''),
      ('cb46fd8c-c62a-11e9-94b3-af3d22f46108', '38', NULL, NULL, 'KAFAROH', '', ''),
      ('cb46fe18-c62a-11e9-94b3-af3d22f46108', '39', NULL, NULL, 'ORGANISASI DAERAH', '', 'Ya'),
      ('cb46fea4-c62a-11e9-94b3-af3d22f46108', '40', NULL, NULL, 'SDIT', '', ''),
      ('cb46ff30-c62a-11e9-94b3-af3d22f46108', '41', NULL, NULL, 'CKM (Quran, Khadist, Materi)', '', ''),
      ('cb46ffbc-c62a-11e9-94b3-af3d22f46108', '42', NULL, NULL, 'KEBUTUHAN DESA', '', ''),
      ('cb470066-c62a-11e9-94b3-af3d22f46108', '43', NULL, NULL, 'ORG/OR/DANSOS', '', 'Ya'),
      ('cb470174-c62a-11e9-94b3-af3d22f46108', '45', NULL, NULL, 'KESJA MUBALIGH KELOMPOK', '', ''),
      ('cb470214-c62a-11e9-94b3-af3d22f46108', '46', NULL, NULL, 'NUANSA KELOMPOK', '', ''),
      ('cb470296-c62a-11e9-94b3-af3d22f46108', '47', NULL, NULL, 'JIMPITAN', '', 'Ya'),
      ('cb470318-c62a-11e9-94b3-af3d22f46108', '48', NULL, NULL, 'KEBUTUHAN KELOMPOK', '', '')
    ");

    $this->db->query("
      INSERT INTO `jamaah` (`uuid`, `orders`, `createdAt`, `updatedAt`, `nama`, `kemampuan`, `posisi`) VALUES ('03fd5944-c628-11e9-94b3-af3d22f46108', '5', '2019-08-24 11:31:17', '2019-08-24 11:31:17', 'HJ KURAESIN', '8c8372ea-c622-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('0a634a8c-c628-11e9-94b3-af3d22f46108', '6', '2019-08-24 11:31:28', '2019-08-24 11:31:28', 'FIRMANSYAH AA', '8c8372ea-c622-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('10c64384-c628-11e9-94b3-af3d22f46108', '7', '2019-08-24 11:31:39', '2019-08-24 11:31:39', 'NUR HIDAYAT', '8c8372ea-c622-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('16cac96c-c628-11e9-94b3-af3d22f46108', '8', '2019-08-24 11:31:49', '2019-08-24 11:31:49', 'M FAJAR', '8c8372ea-c622-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('24a80b8a-c628-11e9-94b3-af3d22f46108', '9', '2019-08-24 11:32:12', '2019-08-24 11:32:12', 'AMIR / DINI', '8c8372ea-c622-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('2c339a9a-c628-11e9-94b3-af3d22f46108', '10', '2019-08-24 11:32:25', '2019-08-24 11:32:25', 'SUMARNO', '8c8372ea-c622-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('351b67e6-c628-11e9-94b3-af3d22f46108', '11', '2019-08-24 11:32:40', '2019-08-24 11:32:40', 'CIK ANANG Z', '477ddff4-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('3e34180a-c628-11e9-94b3-af3d22f46108', '12', '2019-08-24 11:32:55', '2019-08-24 11:32:55', 'RIZKI REZA P', '477ddff4-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('539d5d36-c629-11e9-94b3-af3d22f46108', '18', '2019-08-24 11:40:41', '2019-08-24 11:40:41', 'FIRDAUS', '477ddff4-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('63a57854-c628-11e9-94b3-af3d22f46108', '13', '2019-08-24 11:33:58', '2019-08-24 11:33:58', 'BURHANUDIN RW', '477ddff4-c623-11e9-94b3-af3d22f46108', 'Anggota Keluarga'),
      ('65b504ce-c629-11e9-94b3-af3d22f46108', '19', '2019-08-24 11:41:11', '2019-08-24 11:41:11', 'SIDIK', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('6c108402-c628-11e9-94b3-af3d22f46108', '14', '2019-08-24 11:34:12', '2019-08-24 11:34:12', 'FITRIYANI', '477ddff4-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('73d0c8f0-c628-11e9-94b3-af3d22f46108', '15', '2019-08-24 11:34:25', '2019-08-24 11:34:25', 'SUSILAWATI', '477ddff4-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('76c59e9a-c629-11e9-94b3-af3d22f46108', '20', '2019-08-24 11:41:40', '2019-08-24 11:41:53', 'EVI / RAMDHAN', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('7e271b06-c628-11e9-94b3-af3d22f46108', '16', '2019-08-24 11:34:42', '2019-08-24 11:34:42', 'ITA PRASTIA', '477ddff4-c623-11e9-94b3-af3d22f46108', 'Anggota Keluarga'),
      ('85d42d80-c628-11e9-94b3-af3d22f46108', '17', '2019-08-24 11:34:55', '2019-08-24 11:34:55', 'HETTY ASTUTI', '477ddff4-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('9037be58-c629-11e9-94b3-af3d22f46108', '21', '2019-08-24 11:42:22', '2019-08-24 11:42:22', 'NANI', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Anggota Keluarga'),
      ('988ef4c2-c629-11e9-94b3-af3d22f46108', '22', '2019-08-24 11:42:36', '2019-08-24 11:42:36', 'YENI NURAENI', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('9fe2fe1c-c629-11e9-94b3-af3d22f46108', '23', '2019-08-24 11:42:48', '2019-08-24 11:42:48', 'PAIDA', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('a793c83a-c629-11e9-94b3-af3d22f46108', '24', '2019-08-24 11:43:01', '2019-08-24 11:43:01', 'M SULAIMAN', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('b0d3e718-c629-11e9-94b3-af3d22f46108', '25', '2019-08-24 11:43:17', '2019-08-24 11:43:17', 'SITI NURSOLEKHA', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Anggota Keluarga'),
      ('b80a6e8a-c629-11e9-94b3-af3d22f46108', '26', '2019-08-24 11:43:29', '2019-08-24 11:43:29', 'FUAD ZN', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Anggota Keluarga'),
      ('c29d3d46-c629-11e9-94b3-af3d22f46108', '27', '2019-08-24 11:43:47', '2019-08-24 11:43:47', 'FIRMAN', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Anggota Keluarga'),
      ('c8cce6da-c629-11e9-94b3-af3d22f46108', '28', '2019-08-24 11:43:57', '2019-08-24 11:43:57', 'RINA', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Anggota Keluarga'),
      ('d10fbe44-c629-11e9-94b3-af3d22f46108', '29', '2019-08-24 11:44:11', '2019-08-24 11:44:11', 'EUIS', '4cc8177c-c623-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('e6eed2c4-c627-11e9-94b3-af3d22f46108', '1', '2019-08-24 11:30:29', '2019-08-24 11:30:29', 'HJ TRESNAWATY', 'b57e930e-c5fb-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('ee983574-c627-11e9-94b3-af3d22f46108', '2', '2019-08-24 11:30:42', '2019-08-24 11:30:42', 'AGUS S WIBOWO', 'bcb85510-c5fb-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('f2e25088-c627-11e9-94b3-af3d22f46108', '3', '2019-08-24 11:30:49', '2019-08-24 11:45:19', 'HENRI S', 'bcb85510-c5fb-11e9-94b3-af3d22f46108', 'Kepala Keluarga'),
      ('fe4da3aa-c627-11e9-94b3-af3d22f46108', '4', '2019-08-24 11:31:08', '2019-08-24 11:31:08', 'KHOIRUL K', '8c8372ea-c622-11e9-94b3-af3d22f46108', 'Kepala Keluarga')
    ");

    $this->db->query("
      INSERT INTO `kemampuan` (`uuid`, `orders`, `createdAt`, `updatedAt`, `nama`, `prosentase`) VALUES ('477ddff4-c623-11e9-94b3-af3d22f46108', '6', '2019-08-24 10:57:23', '2019-08-24 12:23:16', 'MENENGAH', '29'),
      ('4cc8177c-c623-11e9-94b3-af3d22f46108', '7', '2019-08-24 10:57:32', '2019-08-24 10:57:32', 'DHUAFA', '0'),
      ('8c8372ea-c622-11e9-94b3-af3d22f46108', '5', '2019-08-24 10:52:10', '2019-08-24 12:23:19', 'MAMPU', '45'),
      ('b57e930e-c5fb-11e9-94b3-af3d22f46108', '1', '2019-08-24 06:14:08', '2019-08-24 12:21:13', 'AGHNIYA', '10'),
      ('bcb85510-c5fb-11e9-94b3-af3d22f46108', '2', '2019-08-24 06:14:20', '2019-08-24 12:23:21', 'LEBIH MAMPU', '16');
    ");
  }

  function down () {

  }

}