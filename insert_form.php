<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Kegiatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
	input[type=submit]{
	background-color: #ffffff;}
	</style>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0000ff">
            <div class="container-fluid">
              <a class="nav-link active text-light" href="index.php">List Kegiatan</a>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="navbar-brand" href="insert_form.php"> Tambah Kegiatan </a>
                  </li>
              </div>
            </div>
          </nav>
    </section>
    <section>
    <form action="insert_db.php" method="post">
        <hr>
        <h2 class="text-center">Tambah Kegiatan</h2>
        <hr>
        <table class="table table-primary table-striped">
            <thead>
                <th >Kolom</th>
                <th >Data</th>
				<th >Keterangan</th>
            </thead>
            <tbody>
			<tr>
                <td><I>Kegiatan</I></td>
                <td><input type="text" name="kegiatan" ></td>
				<td>Isi kolom dengan kegiatan</td>
            </tr>
            <tr>
                <td><I>Waktu</I></td>
                <td><input type="text" name="waktu" ></td>
				<td>Isi dengan waktu, sesuaikan dengan kebutuhan </td>
            </tr>
            <tr>
                <td><I>Disimpan ?</I></td>
                <td><input type="submit" value="Yes"></td>
				<td>Untuk menyimpan kegiatan </td>
            </tr>
			<tr>
                <td><I>Catatan</I></td>
				<td>Still Fragile! </td>
                <td>Abuse-nya ditahan dulu, yaaaa :') -BANGJOYY</td>
            </tr>
            </tbody>
            
        </table>
		
    </body>
    </section>
</body>
</html>