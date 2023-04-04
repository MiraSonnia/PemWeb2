<?php 
require_once '../dbkoneksi.php';
?>
            
<form method="POST" action="proses_p.php">
<div class="form-group row mt-2" >
    <label for="kode" class="col-4 col-form-label">Id</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="id" name="id" type="number" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row mt-2" >
    <label for="kode" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="tanggal" name="tanggal" type="date" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row mt-2" >
    <label for="nama" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">

        </div> 
        <input id="nomor" name="nomor" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
 
  <div class="form-group row mt-2" >
    <label for="stok" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="produk" name="produk" value=""
        type="text" class="form-control">
      </div>
</div>
  </div>

    <div class="form-group row mt-2" >
        <label for="stok" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
            <div class="input-group">
                <input id="jumlah" name="jumlah" value=""
                type="number" class="form-control">
            </div>
        </div>
    </div>
    
    <div class="form-group row mt-2" >
        <label for="stok" class="col-4 col-form-label">Harga</label> 
        <div class="col-8">
            <div class="input-group">
                <input id="harga" name="harga" value=""
                type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2" >
        <label for="stok" class="col-4 col-form-label">Vendor</label> 
        <div class="col-8">
            <div class="input-group">
                <input id="vendor" name="vendor" value=""
                type="text" class="form-control">
            </div>
        </div>
    </div>

  <div class="form-group row mt-2" >
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
