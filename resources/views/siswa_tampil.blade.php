<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil data</title>
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/bootstrap.css') ?>">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12 shadow rounded bg-white p-5 my-5">
			<h6>Data Siswa</h6>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Jenis kelamin</th>
							<th>Foto</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor = 1 ; ?>
						<?php foreach ($siswa as $key => $value): ?>
							
						<tr>
							<td><?php echo $nomor++; ?></td>
							<td><?php echo $value['nama_siswa']; ?></td>
							<td><?php echo $value['alamat_siswa']; ?></td>
							<td><?php echo $value['jenis_kelamin']; ?></td>
							<td><img src="<?php echo url('assets/gambar/'.$value['foto_siswa']); ?>" width="100"></td>
							<td nowrap="nowrap">
								<a href="<?php echo url('siswa/'.$value['id_siswa'].'/edit') ?>" class="btn btn-warning">Edit</a>

								<form method="post" action="<?php echo url('siswa/'.$value['id_siswa']) ?>" class="d-inline">
									@method('delete')
									@csrf
									<button class="btn btn-danger">Hapus</button>
								</form>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<a href="<?php echo url('siswa/tambah') ?>" class="btn btn-primary">Tambah Siswa</a>
			</div>
		</div>
	</div>
</div>

</body>
</html>