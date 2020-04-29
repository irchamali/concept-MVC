<?php 

class About extends Controller {
	public function index($nama='Ircham Ali', $pekerjaan='Mahasiswa', $umur = '25')
	{
		// echo 'About/index';
		// echo "Halo, nama saya $nama, saya seorang $pekerjaan";
		// $this->view('about/index');
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page()
	{
		// echo 'about/page';
		$data['judul'] = 'Pages';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}