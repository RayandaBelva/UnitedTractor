<?php

include 'database.php';

$data_mahasiswa = tampil("SELECT * FROM mahasiswa");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0I6wLgVKBHzvV6EnWo2eKKs9v9gxyOJvaOys2qax9ciFApFe6OA6ATtDYUukDhG" crossorigin="anonymous">
</head>
<body>
  <h1>Data Mahasiswa</h1>
  <a href="simpan.php" class="btn btn-primary">Simpan/Input Data </a>
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Usia</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data_mahasiswa as $mahasiswa) : ?>
    <tr>
        <td> <?php echo $no++; ?></td>
        <td> <?php echo $mahasiswa['nama']; ?></td>
        <td> <?php echo $mahasiswa['alamat']; ?></td>
        <td> <?php echo $mahasiswa['usia']; ?></td>
        <td>
          <a href="update.php?id=<?= $mahasiswa['id']; ?>" class="btn btn-warning">Update </a>
          <a href="hapus.php?id=<?= $mahasiswa['id']; ?>" class="btn btn-danger" onclick="return confirm('Data akan Terhapus')">Hapus </a>
        </td>
    </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

</html>