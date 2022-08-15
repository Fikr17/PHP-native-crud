<?php require './controller.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- bootstrap offline -->
    <!-- <link rel="stylesheet" href="./style/bootstrap-5.1.3-dist/css/bootstrap.css"> -->
</head>

<body>
    <div class="container">
        <div class="content">
            <h1 style="text-align: center;">Detail Data</h1>
            <?php foreach ($data as $d) { ?>
                <div class="card" style="width: 20rem; margin: 0 auto;">
                    <img src="./image/<?= $d['gambar'] ?>" class="card-img-top img-thumbnail" alt="img-<?= $d['nama']; ?>" style="max-width: 6rem; margin: 10px auto;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $d['nama']; ?></h5>
                        <p class="card-text"><?= $d['kelas']; ?></p>
                        <p class="card-text"><?= $d['asal']; ?></p>
                        <a href="/" class="btn btn-primary">Home</a>
                        <a href="./edit.php/<?= $d['id'];?>" class="btn btn-success">Edit</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- bootstrap offline -->
<!-- <script src="./style/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
<script src="./style/fontawesome-free-6.1.1-web/js/all.js"></script> -->

<script src="./js/index.js"></script>

</html>