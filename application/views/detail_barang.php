<div class="container-fluid">
  <div class="card">
    <div class="card-header"> Produk </div>
    <div class="card-body">
      <?php foreach ($barang as $brg):?>
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
        </div>
        <div class="col-md-8">
          <table class="table">
            
            <tr>
              <td>Nama Produk</td>
              <td><?php echo $brg->nama_brg  ?></td>
            </tr>

            <tr>
              <td>Keterangan</td>
              <td><?php echo $brg->keterangan  ?></td>
            </tr>

            <tr>
              <td>Kategori</td>
              <td><?php echo $brg->kategori  ?></td>
            </tr>
            
            <tr>
              <td>Stok</td>
              <td><?php echo $brg->stok  ?></td>
            </tr>

            <tr>
              <td>Harga</td>
              <td> <div class="btn btn-sm btn-success">RP  <?php echo number_format( $brg->harga,0,',','.' )?></div></td>
            </tr>
          </table>
            <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>

              <?php echo anchor('dashboard/index/'.$brg->id_brg, '<div class="btn btn-sm btn-danger">Kembali ke manu </div>') ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
