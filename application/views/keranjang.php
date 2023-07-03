<div class="container-fluid">
	<h3> Keranjang</h3>

	<table class="table table-border table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub-Total</th>
		</tr>

		<?php 
		$no = 1;
		foreach ($this->cart->contents() as $items) : ?>
			<tr>
		        <td><?php echo $no++; ?></td>
		        <td><?php echo $items['name']; ?></td>
		        <td><?php echo $items['qty']; ?></td>
		        <td>RP. <?php echo number_format($items['price'], 0,',',',') ?></td>
		        <td><?php echo $items['subtotal']; ?></td>
		    </tr>
		<?php endforeach; ?>

		    <tr>
		    	<td colspan="4"></td>
		    	<td > RP.<?php echo number_format($this->cart-> total(),0,',',',') ?> </td>
		    </tr>
	</table>

	<div align="right">
    <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>" class="btn btn-sm btn-danger">Hapus keranjang</a>
    <a href="<?php echo base_url('dashboard/index') ?>" class="btn btn-sm btn-primary">lanjut belanja</a>
    <a href="<?php echo base_url('dashboard/pembayaran') ?>" class="btn btn-sm btn-success">pembayaran</a>
</div>


</div>
