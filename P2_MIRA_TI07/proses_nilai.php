<?php
if(isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['Matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $pratikum = $_GET['pratikum'];
    $avarage = ($uts + $uas + $pratikum)/3;

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Pratikum: $pratikum <br>";

    echo "<br><br>";

    echo "Nilai Rata-rata: " .round( $avarage, 2). "<br>";
    echo "Grade Nilai: ";
    if ( $avarage < 36) {
        echo "E";
    } elseif ( $avarage < 55) {
        echo "D";
    } elseif ( $avarage < 70) {
        echo "C";
    } elseif ( $avarage < 85) {
        echo "B";
    } elseif ( $avarage < 101) {
        echo "A";
    } else {
        echo "I";
    }
} else {
    echo "TIDAK ADA DATA !";
}
?>