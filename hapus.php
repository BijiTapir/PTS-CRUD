<?php
require "fuction.php";
    // $koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");
    $id = $_GET["idku"];

    // $query = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id =$id");
    // mysqli_query($koneksi, $query);


    // if (mysqli_affected_rows ($koneksi) > 0 ){
        if(hapus($id) > 0){
        echo "
            <script>
                alert('Data Berhasil DI Hapus');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal DI  Hapus');
                document.location.href = 'index.php';
            </script>
        ";
    }
    
?>