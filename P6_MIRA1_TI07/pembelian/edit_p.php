<?php 
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM pembelian WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);
$buyer = $st->fetch();
?>
            
<form method="POST" action="proses.php">
  <div class="form-group row mt-2" >
    <label for="kode" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="tanggal" name="tanggal" type="text" class="form-control"
        value="<?= $buyer['tanggal']?>">
      </div>
    </div>
  </div>
  <div class="form-group row mt-2" >
    <label for="nama" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="nomor" name="nomor" type="text" class="form-control" 
        value="<?= $buyer['nama']?>">
      </div>
    </div>
  </div>
 
  <div class="form-group row mt-2" >
    <label for="stok" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="produk" name="produk" value="<?= $buyer['produk']?>"
        type="text" class="form-control">
      </div>
</div>
  </div>

    <div class="form-group row mt-2" >
        <label for="stok" class="col-4 col-form-label">Jumalh</label> 
        <div class="col-8">
            <div class="input-group">
                <input id="Jumlah" name="jumlah" value="<?= $buyer['jumlah']?>"
                type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2" >
        <label for="stok" class="col-4 col-form-label">Harga</label> 
        <div class="col-8">
            <div class="input-group">
                <input id="harga" name="harga" value="<?= $buyer['harga']?>"
                type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2" >
        <label for="stok" class="col-4 col-form-label">Vendor</label> 
        <div class="col-8">
            <div class="input-group">
                <input id="vendor" name="vendor" value="<?= $buyer['vendor']?>"
                type="text" class="form-control">
            </div>
        </div>
    </div>

    <input type="hidden" value="<?= $buyer['id']?>" name="id">

  <div class="form-group row mt-2" >
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Update"/>
    </div>
  </div>
</form>
