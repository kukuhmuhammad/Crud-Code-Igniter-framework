<html>
	<head>
		<title>Edit Data</title>
	</head>

	<body>
	<div class="container">
		<div class="col-md-12">
			<center><h1>Edit Data Transaksi</h1></center>
			<div class="form-group">
				<?php
					echo form_open('transaksi/proses_edit_data/'.$data->id);
				?>
					<table align="center">
						<tr>
							<td>Customer Id</td>
							<td>:</td>
							<td><input type="number" required="required" name="customer_id" value="<?php echo $data->customer_id; ?>" /></td>
						</tr>

						<tr>
							<td>Status</td>
							<td>:</td>
							<td><input type="text" required="required" name="status" value="<?php echo $data->status; ?>"  /></td>
						</tr>

						<tr>
							<td>Nominal</td>
							<td>:</td>
							<td><input type="number" required="required" name="nominal" value="<?php echo $data->nominal; ?>" /></td>
						</tr>

						<tr>
							<td>Bukti</td>
							<td>:</td>
							<td><input type="file" required="required" name="userfile" value="<?php echo $data->bukti; ?>" /></td>
						</tr>
						
						<tr>
							<td colspan="3" align="right"><input type="submit" value="Simpan" />
								<a href="<?php echo site_url('transaksi/index');?>"><button> Kembali </button></a>
							</td>
						</tr>
					</table>
					<?php form_close();?>
			</div>
		</div>
	</div>
	</body>
</html>