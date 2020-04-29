<?php 

class Criteria extends Controller {
	public function index ()
	{
		$data['judul'] = 'Daftar Criteria';
		$data['crt'] = $this->model('Criteria_model')->getAllCriteria();

		$this->view('templates/header', $data);
		$this->view('criteria/index', $data);
		$this->view('templates/footer2');
	}

	public function detail ($id)
	{
		$data['judul'] = 'Detail Criteria';
		$data['crt'] = $this->model('Criteria_model')->getCriteriaById($id);

		$this->view('templates/header', $data);
		$this->view('criteria/detail', $data);
		$this->view('templates/footer2');
	}

	public function tambah ()
	{
		// var_dump($_POST);
		if ( $this->model ('Criteria_model')->tambahDataCriteria($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			//sebelum diredirect set dulu flashnya
			header('location: ' . BASEURL . '/criteria');
			exit;
		}
		else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/criteria');
			exit;
		}
	}
	
	public function hapus ($id)
	{
		// var_dump($_POST);
		if ( $this->model ('Criteria_model')->hapusDataCriteria($id) > 0){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/criteria');
			exit;
		}
		else{
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/criteria');
			exit;
		}
	}

	public function getubah()
	{
		// echo 'Ok';
		// echo $_POST['id'];
	echo json_encode($this->model('Criteria_model')->getCriteriaById($_POST['id']));
	}


	public function ubah()
	{
		// var_dump($_POST);
		if( $this->model ('Criteria_model')->ubahDataCriteria($_POST) > 0){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			//sebelum diredirect set dulu flashnya
			header('location: ' . BASEURL . '/criteria');
			exit;
		}
		else{
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('location: ' . BASEURL . '/criteria');
			exit;
		}
	}

	public function cari()
	{
		$data['judul'] = 'Daftar Criteria';
		$data['crt'] = $this->model('Criteria_model')->cariDataCriteria();
		//bikin method model dengan nama cariDataAlternative
		$this->view('templates/header', $data);
		$this->view('criteria/index', $data);
		$this->view('templates/footer2');
	}
}