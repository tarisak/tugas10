<html>
    <head>
        <title> Web Sekolah </title>
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost", "root", "" ,"db_siswa");

        //check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL:". mysqli_connect_error();
            exit();
        }
        ?>
    </body>
</html>