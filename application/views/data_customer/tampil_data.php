<html>
	<head>
		<title>Data</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	</head>

	<body>
	<div class="container">
		<div class="col-md-12">
			<center><h1>Tampil Keseluruhan Data Customer</h1></center>
			<a href="<?php echo site_url('customer/tambah_data');?>"><button class="btn btn-primary"> Tambah Data </button></a></br></br>
			<?php
				if ($data->num_rows()> 0){ ?>
					<table align="center" border="1" class="table table-bordered table-striped">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Tanggal Lahir</th>
							<th>Tempat Lahir</th>
							<th>No KTP</th>
							<th>Pekerjaan</th>
							<th>Perusahaan</th>
							<th>Jabatan</th>
							<th>Start_kerja</th>
							<th>Aksi</th>
						</tr>
						<?php $nomer=1; ?>
						<?php foreach ($data->result() as $bismillah): ?>
							<tr>
								<td><?php echo $nomer; ?></td>
								<td><?php echo $bismillah->nama; ?></td>
								<td><?php echo $bismillah->tanggal_lahir; ?></td>
								<td><?php echo $bismillah->tempat_lahir; ?></td>
								<td><?php echo $bismillah->no_ktp; ?></td>
								<td><?php echo $bismillah->pekerjaan; ?></td>
								<td><?php echo $bismillah->perusahaan; ?></td>
								<td><?php echo $bismillah->jabatan; ?></td>
								<td><?php echo $bismillah->start_kerja; ?></td>
								<td>
									<a href="<?php echo site_url('customer/edit_data/'.$bismillah->id);?>"class="btn btn-primary">Edit</a>
									<a href="<?php echo site_url('customer/hapus_data/'.$bismillah->id);?>"class="btn btn-primary">Hapus</a>
								</td>
								<?php $nomer++; ?>
							</tr>
						<?php endforeach; } ?>
					</table>
		</div>
	</div>
	</body>
</html>