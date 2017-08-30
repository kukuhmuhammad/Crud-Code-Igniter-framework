<html>
	<head>
		<title>Data</title>
	</head>

	<body>
		<center><h1>Tampil Keseluruhan Data</h1></center>
		<center><a href="<?php echo site_url('perumahan/tambah_data');?>"><button> Tambah Data </button></a></center>
		<?php
			if ($data->num_rows()> 0){ ?>
				<table align="center" border="1">
				<tr>
					<th>Nomer</th>
					<th>Kode</th>
					<th>Tipe</th>
					<th>Luas Tanah</th>
					<th>Penghuni</th>
					<th>Sales</th>
					<th>Status</th>
					<th>Status Perumahan</th>
					<th>Aksi</th>
				</tr>

				<?php $nomer=1; ?>
				<?php foreach ($data->result() as $bismillah): ?>
					<tr>
						<td><?php echo $nomer; ?></td>
						<td><?php echo $bismillah->kode; ?></td>
						<td><?php echo $bismillah->tipe; ?></td>
						<td><?php echo $bismillah->luas_tanah; ?></td>
						<td><?php echo $bismillah->penghuni; ?></td>
						<td><?php echo $bismillah->sales; ?></td>
						<td><?php echo $bismillah->status; ?></td>
						<td><?php echo $bismillah->status_perumahan; ?></td>
						<td>
							<a href="<?php echo site_url('perumahan/edit_data/'.$bismillah->id);?>">Edit
							<a href="<?php echo site_url('perumahan/hapus_data/'.$bismillah->id);?>">Hapus
						</td>
						<?php $nomer++; ?>
					</tr>
				<?php endforeach; } ?>
			</table>
	</body>
</html>