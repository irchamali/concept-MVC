<div class="container mt-3">
	
	<div class="row">
		<div class="col-lg-6">
			<?php flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-2">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah Data Alternative</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/alternative/cari" method="post" class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Cari Alternatif" name="keyword" id="keyword" autocomplete="off">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="tombolCari">Search</button>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Alternatif</h3>
				<ul class="list-group">
				<?php foreach( $data['alt'] as $alt ) : ?>
				<li class="list-group-item">
					<?= $alt['name']; ?>
					<a href="<?= BASEURL; ?>/alternative/hapus/<?= $alt ['id_alternative']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">hapus</a>
					<a href="<?= BASEURL; ?>/alternative/ubah/<?= $alt ['id_alternative']; ?>" class="badge badge-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $alt['id_alternative']; ?>">ubah</a>
					<a href="<?= BASEURL; ?>/alternative/detail/<?= $alt ['id_alternative']; ?>" class="badge badge-primary float-right ml-2">detail</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>	
	</div> 

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Alternatif</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  
      <div class="modal-body">
		<form action="<?= BASEURL; ?>/alternative/tambah" method="post">
			<input type="hidden" name="id_alternative" id="id_alternative">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Nama lahan">
			</div>
			<div class="form-group">
				<label for="code">Kode</label>
				<input type="text" class="form-control" id="code" name="code" placeholder="A.. ">
			</div>
			<div class="form-group">
				<label for="info">Info</label>
				<input type="text" class="form-control" id="info" name="info" placeholder="Info luas lahan">
			</div>
			<div class="form-group">
				<label for="plants">Tanaman Pangan</label>
				<select class="form-control" id="plants" name="plants">
					<option value="Padi Organik">Padi Organik</option>
					<option value="lainnya">Lainnya</option>
				</select>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Tambah Data</button>
		</form>
      </div>
    </div>
  </div>
</div>


			<!-- <ul> //awal query pakai array
				<li><?= $alt ['id_alternative'];  ?></li>
				<li><?= $alt ['name'];  ?></li>
			</ul> 
		
		<li class="list-group-item d-flex justify-content-between align-items-center">-->