<html>
	<head>
		<title>Tambah Data</title>
	</head>

	<body>
	<div class="container">
		<div class="col-md-12">
			<center><h1>Tambah Data Transaksi</h1></center>
			<div class="form-group">
				<?php
					echo form_open_multipart('transaksi/proses_tambah_data');
				?>
					<table align="center">
						<tr>
							<td>Customer Id</td>
							<td>:</td>
							<td><input type="number" required="required" name="customer_id" /></td>
						</tr>

						<tr>
						<td>Status</td>
							<td>:</td>
							<td>
								<select name="status" required>
							  	<option value="">Pilih Status</option>
							  	<option value="booking">Booking</option>
							  	<option value="dp">Dp</option>
							  	<option value="instalsment">Instalment</option>
							  	<option value="pelunasan">Pelunasan</option>
							  	</select>
							</td>
						</tr>

						<tr>
							<td>Nominal</td>
							<td>:</td>
							<td><input type="number" required="required" name="nominal" /></td>
						</tr>

						<tr>
							<td>Bukti</td>
							<td>:</td>
							<td><input type="file" required="required" name="userfile" /></td>
						</tr>
						<tr>
							<td colspan="3" align="right"><input type="submit" value="Simpan" />
								<a href="<?php echo site_url('transaksi/index');?>"><button> Kembali </button></a>
							</td>
						</tr>
					</table>	
					<?php if (isset($error))echo $error; ?>
					<?php form_close();?>
			</div>
		</div>
	</div>
	</body>
</html>