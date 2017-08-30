<html>
	<head>
		<title>Data</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	</head>

	<body>
	<div class="container">
		<div class="col-md-12">
		<center><h1>Tampil Keseluruhan Data Transaksi</h1></center>
		<a href="<?php echo site_url('transaksi/tambah_data');?>"><button class="btn btn-primary"> Tambah Data </button></a></br></br>
		<?php
			if ($data->num_rows()> 0){ ?>
				<table align="center" border="1" class="table table-bordered table-striped">
					<tr>
						<th>No</th>
						<th>Customer Id</th>
						<th>Status</th>
						<th>Nominal</th>
						<th>Bukti</th>
						<th>Aksi</th>
						</tr>
					<?php $nomer=1; ?>
					<?php foreach ($data->result() as $bismillah): ?>
						<tr>
							<td><?php echo $nomer; ?></td>
							<td><?php echo $bismillah->customer_id; ?></td>
							<td><?php echo $bismillah->status; ?></td>
							<td><?php echo $bismillah->nominal; ?></td>
							<td><?php echo $bismillah->bukti; ?></td>
							<td>
								<a href="<?php echo site_url('transaksi/edit_data/'.$bismillah->id);?>" class="btn btn-primary" >Edit</a>
								<a href="<?php echo site_url('transaksi/hapus_data/'.$bismillah->id);?>" class="btn btn-primary" >Hapus</a>
							</td>
							<?php $nomer++; ?>
						</tr>
					<?php endforeach; } ?>
				</table>
		</div>
	</div>
	</body>
</html>