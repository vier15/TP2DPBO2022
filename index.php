<?php

include("./DB.php");
include("./Pengurus.php");

$pengurus = new Pengurus();
$pengurus->open();

$result = $pengurus->getPengurus();

if(!$result){
    die('Could not get data: ' . mysqli_error());
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="formPengurus.php">Tambah Pengurus</a>
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

    <section id="card-pengurus">
        <?php
        
        echo "<div class='container my-5'";
        echo "<p><h2 class='text-center'>Pengurus</h2></p>";
            echo "<div class='row row-cols-3'";
                echo "<div class='col mx-4'>";
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            
                echo "<div class='card mb-3 shadow'>";
                    echo "<div class='card-body'>";
                        echo "<img src='assets/rhodes_island_nametag.png' class='img-fluid' style='width:100%'>";
                        echo "<h5 class='card-title text-center'> {$row['nama']} </h5>";
                        echo "<p class='card-text text-center'> {$row['jabatan']} </p>";
                    echo "</div>";
                echo "</div>";
            
        }
                echo "</div>";
            echo "</div>";
        echo "</div>";

        ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>