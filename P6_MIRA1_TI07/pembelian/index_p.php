<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pembelian";
   $buyers = $dbh->query($sql);
?>

      <a class="btn btn-success" href="create_p.php" role="button">Pembeli</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Nomor</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Vendor</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($buyers as $buyer){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$buyer['tanggal']?></td>
                        <td><?=$buyer['nomor']?></td>
                        <td><?=$buyer['produk_id']?></td>
                        <td><?=$buyer['jumlah']?></td>
                        <td><?=$buyer['harga']?></td>
                        <td><?=$buyer['vendor_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_p.php?id=<?=$buyer['id']?>">View</a>
<a class="btn btn-primary" href="edit_p.php?id=<?=$buyer['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_p.php?iddel=<?=$vendor['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$vendor['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
