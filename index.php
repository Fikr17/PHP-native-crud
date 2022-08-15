<?php

include "./controller.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:title" content="M. Fikri Aulian">
    <meta property="og:url" content="<?= $base_url; ?>">
    <meta name="keywords" content="M Fikri Aulian, Crud, CRUD, M Fikri Aulian UNSRI">
    <meta name="google-site-verification" content="C1fZMdi8eWMa_kNYw_kkowyZhimrPWX7gvOKNXxFEF4" />
    <meta name="description" content="Tugas ke 3, PHP ke 1, CRUD">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas ke 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- bootstrap offline -->
    <!-- <link rel="stylesheet" href="./style/bootstrap-5.1.3-dist/css/bootstrap.css"> -->
</head>

<body>
    <div class="containter">
        <h2 style="text-align: center; margin-top:3rem;">CRUD PHP</h2>
        <div class="content">
            <a href="./create.php" class="btn btn-primary" style="margin-left: 12.5%;">create data</a>
            <table class="table" style="max-width: 75%;margin: 1rem auto;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Asal</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <th scope="row"><?= $d['id'] ?></th>
                            <td><img style="width: 80px;" src="./image/<?= $d['gambar'] ?>" alt="img-<?= $d['nama'] ?>"></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['asal']; ?></td>
                            <td><?= $d['kelas']; ?></td>
                            <td>
                                <a href="./detail.php?id=<?= $d['id'] ?>" class="btn btn-success">detail</a>
                                <a href="./edit.php?id=<?= $d['id'] ?>" class="btn btn-warning">edit</a>
                                <form action="./controller.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="hidden-delete" value="<?= $d['id'] ?>">
                                    <button class="btn btn-danger" name="delete">delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- bootstrap offline -->
<!-- <script src="./style/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
<script src="./style/fontawesome-free-6.1.1-web/js/all.js"></script> -->

<script src="./js/index.js"></script>

</html>