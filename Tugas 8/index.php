<html>
<head>
  <title>CRUD & Upload</title>
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body class="container mt-5">
  <h1 class="mb-4">Data Siswa</h1>
  <a href="form_simpan.php" class="btn btn-primary mb-sm-3 ">Tambah Data</a><br><br>
  <table class="table table-bordered ">
  <tr>
    <th>Foto</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM siswa");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."'class='img-thumbnail' width='100' height='100'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."' class='btn btn-warning'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-danger'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>