<?php 
    include("koneksi.php");
?>
<html>
    <head>
        <title> DATA SISWA </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white"><center><h4>DATA SISWA</h4></center></div>
            <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Nama </th>
                <th scope="col"> Kelas </th>
                <th scope="col"> Alamat </th>
            </tr>
            <?php 
                $siswa = mysqli_query($conn, "SELECT * from tb_siswa");
                foreach ($siswa as $data) {
                    echo "<tr>";
                    echo "<th>".$data['id_siswa']."</th>";
                    echo "<th>".$data['nama']."</th>";
                    echo "<th>".$data['kelas']."</th>";
                    echo "<th>".$data['alamat']."</th>";
                }
            ?>
        </table>
        <a href="inputdata.php"><button class="btn btn-primary">Kembali</button></a>
        <a href="reportdata.php"><button class="btn btn-primary">Report Data</button></a>    
            </div>
        </div>
    </div>
    </body>
</html>