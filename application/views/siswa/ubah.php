<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card">
			<div class="card-header">
				Form Ubah Data Siswa
			</div>
			<div class="card-body">
				<form action="" method="post">
					<input type="hidden" name="id" value="<?= $siswa['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Ex: John Dale" value="<?= $siswa['nama']; ?>">
							<small class="form-text text-danger">
								<?= form_error('nama'); ?>
							</small>
						</div>
						<div class="form-group">
							<label for="absen">absen</label>
							<input type="text" name="absen" class="form-control" id="absen" placeholder="Ex: 1" value="<?= $siswa['absen']; ?>">
							<small class="form-text text-danger">
								<?= form_error('absen'); ?>
							</small>
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="text" name="email" class="form-control" id="email" placeholder="Ex: JohnDale@example.com" value="<?= $siswa['email']; ?>">
							<small class="form-text text-danger">
								<?= form_error('email'); ?>
							</small>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" id="jurusan" name="jurusan">
								<?php foreach($jurusan as $j): ?>
									<?php if($j == $siswa['jurusan']): ?>
										<option value="<?= $j; ?>" selected><?= $j; ?></option>
										<?php else : ?>
											<option value="<?= $j; ?>"><?= $j; ?></option>
											<?php endif; ?>
									<?php endforeach; ?>
							</select>
						</div>
						<button type="submit" name="ubah" class="btn btn-primary float-right">ubah</button>
				</form>
			</div>
		</div>


		</div>
	</div>
</div>
