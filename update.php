<?php

include 'database.php';

$id = (int)$_GET['id'];

$mahasiswa = tampil("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['update'])){
    if (update_mahasiswa($_POST) > 0 ){
        echo "<script>
                alert('Data Mahasiswa Berhasil Diupdate');
                document.location.href = 'tampil.php';
                </script>";
    } else {
        echo "<script>
                alert('Data Mahasiswa Gagal Diupdate');
                document.location.href = 'tampil.php';
                </script>";
    }
}

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
  <h1>Ubah Mahasiswa</h1>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="nama" name="nama" value = "<?= $mahasiswa['nama']; ?>" placeholder="Nama Mahasiswa">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat Mahasiswa</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value = "<?= $mahasiswa['alamat']; ?>"placeholder="Alamat Mahasiswa">
    </div>
    <div class="mb-3">
        <label for="usia" class="form-label">Usia Mahasiswa</label>
        <input type="number" class="form-control" id="usia" name="usia" value = "<?= $mahasiswa['usia']; ?>"placeholder="Usia Mahasiswa">
    </div>

    <button type="submit" name="update" class="btn btn-primary" >Update</button>
  </form>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

</html>