<?php 
//  koneksi ke DB & pilih Database

$conn = mysqli_connect('localhost','root','','daftar mahasiswa');

// Query isi table mahasiswa
$result = mysqli_query($conn , "SELECT * FROM mahasiswa ");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // ini array numerik indexnya angka

// $row = mysqli_fetch_assoc($result); // ini array assosiative key nya menggambil field

 // $row = mysqli_fetch_array($result); // menggambil keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variable mahasiswa

$mahasiswa = $rows;

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10 cellspaving="0> 
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1; 
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m ['gambar']; ?>" width="60"></td>
        <td><?= $m['nim']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>