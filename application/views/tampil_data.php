<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
</head>
<body>
    <center><h1>Data Mahasiswa</h1></Center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
      <?php
      $no = 1;
      foreach ($mahasiswa as $u) {
      ?>
      <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->nim ?></td>
          <td><?php echo $u->nama ?></td>
          <td><?php echo $u->alamat ?></td>
          <td><?php echo $u->pekerjaan ?></td>
          <td><img src="<?php echo base_url1();?><?php echo $u->foto ?>"width="50" height="50"></td>
          <td>
                <?php echo anchor('kampus/edit/'.$u->id,'Edit'); ?>
                <?php echo anchor('kampus/hapus'.$u->id,'Hapus'); ?>
          <td>
       </tr>
        <?php } ?>
    </table>
    <Center><?php echo anchor('kampus/tambah','<input type=button value=\'Tambah Data\'>'); ?></center>
</body>
</html>