<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Tugas ke 3, PHP ke 1, CRUD">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- bootstrap offline -->
    <!-- <link rel="stylesheet" href="./style/bootstrap-5.1.3-dist/css/bootstrap.css"> -->
</head>

<body>
    <div class="container">
        <div class="content">
            <h1 style="text-align: center; margin-top:2rem;">Add New Data</h1>
            <form class="mt-5" style="margin: 0 auto; width: 50vw;" action="./controller.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="file" name="gambar" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas">
                </div>
                <div class="mb-3">
                    <label for="asal" class="form-label">Asal</label>
                    <input type="text" name="asal" class="form-control" id="asal">
                </div>
                <button type="submit" name="create" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- bootstrap offline -->
<!-- <script src="./style/bootstrap-5.1.3-dist/js/bootstrap.js"></script> -->
<!-- <script src="./style/fontawesome-free-6.1.1-web/js/all.js"></script> -->

<script src="./js/index.js"></script>

</html>