<?php
include "connection.php";

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM list WHERE id = '$id'");

if($query) {
echo '<script language="javascript">';
echo 'alert("Berhasil dihapus")';
echo '</script>';

}

?>