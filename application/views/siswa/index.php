<div class="container">
	<div class="flash-data" data-flashdata="<?=  $this->session->flashdata('flash');?>"></div>
	<?php if($this->session->flashdata('flash')): ?>
	<!-- <div class="row mt-3">
		<div class="col-md-6">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Siswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
		</div>
	</div> -->
	<?php endif; ?>

	<div class="row">
		<div class="col-md-6">
			<a href="<?= base_url() ?>siswa/tambah" class="btn btn-primary mt-3">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Cari Data Siswa..." name="keyword">
				<div class="input-group-append">
					<button class="btn btn-outline-primary" type="submit">Cari</button>
				</div>
			</div>		
			</form>
		</div>
	</div>
	
	<div class="row mt-3">
		<div class="col-md-6">
		<h3>Daftar Siswa</h3>
			<?php if(empty($siswa)): ?>
				<div class="alert alert-danger" role="alert">
					Data Siswa Tidak ada
				</div>
				<?php endif; ?>
		<ul class="list-group">
			<?php foreach($siswa as $siswa) : ?>
			<li class="list-group-item">
				<?= $siswa['nama']; ?>
				<a href="<?= base_url() ?>siswa/hapus/<?= $siswa['id'] ?>" class="badge badge-danger float-right ml-2 tombol-hapus">Hapus</a>
 
				<a href="<?= base_url() ?>siswa/detail/<?= $siswa['id'] ?>" class="badge badge-primary float-right ml-2">Detail</a>
				
				<a href="<?= base_url() ?>siswa/ubah/<?= $siswa['id'] ?>" class="badge badge-success float-right">Ubah</a>
				
			</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>



</div>
