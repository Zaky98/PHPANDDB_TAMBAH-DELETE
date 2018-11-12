<?php

    //membuat koneksi
    $conn=mysqli_connect("localhost", "root", "", "phpdatabse");

    //ambil data dari tabel mahasiswa/query data mahasiswa
    $result=mysqli_query($conn,"SELECT * FROM mahasiswa");

    //function query akan menerima isi parameter dari string query yang ada pada index2.php (line 3)
    function query($query_kedua){
        //dikarena $conn diluar function query maka dibutuhkan scope global $$conn

        global $conn;
        $result = mysqli_query($conn, $query_kedua);

        //wadah kosong untuk menampung isi array pada saat looping line 16

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah ($data) {
        global $conn;

        $Nama = $_POST["Nama"];
        $Nim = $_POST["Nim"];
        $Email = $_POST["Email"];
        $Jurusan = $_POST["Jurusan"];
        $Gambar = $_POST["Gambar"];

        $query = "  INSERT INTO mahasiswa
                    VALUES
                    ('', '$Nama', '$Nim', '$Email', '$Jurusan', '$Gambar')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus ($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id");
        return mysqli_affected_rows($conn);
    }

?>