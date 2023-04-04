<?php
require_once '../dbkoneksi.php';

// menangkap data iddel dari URL
$id = $_GET['iddel'];

$sql = "DELETE FROM pembelian WHERE id = $id";
$dbh->query($sql);

header('location:index_p.php');