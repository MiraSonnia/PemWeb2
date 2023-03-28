<?php 
require_once("dbkoneksi");
if (isset($_GET["ideal"])){
    $iddeal = $_GET["iddeal"];
    $query = "DELETE FROM pelanggan WHERE id = '$iddeal'"
    $delete = $dbh->query($query);
    echo '<meta http-equiv="refresh" content="0; url=list_pelanggan.php">';
}
?>