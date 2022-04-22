<?php

include("DB.php");
include("Pengurus.php");
include("BidangDivisi.php");

$pengurus = new Pengurus();
$pengurus->open();

$bidangDivisi = new BidangDivisi();
$bidangDivisi->open();
$optionBidangDivisi = $bidangDivisi->getBidangDivisi();

// Menambah data divisi
if(isset($_POST['addPengurus'])){
    //memanggil add
    $pengurus->add($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TP2 DPBO</title>
  </head>

  <body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/Rhodes_Island_black.png" width="35" height="30">
                    Rhodes Island
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="formPengurus.php">Tambah Pengurus</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="formDivisi.php">Divisi</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="formBidangDivisi.php">Bidang Divisi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="form-pengurus">
        <div class="container my-5 px-5">
        <h1 class="text-center pt-3">Input Pengurus</h1>
            <form action="formPengurus.php" method="POST">
            <div class="form-row mb-3 px-5">
                <div class="form-group col">
                <label for="nimPengurus">NIM Pengurus</label>
                <input type="text" class="form-control" name="nimPengurus" required />
                </div>
            </div>

            <div class="form-row mb-3 px-5">
                <div class="form-group col">
                <label for="namaPengurus">Nama Pengurus</label>
                <input type="text" class="form-control" name="namaPengurus" required />
                </div>
            </div>

            <div class="form-row mb-3 px-5">
                <div class="form-group col">
                <label for="semesterPengurus">Semester</label>
                <input type="number" min="1" max="14" class="form-control" name="semesterPengurus" required />
                </div>
            </div>

            <div class="form-row mb-2 px-5">
                <div class="form-group col">
                <label for="bidangPengurus">Bidang Divisi</label>
                <select class="select form-control" name="bidangPengurus">
                    <?php
                        while($row = mysqli_fetch_array($optionBidangDivisi, MYSQLI_ASSOC)) {
                            echo "<option value= ' {$row['id_bidang']} '> {$row['jabatan']} </option>";
                        }
                        $bidangDivisi->close();
                    ?>
                </select>
                </div>
            </div>


            <button type="submit" name="addPengurus" class="btn btn-dark my-3 mx-5">Tambah Pengurus</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>