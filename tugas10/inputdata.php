<!DOCTYPE html>
<html>

<head>
    <title>Formulir Registrasi Siswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white"><center><h4>Formulir Siswa Baru</h4></center></div>
            <div class="card-body">
            <form method="post" action="simpandata.php"> 
                     
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label ">Nama Lengkap </label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" name="kelas" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label ">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control">
                                <span class="warning"></span>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-sm-10 ">
                                <button type="submit" name="Submit" class="btn btn-primary" >Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>