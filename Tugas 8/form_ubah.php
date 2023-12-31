<html>
<head>
  <title>Mengubah data</title>
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body class="container mt-5">
  <h1>Ubah Data Siswa</h1>
  <?php
  include "koneksi.php";
  $id = $_GET['id'];
  $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute(); 
  $data = $sql->fetch(); 
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <td>NIS</td>
        <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
        <?php
        if($data['jenis_kelamin'] == "Laki-laki"){
          echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
          echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
        }else{
          echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
          echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
        }
        ?>
        </td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
      </tr>
      <tr>
        <td>Foto</td>
        <td>
          <input type="file" name="foto">
          <p>(Pastikan rasio foto 1:1)</p>
        </td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah" class="btn btn-success ">
    <a href="index.php"><input type="button" value="Batal" class="btn btn-secondary"></a>
  </form>
</body>
</html>