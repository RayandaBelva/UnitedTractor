<?php
$db = mysqli_connect('localhost', 'root', '', 'db_akademik');

function tampil($query){
    global $db;
    
    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function simpan_mahasiswa($post){
    global $db;

    $nama = $post['nama'];
    $alamat = $post['alamat'];
    $usia = $post['usia'];

    $query = "INSERT INTO mahasiswa VALUES(null, '$nama', '$alamat', '$usia')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function update_mahasiswa($post){
    global $db;

    $id = $post['id'];
    $nama = $post['nama'];
    $alamat = $post['alamat'];
    $usia = $post['usia'];

    $query = "UPDATE mahasiswa SET nama = '$nama', alamat ='$alamat', usia = '$usia' WHERE id = $id ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete_mahasiswa($id){ 
    global $db;

    $query = "DELETE FROM mahasiswa WHERE id = $id ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>