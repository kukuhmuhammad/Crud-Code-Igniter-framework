<html>
	<head>
		<title>Edit Data</title>
	</head>

	<body>
	<div class="container">
		<div class="col-md-12">
			<center><h1>Edit Data Customer</h1></center>
			<div class="form-group">
				<?php
					echo form_open('customer/proses_edit_data/'.$data->id);
				?>
					<table align="center">
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" required="required" name="nama" value="<?php echo $data->nama; ?>" /></td>
						</tr>

						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td><input type="date" required="required" name="tanggal_lahir" value="<?php echo $data->tanggal_lahir; ?>"  /></td>
						</tr>

						<tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td><input type="text" required="required" name="tempat_lahir" value="<?php echo $data->tempat_lahir; ?>" /></td>
						</tr>

						<tr>
							<td>No KTP</td>
							<td>:</td>
							<td><input type="text" required="required" name="no_ktp" value="<?php echo $data->no_ktp; ?>" /></td>
						</tr>

						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td><input type="text" required="required" name="pekerjaan" value="<?php echo $data->pekerjaan; ?>" /></td>
						</tr>

						<tr>
							<td>Perusahaan</td>
							<td>:</td>
							<td><input type="text" required="required" name="perusahaan" value="<?php echo $data->perusahaan; ?>" /></td>
						</tr>

						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td><input type="text" required="required" name="jabatan" value="<?php echo $data->jabatan; ?>"/></td>
						</tr>
						<tr>
							<td>Start Kerja</td>
							<td>:</td>
							<td><input type="date" required="required" name="start_kerja" value="<?php echo $data->start_kerja; ?>"/></td>
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