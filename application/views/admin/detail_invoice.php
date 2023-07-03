<div class="container-fluid">
<h4>Detail Pesanan</h4>
	<div class="btn btn-sm btn-success">No invoice<?php echo $invoice->id?></div>
<table class="table table-bordered table-hover table-striped">
	<tr>
		<th>ID Barang</th>
		<th>Nama Produk</th>
		<th>Jumlah Pesanan</th>
		<th>Harga Satuan</th>
		<th>Sub-total</th>
	</tr>
	<?php
	$total = 0;
	if (is_array($pesanan) || is_object($pesanan)) {
		foreach ($pesanan as $psn) {
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
	?>
			<tr>
				<td><?php echo $psn->id_brg ?></td>
				<td><?php echo $psn->nama_brg ?></td>
				<td><?php echo $psn->jumlah ?></td>
				<td><?php echo number_format($psn->harga, 0, ',', '.') ?></td>
				<td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
			</tr>
	<?php
		}
	} else {
		echo "<tr><td colspan='5'>Tidak ada pesanan</td></tr>";
	}
	?>
</table>
</div>
