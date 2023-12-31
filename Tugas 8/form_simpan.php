<html>
<head>
  <title>Menambahkan data</title>
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body class="container mt-5">
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table class="table">
  <tr>
    <td>NIS</td>
    <td><input type="text" name="nis"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto">
    <p>(Pastikan rasio foto 1:1)</p></td>
   
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan" class="btn btn-success">
  <a href="index.php"><input type="button" value="Batal" class="btn btn-secondary"></a>
  </form>
</body>
</html>