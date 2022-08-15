<?php require './controller.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- bootstrap offline -->
    <!-- <link rel="stylesheet" href="./style/bootstrap-5.1.3-dist/css/bootstrap.css"> -->
</head>

<body>
    <div class="container">
        <div class="content" style="margin: 2rem auto;">
            <h1 style="text-align: center;">Edit Data</h1>
            <?php foreach ($data as $d) { ?>
                <div class="card" style="width: 18rem; margin: 0 auto;">
                    <img src="./image/<?= $d['gambar']; ?>" class="card-img-top" alt="img-<?= $d['nama']; ?>">
                    <div class="card-body">
                        <form action="./controller.php" method="POST" class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="<?= $d['nama']; ?>">
                            <label for="asal" class="form-label">Asal</label>
                            <input type="text" class="form-control" name="asal" id="asal" placeholder="<?= $d['asal']; ?>">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="<?= $d['kelas']; ?>">
                            <input type="hidden" name="id" value="<?= $d['id'] ?>">
                            <button type="submit" name="edit" class="btn btn-primary" style="margin-top: 1rem;">submit</button>
                        </form>
                        <a href="/" class="btn btn-success">Home</a>
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