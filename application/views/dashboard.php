<div class="container-fluid">
  <div class="row text-center">
    <?php foreach ($barang as $brg): ?>
        <div class="card" style="width: 15rem;">
          <img src="<?php echo base_url().'uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
            <small><?php echo $brg->keterangan ?></small><br>
            <span class="badge badge-pill badge-success mb-3">RP. <?php echo number_format($brg->harga, 0, ',', ','); ?></span>

         </span><br>

            <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
            <br>
            <br>
            <?php echo anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
            
          </div>
        </div>
    <?php endforeach; ?>
  </div>
</div>
