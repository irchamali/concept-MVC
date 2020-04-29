<div class="container mt-3">
	
	<div class="row">
		<div class="col-lg-6">
			<?php flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-2">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
			Tambah Data Criteria
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/criteria/cari" method="post" class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Cari Criteria" name="keyword" id="keyword" autocomplete="off">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="tombolCari">Search</button>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Criteria</h3>
				<ul class="list-group">
				<?php foreach( $data['crt'] as $crt ) : ?>
				<li class="list-group-item">
					<?= $crt['criteria']; ?>
					<a href="<?= BASEURL; ?>/criteria/hapus/<?= $crt ['id_criteria']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">hapus</a>
					<a href="<?= BASEURL; ?>/criteria/ubah/<?= $crt ['id_criteria']; ?>" class="badge badge-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $crt['id_criteria']; ?>">ubah</a>
					<a href="<?= BASEURL; ?>/criteria/detail/<?= $crt ['id_criteria']; ?>" class="badge badge-primary float-right ml-2">detail</a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Criteria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  
      <div class="modal-body">
		<form action="<?= BASEURL; ?>/criteria/tambah" method="post">
			<input type="hidden" name="id_criteria" id="id_criteria">
			<div class="form-group">
				<label for="nama">Criteria</label>
				<input type="text" class="form-control" id="criteria" name="criteria" placeholder="Nama kriteria">
			</div>
            <div class="form-group">
                <label for="info">Code</label>
                <input type="text" class="form-control" id="code" name="code" placeholder="Kodifikasi">
            </div>
			<div class="form-group">
				<label for="code">Weight</label>
				<input type="text" class="form-control" id="weight" name="weight" placeholder="Bobot ">
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