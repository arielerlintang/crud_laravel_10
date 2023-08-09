<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Ssiwa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/bootstrap.css') ?>">
</head>
<body>

			<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h2>Tambah Siswa</h2>
					<form method="post" enctype="multipart/form-data" action="<?php echo url('siswa'); ?>">
						@method('post')
						@csrf
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control">
							</div>
							<div class="mb-3">
								<label class="form-label">Alamat</label>
								<textarea class="form-control" name="alamat"></textarea>
							</div>
							<div class="mb-3">
								<label class="form-label">Jenis Kelamin</label>
								<select name="jk_siswa" class="form-control">
									<option class="text-muted">pilih</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<div class="mb-3">	
								<label class="form-label">Foto</label>
								<input type="file" name="foto" class="form-control">
								</div>
								<div class="mb-3">
									<button class="btn btn-primary"  type="submit">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				

</body>
</html>