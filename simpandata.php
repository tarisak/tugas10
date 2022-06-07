<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_siswa";
// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
    if(isset($_POST['Submit'])) {
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];

    $sql = "INSERT INTO tb_siswa (nama,kelas,alamat) VALUES ('$nama','$kelas','$alamat')";
        $siswa= mysqli_query($conn, $sql);

            if ($siswa) {
                echo "<script> alert ('Data Siswa Berhasil Ditambah!'); window.location.href='cetakdata.php'</script>";
            exit;
            }
        else {
        echo "Gagal";
        exit;
        }
    }
    header("location:inputdata.php");
?>