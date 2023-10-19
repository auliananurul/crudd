<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <CodeIgniter>
        <h1>Input Data Mahasiswa</h1>
     </CodeIgniter>
    <from action="<?php echo base_url (). 'index.php/kampus/tambah_aksi'; ?>"method="post" enctype="multipart/from-data">
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
           </tr>
           <tr>
            <td>Upload Foto</td>
            <td><input type="file" name="foto"></td>
         </tr>
         <tr>
                <td></td>
                <td><input type="submit" value="tambah"> <input type="reset" value="batal"> <?php echo anchor ('kampus/index','<input type=button value=Kembali>'); ?></td>
            </tr>
        </table>
    </from>
</body>
</html>   