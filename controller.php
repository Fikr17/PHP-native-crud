<?php

include "connect-db.php";

/* $b = '<br>';

if($connect->connect_error){
    echo "error";
    return;
}else{
    echo "succes connect<br>";
} */

// $data = $connect->query("SELECT * FROM `mahasiswa`");

$data = pg_fetch_all(pg_query($connect, "SELECT * FROM mahasiswa"));

$base_url = ((isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == "https") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

// var_dump($_SERVER);

if (isset($_GET['id'])) { // id = mengambil parameter dari url blabla?id=123
    $id = $_GET['id'];

    // $data = $connect->query("SELECT * FROM `mahasiswa` WHERE id=$id");
    $data = pg_fetch_all(pg_query($connect, "SELECT * FROM mahasiswa WHERE id=$id"));
    return $data;
}

if (isset($_POST['create'])) {
    $gambar = $_FILES['gambar'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $asal = $_POST['asal'];

    $ekstensi_gambar = explode('.', $gambar['name']);
    $ekstensi_gambar = strtolower(end($ekstensi_gambar));// mengambil jenis file
    $nama_gambar = md5(time()) .'.'. $ekstensi_gambar;// mengacak nama file

    $target_dir = "./image/";
    $target_file = $target_dir . basename($nama_gambar);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if (isset($_POST["gambar"])) {
        $check = getimagesize($gambar["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($gambar["size"] > 5000000) {//5 MB
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        return;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($gambar["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($nama_gambar)) . " has been uploaded.";
            $add_data = "INSERT INTO mahasiswa (nama, asal, kelas, gambar) VALUES ('$nama', '$asal', '$kelas', '$nama_gambar')";

            // if ($connect->query($add_data) === TRUE) {
            if(pg_query($connect, $add_data)) {
                echo "New record created successfully";
                header("Location: $base_url");
            } else {
                // echo "Error: " . $add_data . "<br>" . $connect->error;
                echo "Error: " . $add_data . "<br>" . pg_errormessage($connect);
                return;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
            return;
        }
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $asal = $_POST['asal'];

    $sql = "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', asal='$asal' WHERE id=$id";
    echo ($id. " ". $nama. " ". $kelas. " ". $asal);
    // if ($connect->query($sql) === TRUE) {
    if (pg_query($connect, $sql)) {
        echo "Record updated successfully";
        header("Location: $base_url");
    } else {
        // echo "Error updating record: " . $connect->error;
        echo "Error updating record: " . pg_errormessage($connect);
        return;
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['hidden-delete'];
    $sql = "DELETE FROM mahasiswa WHERE id=$id";

    // $data = $connect->query("SELECT * FROM mahasiswa WHERE id=$id");
    $data = pg_fetch_all(pg_query($connect, "SELECT * FROM mahasiswa WHERE id=$id"));
    // $nama_gambar = mysqli_fetch_array($data)['gambar'];
    $nama_gambar = $data[0]['gambar'];
    $path = './image/';
    if($nama_gambar != 'default-user.jpeg') {
        unlink($path.$nama_gambar);
    }

    // if ($connect->query($sql) === TRUE) {
    if (pg_query($connect, $sql)) {
        echo "Record deleted successfully";
        header("Location: $base_url");
    } else {
        // echo "Error deleting record: " . $connect->error;
        echo "Error deleting record: " . pg_errormessage($connect);
        return;
    }
}


// $connect->close();
pg_close($connect);