<?php
include("connection.php");

$query = "SELECT * FROM list";
$data = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Kegiatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0000ff">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">List Kegiatan</a>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="insert_form.php"> Tambah Kegiatan </a>
                  </li>
              </div>
            </div>
          </nav>
    </section>
    <section>
    <div id = main>
        <div class ="judul mb-5" >
            <h1 style= "text-align:center">
                List Kegiatan
            </h1>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" align="center">

                <thead>
                    <tr>
                    <th>Kegiatan</th>
                    <th>Waktu</th>
                    <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $d){ ?>
                    <tr>
                        <td>
                            <?= $d["kegiatan"] ?>
                        </td>
                        <td>
                            <?= $d["waktu"] ?>
                        </td>
                        <td>
                            <a href="edit_form.php?id=<?= $d['id'] ?>&nama=<?=$nama?>" class="btn btn btn-outline-success"> Edit</a>
                            <a href="hapus_db.php?id=<?= $d['id'] ?>&nama=<?=$nama?>" class="btn btn btn-outline-danger"> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </div>
    </section>
</body>
</html>