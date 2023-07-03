<div class="container-fluid">
	<did class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if ($keranjang =$this->cart->contents())
				{
					foreach ($keranjang as $item) {
						$grand_total = $grand_total + $item['subtotal'];
					}

					echo "Total Belanja : RP. " .number_format($grand_total,0,',',',');
                    ?>
                    <br>
                </div><br>
                <h3>Input Data Pembeli</h3>
                <br>
                <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" placeholder="Nama lengkap" class="form-control">
                        <br>
                        <label>Alamat:</label>
                        <input type="text" name="alamat" placeholder="Alamat lengkap" class="form-control">
                        <br>
                        <label>No Telp:</label>
                        <input type="number" name="no_telp" placeholder="No Telp anda" class="form-control">
                        <br>
                        <div class="form-group">
                            <label>Jasa Pengiriman:</label>
                            <select class="form-control">
                                <option>SiCepat</option>
                                <option>GoSend</option>
                                <option>JNE</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Pilih Bank:</label>
                           <select class="form-control">
                            <option>BCA - xxxxxxxx</option>
                            <option>BRI- xxx</option>
				            <option>Dana - xxxxxxxx</option>
                        </select>
					        </div>

					        <button type="submit" class="btn btn-sm btn-primary" class="mb-3">Pesan</button>
					    </div>
					</form>
                    <?php  
                } else {
                    echo "<h5> Keranjang Anda kosong";
                }
                ?>


							</div><br>
							<div class="col-md-2"></div>
						</did>
					</div>
