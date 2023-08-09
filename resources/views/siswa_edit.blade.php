<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Siswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo url('assets/css/bootstrap.css') ?>">
</head>
<body>

			<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h2>Edit Siswa</h2>
					<form method="post" enctype="multipart/form-data" action="<?php echo url('siswa/'.$siswa['id_siswa']); ?>">
						@method('put')
						@csrf
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama_siswa'] ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Alamat</label>
								<textarea class="form-control" name="alamat"><?php echo $siswa['alamat_siswa'] ?></textarea>
							</div>
							<div class="mb-3">
								<label class="form-label">Jenis Kelamin</label>
								<select name="jk_siswa" class="form-control">
									<option class="text-muted">pilih</option>
									<option value="Laki-laki"  <?php if ($siswa['jenis_kelamin']=="Laki-laki") {
										echo "selected";
									} ?>>Laki-laki</option>
									<option value="Perempuan" <?php if ($siswa['jenis_kelamin']=="Perempuan") {
										echo "selected";
									} ?>>Perempuan</option>
								</select>
							</div>
							<div class="mb-3">	
								<img src="<?php echo url('assets/gambar/'.$siswa['foto_siswa']) ?>">
							</div>
							<div class="mb-3">	
								<label class="form-label">Ganti</label>
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