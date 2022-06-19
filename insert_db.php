<?php

include("connection.php");

$kegiatan = $_POST["kegiatan"];
$waktu = $_POST["waktu"];

mysqli_query($conn,"INSERT INTO list VALUES('','$kegiatan','$waktu')");

$sql="SELECT * FROM list";
$result=mysqli_query($conn,$sql);

echo "<table border='1'>";
echo "<tr><td>Kegiatan</td><td>waktu</td></tr>";

while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['kegiatan']."</td>";
    echo "<td>".$row['waktu']."</td>";
    echo "</tr>";
}

?>