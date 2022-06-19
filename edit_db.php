<?php
$id = $_GET['id'];
include("connection.php");
$id = mysqli_real_escape_string($conn, $_POST['id']);
$kegiatan = $_POST["kegiatan"];
$waktu = $_POST["waktu"];

$queryInsert = "UPDATE list SET kegiatan = '$kegiatan', waktu = '$waktu' Where id = '$id'";
mysqli_query($conn, $queryInsert);

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

