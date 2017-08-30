<html>
	<head>
		<title>Edit Data</title>
	</head>

	<body>

		<center><h1>Edit Data</h1></center>
		<?php
			echo form_open('perumahan/proses_edit_data/'.$data->id);
		?>
			<table align="center">
				<tr>
					<td>Kode</td>
					<td>:</td>
					<td><input type="number" required="required" name="kode" value="<?php echo $data->kode; ?>" /></td>
				</tr>

				<tr>
					<td>Tipe</td>
					<td>:</td>
					<td><input type="number" required="required" name="tipe" value="<?php echo $data->tipe; ?>"  /></td>
				</tr>

				<tr>
					<td>Luas Tanah</td>
					<td>:</td>
					<td><input type="number" required="required" name="luas_tanah" value="<?php echo $data->luas_tanah; ?>" /></td>
				</tr>

				<tr>
					<td>Penghuni</td>
					<td>:</td>
					<td><input type="text" required="required" name="penghuni" value="<?php echo $data->penghuni; ?>" /></td>
				</tr>

				<tr>
					<td>Sales</td>
					<td>:</td>
					<td><input type="text" required="required" name="sales" value="<?php echo $data->sales; ?>" /></td>
				</tr>

				<tr>
					<td>Status</td>
					<td>:</td>
					<td><input type="text" required="required" name="status" value="<?php echo $data->status; ?>" /></td>
				</tr>

				<tr>
					<td>Status Perumahan</td>
					<td>:</td>
					<td><input type="text" required="required" name="status_perumahan" value="<?php echo $data->status_perumahan; ?>"/></td>
				</tr>
				<tr>
					<td colspan="3" align="right"><input type="submit" value="Simpan" />
						<a href="<?php echo site_url('perumahan/index');?>"><button> Kembali </button></a>
					</td>
				</tr>
			</table>
			<?php form_close();?>
	</body>
</html>