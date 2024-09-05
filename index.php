<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-control, .contact-form{
            margin-top: 10px;
        }


        body{
            background-color: darkslateblue;
        }
    </style>
</head>
<body>
<div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <h2 class="text-center text-white font-weight-bold">Contact Form</h2>
            <form class="" action="proses.php" method="post">
                <input type="text" class="form-control" name="nama" placeholder="Nama">
                <input type="text" class="form-control" name="nim" placeholder="NIM">
                <input type="text" class="form-control" name="kelas" placeholder="Kelas">
                <label for="" class="contact-form text-white">Jenis Kelamin</label>
                <input type="radio" name="jenis_kelamin" value="Pria" class ="ml-5 text-white"> 
                    <span class="text-white">Pria</span>
                <input type="radio" name="jenis_kelamin" value="Wanita" class="ml-3 text-white">
                    <span class="text-white">Wanita</span>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
                <textarea name="pesan" rows="8" cols="45" class="form-control" name="pesan" placeholder="Pesan"></textarea> <br>
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-light" >Kirim</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>

</html>