<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card">
			<div class="card-header">
				Form Tambah Data Siswa
			</div>
			<div class="card-body">
				<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Ex: John Dale">
							<small class="form-text text-danger">
								<?= form_error('nama'); ?>
							</small>
						</div>
						<div class="form-group">
							<label for="absen">absen</label>
							<input type="text" name="absen" class="form-control" id="absen" placeholder="Ex: 1">
							<small class="form-text text-danger">
								<?= form_error('absen'); ?>
							</small>
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="text" name="email" class="form-control" id="email" placeholder="Ex: JohnDale@example.com">
							<small class="form-text text-danger">
								<?= form_error('email'); ?>
							</small>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" id="jurusan" name="jurusan">
							<option value="rpl">RPL</option>
							<option value="farmasi">Farmasi</option>
							<option value="kecantikan">Kecantikan</option>
							<option value="multimedia">Multimedia</option>
							</select>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			</div>
		</div>


		</div>
	</div>
</div>
