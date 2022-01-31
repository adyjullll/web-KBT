<div class="container-fluid">
	<h4>Keranjang Belanja</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub Total</th>
		</tr>

		<?php 
			$no=1;
			foreach ($this->cart->contents() as $items) :?>

				<tr>
					<th><?php echo $no++ ?></th>
					<th><?php echo $items['name'] ?></th>
					<th><?php echo $items['qty'] ?></th>
					<th align="right"><?php echo number_format($items['price'],0,',','.') ?></th>
					<th align="right"><?php echo number_format($items['subtotal'],0,',','.') ?></th>
				</tr>

		<?php endforeach; ?>

		<tr>
					<th colspan="4">
						
					</th>
					<th align="right"><?php echo number_format($this->cart->total(),0,',','.') ?></th>					
				</tr>

	</table>
</div>