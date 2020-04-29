<?php 

class Alternative extends Controller {
	public function index ()
	{
		$data['judul'] = 'Daftar Alternative';
		$data['alt'] = $this->model('Alternative_model')->getAllAlternative();

		$this->view('templates/header', $data);
		$this->view('alternative/index', $data);
		$this->view('templates/footer');
	}

	public function detail ($id)
	{
		$data['judul'] = 'Detail Alternative';
		$data['alt'] = $this->model('Alternative_model')->getAlternativeById($id);

		$this->view('templates/header', $data);
		$this->view('alternative/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah ()
	{
		// var_dump($_POST);
		if ( $this->model ('Alternative_model')->tambahDataAlternative($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			//sebelum diredirect set dulu flashnya
			header('location: ' . BASEURL . '/alternative');
			exit;
		}
		else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/alternative');
			exit;
		}
	}
	
	public function hapus ($id)
	{
		// var_dump($_POST);
		if ( $this->model ('Alternative_model')->hapusDataAlternative($id) > 0){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/alternative');
			exit;
		}
		else{
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/alternative');
			exit;
		}
	}

	public function getubah()
	{
		// echo 'Ok';
		// echo $_POST['id'];
	echo json_encode($this->model('Alternative_model')->getAlternativeById($_POST['id']));
	}


	public function ubah()
	{
		// var_dump($_POST);
		if( $this->model ('Alternative_model')->ubahDataAlternative($_POST) > 0){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			//sebelum diredirect set dulu flashnya
			header('location: ' . BASEURL . '/alternative');
			exit;
		}
		else{
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('location: ' . BASEURL . '/alternative');
			exit;
		}
	}

	public function cari()
	{
		$data['judul'] = 'Daftar Alternatif';
		$data['alt'] = $this->model('Alternative_model')->cariDataAlternative();
		//bikin method model dengan nama cariDataAlternative
		$this->view('templates/header', $data);
		$this->view('alternative/index', $data);
		$this->view('templates/footer');
	}
}