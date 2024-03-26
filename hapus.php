<?php

include 'database.php';


$id = (int)$_GET['id'];

if (delete_mahasiswa($id)>0){
    echo "<script>
                alert('Data Mahasiswa Berhasil Dihapus');
                document.location.href = 'tampil.php';
                </script>";
} else {
    echo "<script>
                alert('Data Mahasiswa Berhasil Dihapus');
                document.location.href = 'tampil.php';
                </script>";
}

?>