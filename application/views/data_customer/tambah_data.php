<html>
	<head>
		<title>Tambah Data</title>
	</head>

	<body>
	<div class="container">
		<div class="col-md-12">
			<center><h1>Tambah Data Customer</h1></center>
			<div class="form-group">
				<?php
					echo form_open('customer/proses_tambah_data');
				?>
					<table align="center">
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" class="form-control" required="required" name="nama" /></td>
						</tr>

						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td><input type="date" class="form-control" required="required" name="tanggal_lahir" /></td>
						</tr>

						<tr>
							<td>Tempat_Lahir</td>
							<td>:</td>
							<td><input type="text" class="form-control" required="required" name="tempat_lahir" /></td>
						</tr>

						<tr>
							<td>No KTP</td>
							<td>:</td>
							<td><input type="number" class="form-control" required="required" name="no_ktp" /></td>
						</tr>

						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td><input type="text" class="form-control" required="required" name="pekerjaan"/></td>
						</tr>

						<tr>
							<td>Perusahaan</td>
							<td>:</td>
							<td><input type="text" class="form-control" required="required" name="perusahaan" /></td>
						</tr>

						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td><input type="text" class="form-control" required="required" name="jabatan"/></td>
						</tr>

						<tr>
							<td>Start Kerja</td>
							<td>:</td>
							<td><input type="date" class="form-control" required="required" name="start_kerja"/></td>
						</tr>

						<tr>
							<td colspan="3" align="right"><input type="submit" value="Simpan" />
								<a href="<?php echo site_url('customer/index');?>"><button> Kembali </button></a>
							</td>
						</tr>
					</table>
					<?php form_close();?>
			</div>
		</div>
	</div>
	</body>
</html>