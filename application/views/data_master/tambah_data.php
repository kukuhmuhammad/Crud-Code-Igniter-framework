<html>
	<head>
		<title>Tambah Data</title>
	</head>

	<body>
	<div class="container">
		<div class="col-md-12">
			<center><h1>Tambah Data Master</h1></center>
			<div class="form-group">
				<?php
					echo form_open('master/proses_tambah_data');
				?>
					<table align="center">
						<tr>
							<td>Kode</td>
							<td>:</td>
							<td><input type="number" required="required" name="kode" /></td>
						</tr>

						<tr>
							<td>Tipe</td>
							<td>:</td>
							<td><input type="number" required="required" name="tipe" /></td>
						</tr>

						<tr>
							<td>Luas Tanah</td>
							<td>:</td>
							<td><input type="number" required="required" name="luas_tanah" /></td>
						</tr>

						<tr>
							<td>Penghuni</td>
							<td>:</td>
							<td><input type="text" required="required" name="penghuni" /></td>
						</tr>

						<tr>
							<td>Sales</td>
							<td>:</td>
							<td><input type="text" required="required" name="sales"/></td>
						</tr>

						<tr>
							<td>Status</td>
							<td>:</td>
							<td><input type="text" required="required" name="status" /></td>
						</tr>

						<tr>
							<td>Status Perumahan</td>
							<td>:</td>
							<td><input type="text" required="required" name="status_perumahan"/></td>
						</tr>
						<tr>
							<td colspan="3" align="right"><input type="submit" value="Simpan" />
								<a href="<?php echo site_url('master/index');?>"><button> Kembali </button></a>
							</td>
						</tr>
					</table>
					<?php form_close();?>
			</div>
		</div>
	</div>
	</body>
</html>