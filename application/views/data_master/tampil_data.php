<html>
	<head>
		<title>Data</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	</head>

	<body>
	<div class="container">
		<div class="col-md-12">
			<center><h1>Tampil Keseluruhan Data Master</h1></center>
			<a href="<?php echo site_url('master/tambah_data');?>"><button class="btn btn-primary"> Tambah Data </button></a></br></br>
			<?php
				if ($data->num_rows()> 0){ ?>
					<table align="center" border="1" class="table table-bordered table-striped">
						<tr>
							<th>No</th>
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

									<a href="<?php echo site_url('master/edit_data/'.$bismillah->id);?>" class="btn btn-primary">Edit</a>&nbsp;
									<a href="<?php echo site_url('master/hapus_data/'.$bismillah->id);?>" class="btn btn-primary">Hapus</a>
								</td>
								<?php $nomer++; ?>
							</tr>
						<?php endforeach; } ?>
					</table>
		</div>
	</div>
	</body>
</html>