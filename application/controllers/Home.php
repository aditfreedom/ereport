<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$datauser = $this->session->userdata('login');
		if ($datauser != "Berhasil") {
			$this->session->sess_destroy();
			redirect(base_url('dinas/login'));
		}
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('M_ppdb');
		$sess_data = $this->session->userdata();
		$data['tampilsekolah'] = $this->M_ppdb->tampilsekolah()->result();
		$data['zonasi'] = $this->M_ppdb->tampilzonasi2()->result();
		$data['afirmasi'] = $this->M_ppdb->tampilafirmasi2()->result();
		$data['pindahan'] = $this->M_ppdb->tampilpindahan2()->result();
		$data['prestasi'] = $this->M_ppdb->tampilprestasi2()->result();
		$data['umum'] = $this->M_ppdb->tampilumum2()->result();
		$data['pendaftarzonasi'] = $this->M_ppdb->tampilpendaftarzonasi()->num_rows();
		$data['pendaftarafirmasi'] = $this->M_ppdb->tampilpendaftarafirmasi()->num_rows();
		$data['pendaftarpindahan'] = $this->M_ppdb->tampilpendaftarpindahan()->num_rows();
		$data['pendaftarprestasi'] = $this->M_ppdb->tampilpendaftarprestasi()->num_rows();
		$data['pendaftarumum'] = $this->M_ppdb->tampilpendaftarumum()->num_rows();
		

		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('dashboarddinas',$data);
		$this->load->view('template/footer');
	}



	public function progress_data()
	{
		$this->load->model('M_ppdb');
		$sess_data = $this->session->userdata();
		$data['tampilsekolah'] = $this->M_ppdb->tampilsekolah()->result();
		$data['kecamatan'] = $this->M_ppdb->tampilkuotawilayah();


		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('progress_data',$data);
		$this->load->view('template/footer');
	}


	public function data_balikan()
	{
		$this->load->model('M_ppdb');
		$sess_data = $this->session->userdata();
		$data['tampilsekolah'] = $this->M_ppdb->tampilsekolah()->result();
		$data['kecamatan'] = $this->M_ppdb->data_balikan()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('data_balikan',$data);
		$this->load->view('template/footer');
	}


	public function tampil_sekolah_wilayah($id)
	{
		$this->load->model('M_ppdb');
		$sess_data = $this->session->userdata();
		$data['tampil_sekolah_wilayah'] = $this->M_ppdb->tampil_sekolah_wilayah($id)->result();
		$data['tampil_sekolah_wilayah2'] = $this->M_ppdb->tampil_sekolah_wilayah2($id)->result();


		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('tampil_sekolah_wilayah',$data);
		$this->load->view('template/footer');
	}

	// public function registrasi()
	// {
	// 	$this->load->view('registrasi');
	// }

	// public function login()
	// {
	// 	$this->load->model('M_ppdb');
	// 	$this->load->view('login');	
	// }

	// public function dashboard()
	// {
	// 	$this->load->view('template/header');
	// 	$this->load->view('template/sidebar');
	// 	$this->load->view('dashboard');
	// 	$this->load->view('template/footer');
	// }

	public function zonasi()
	{
		$zonasi = $this->M_ppdb->getZonasi();
		$kecamatan = $this->M_ppdb->getData('data_wilayah');
		$sekolah = $this->M_ppdb->getData('data_smp');
		$sess_data = $this->session->userdata();

		$data = array(
			'zonasi' 	=> $zonasi,
			'kecamatan' => $kecamatan,
			'sekolah'	=> $sekolah,
			'js' 		=> 'zonasi'
		);

		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('zonasi', $data);
		$this->load->view('template/footer');
	}

	public function getDetailZonasi(){
		$post = $this->input->post(NULL, TRUE);
		$where['id_zonasi'] = $post['id_zonasi'];
		$zonasi = $this->M_ppdb->getData('zonasi', $where);
		$kecamatan = $this->M_ppdb->getData('data_wilayah');
		$desa = $this->M_ppdb->getData('data_desa');

		if (count($zonasi)) {
			$result = array(
				'status' => 'success',
				'data' => $zonasi[0],
				'kecamatan' => $kecamatan,
				'desa' => $desa
			);
		}
		else {
			$result = array(
				'status' => 'failed',
				'msg' => 'Data Tidak Ditemukan'
			);
		}

		echo json_encode($result);
	}

	public function tambahzonasi()
	{
		$post = $this->input->post(NULL, TRUE);

		$data = array(
			'id_desa' => $post['desa'],
			'id_sekolah' => $post['id_sekolah'],
		);

		$this->M_ppdb->tambahData('zonasi', $data);
		redirect(base_url('home/zonasi'));
	}

	public function editzonasi($id)
	{
		$post = $this->input->post(NULL, TRUE);

		$data = array(
			'id_desa' => $post['desa'],
			'id_sekolah' => $post['id_sekolah'],
		);

		$this->M_ppdb->updateData('zonasi', $data, ['id_zonasi'=>$id]);
		redirect(base_url('home/zonasi'));
	}

	public function hapuszonasi($id)
	{
		$where = array('id_zonasi' => $id);
		$this->M_ppdb->hapusData('zonasi', $where);
		redirect(base_url('home/zonasi'));
	}

	public function getDesaByWilayah()
	{
		$post = $this->input->post(NULL, TRUE);
		$where['kode_wilayah'] = $post['kode_wilayah'];
		$desa = $this->M_ppdb->getData('data_desa', $where);

		if (count($desa)) {
			$result = array(
				'status' => 'success',
				'data' => $desa
			);
		}
		else {
			$result = array(
				'status' => 'failed',
				'msg' => 'Data Tidak Ditemukan'
			);
		}

		echo json_encode($result);
	}

	public function getSekolahByDesa()
	{
		$post = $this->input->post(NULL, TRUE);
		$where['z.id_desa'] = $post['id_desa'];
		$sekolah = $this->M_ppdb->getZonasi($where);

		if (count($sekolah)) {
			$result = array(
				'status' => 'success',
				'data' => $sekolah
			);
		}
		else {
			$result = array(
				'status' => 'failed',
				'msg' => 'Data Tidak Ditemukan'
			);
		}

		echo json_encode($result);
	}

	public function kuota()
	{
		$data['kuota2'] = $this->M_ppdb->tampilsekolah_kuota()->result();
		$data['kuota'] 	= $this->M_ppdb->tampil_data_kuota();
		$data['js']		= 'kuota';
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('kuota', $data);
		$this->load->view('template/footer');
	}

	public function tambahkuota()
	{
		$post = $this->input->post(NULL, TRUE);
		$id_sekolah  = $post['id_sekolah'];
		$total       = $post['total'];
		$zonasi      = $post['zonasi'];
		$afirmasi    = $post['afirmasi'];
		$pindahan    = $post['pindahan'];
		$prestasi    = $post['prestasi'];
		$umum    	 = $post['umum'];

		$data = array(
			'id_sekolah' => $id_sekolah,
			'total' => $total,
			'sisa_zonasi' => $zonasi,
			'sisa_afirmasi' => $afirmasi,
			'sisa_pindahan' => $pindahan,
			'sisa_prestasi' => $prestasi,
			'sisa_umum' => $umum,
			'total_in' => 0,
		);

		$this->M_ppdb->tambahkuota($data, 'kuota');
		redirect(base_url('home/kuota'));
	}

	public function getDetailKuota()
	{
		$post = $this->input->post(NULL, TRUE);
		$where['id_kuota'] = $post['id_kuota'];
		$kuota = $this->M_ppdb->tampil_data_kuota($where);

		if (count($kuota)) {
			$result = array(
				'status' => 'success',
				'data' => $kuota
			);
		}
		else {
			$result = array(
				'status' => 'failed',
				'msg' => 'Data Tidak Ditemukan'
			);
		}

		echo json_encode($result);
	}

	public function tambahpengguna_sekolah()
	{
		$id_pesertadidik    = $this->input->post('id_pesertadidik');
		$username           = $this->input->post('username');
		$password           = $this->input->post('password');
		$nama_sekolah       = $this->input->post('nama_sekolah');

		$data = array(
			'id_pesertadidik' => $id_pesertadidik,
			'username' => $username,
			'password' => $password,
			'role' => "1",
			'approve_formulir' 	=> $nama_sekolah,
			'approve_lulus' 	=> $nama_sekolah,
			'approve_daftarulang' => $nama_sekolah,
			'status' => 0

		);

		$hitungusername = $this->M_ppdb->tampilakunsekolah($id_pesertadidik)->num_rows();

		if ($hitungusername >= 1) {
			$this->load->view('username_gagal');
		} else {
			$this->M_ppdb->tambahuser($data, 'pengguna');
			$this->load->view('akunsekolah_sukses');
		}
	}

	public function hapuskuota($id)
	{
		$id =    array('id_kuota' => $id);
		$this->M_ppdb->hapuskuota($id, 'kuota');
		redirect(base_url('home/kuota'));
	}

	public function hapus_sekolah($id)
	{
		$id =    array('id' => $id);
		$this->M_ppdb->hapus_sekolah($id, 'pengguna');
		redirect(base_url('home/data_sekolah'));
	}

	public function editkuota($id)
	{
		$post = $this->input->post(NULL, TRUE);
		$id_sekolah  = $post['id_sekolah'];
		$total       = $post['total'];
		$zonasi      = $post['zonasi'];
		$afirmasi    = $post['afirmasi'];
		$pindahan    = $post['pindahan'];
		$prestasi    = $post['prestasi'];
		$umum		 = $post['umum'];

		$data = array(
			'id_sekolah' => $id_sekolah,
			'total' => $total,
			'sisa_zonasi' => $zonasi,
			'sisa_afirmasi' => $afirmasi,
			'sisa_pindahan' => $pindahan,
			'sisa_prestasi' => $prestasi,
			'sisa_umum' => $umum,
		);
		$where['id_kuota']	= $id;

		$this->M_ppdb->updatekuota($where, $data);
		redirect(base_url('home/kuota'));
	}

	public function edit_sekolah($id)
	{
		$sess_data = $this->session->userdata();
		$id =    array('id' => $id);
		$data['data_sekolah'] = $this->M_ppdb->edit_sekolah($id, 'pengguna')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('edit_sekolah', $data);
		$this->load->view('template/footer');
	}

	public function updatekuota()
	{
		$id       = $this->input->post('id');
		$jenis       = $this->input->post('jenis');
		$kuota        = $this->input->post('kuota');
		$keterangan        = $this->input->post('keterangan');


		$data = array(
			'jenis' => $jenis,
			'kuota' => $kuota,
			'keterangan' => $keterangan

		);

		$where = array(
			'id' => $id
		);

		$this->M_ppdb->updatekuota($where, $data, 'kuota');
		$this->load->view('berhasil_ubah');
		$this->load->view('kuota');
	}

	public function approve_formulir()
	{
		$data['formulir'] = $this->M_ppdb->tampil_approval()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('approve_formulir', $data);
		$this->load->view('template/footer');
	}

	public function data_sekolah()
	{
		$data['pengguna2'] = $this->M_ppdb->tampilsekolah_kuota()->result();
		$data['data_sekolah'] = $this->M_ppdb->tampilsekolah_admin()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('data_sekolah', $data);
		$this->load->view('template/footer');
	}

	public function cetak_kartu($id)
	{
		$sess_data = $this->session->userdata();
		$id =    array('id' => $id);
		$data['cetak_kartu'] = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();
		$data2 = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('cetak_kartu2', $data);
		$this->load->view('template/footer');
	}

	public function update_sekolah()
	{
		$id    = $this->input->post('id');
		$id_pesertadidik    = $this->input->post('id_pesertadidik');
		$username           = $this->input->post('username');
		$password           = $this->input->post('password');
		$approve_formulir       = $this->input->post('approve_formulir');



		$data = array(
			'id_pesertadidik' => $id_pesertadidik,
			'username' => $username,
			'password' => $password,
			'role' => "1",
			'approve_formulir' 	=> $approve_formulir,
			'approve_lulus' 	=> $approve_formulir,
			'approve_daftarulang' => $approve_formulir,
			'status' => 0

		);

		$where = array(
			'id' => $id
		);

		$this->M_ppdb->update_sekolah($where, $data, 'pengguna');
		$this->load->view('berhasil_ubah_sekolah');
	}

	public function editapproval($id)
	{
		$sess_data = $this->session->userdata();
		$id =    array('id' => $id);
		$data['approval'] = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('editapproval', $data);
		$this->load->view('template/footer');
	}

	public function updateapproval()
	{
		$id                = $this->input->post('id');
		$nama              = $this->input->post('nama');
		$tptlahir              = $this->input->post('tptlahir');
		$tgllahir              = $this->input->post('tgllahir');
		$jenis             = $this->input->post('jenis');
		$nisn              = $this->input->post('nisn');
		$alamat            = $this->input->post('alamat');
		$sekolah_asal      = $this->input->post('sekolah_asal');
		$namaayah              = $this->input->post('namaayah');
		$namaibu              = $this->input->post('namaibu');
		$no_wa              = $this->input->post('no_wa');
		$akte          = $this->input->post('akte');
		$no_hp             = $this->input->post('no_hp');
		$foto             = $this->input->post('foto');
		$bukti_tf          = $this->input->post('bukti_tf');
		$username          = $this->input->post('username');
		$password          = $this->input->post('password');
		$role              = $this->input->post('role');
		$approve_formulir       = $this->input->post('approve_formulir');
		$approve_lulus          = $this->input->post('approve_lulus');
		$approve_daftarulang    = $this->input->post('approve_daftarulang');



		$data = array(
			'nama_lengkap' => $nama,
			'tptlahir' => $tptlahir,
			'tgllahir' => $tgllahir,
			'namaayah' => $namaayah,
			'namaibu' => $namaibu,
			'no_wa' => $no_wa,
			'akte' => $akte,
			'jenis' => $jenis,
			'nisn' => $nisn,
			'alamat' => $alamat,
			'sekolah_asal' => $sekolah_asal,
			'no_hp' => $no_hp,
			'foto' => $foto,
			'bukti_tf' => $bukti_tf,
			'username' => $username,
			'password' => $password,
			'role' => $role,
			'approve_formulir' => $approve_formulir,
			'approve_lulus' => $approve_lulus,
			'approve_daftarulang' => $approve_daftarulang
		);

		$where = array(
			'id' => $id
		);
		$this->M_ppdb->updateformulir($where, $data, 'pengguna');
		$this->load->view('berhasil_ubah_formulir');
		$this->load->view('approve_formulir');
	}


	public function cetakformulir()
	{
		// membaca data dari form
		$jenis      	 = $this->input->post('jenis');
		$nama            = $this->input->post('nama');
		$nisn	         = $this->input->post('nisn');
		$alamat	         = $this->input->post('alamat');
		$sekolah_asal    = $this->input->post('sekolahasal');
		$no_hp           = $this->input->post('no_hp');

		// memanggil dan membaca template dokumen yang telah kita buat
		$document = file_get_contents("formulir_pendaftaran.rtf");

		// isi dokumen dinyatakan dalam bentuk string
		$document = str_replace("#JENIS", $jenis, $document);
		$document = str_replace("#NAMA", $nama, $document);
		$document = str_replace("#NISN", $nisn, $document);
		$document = str_replace("#ALAMAT", $alamat, $document);
		$document = str_replace("#SEKOLAHASAL", $sekolah_asal, $document);
		$document = str_replace("#NO_HP", $no_hp, $document);

		// header untuk membuka file output RTF dengan MS. Word

		header("Content-type: application/msword");
		header("Content-disposition: inline; filename=formulir_pendaftaran.doc");
		header("Content-length: " . strlen($document));
		echo $document;
	}

	public function approve_lulus()
	{
		$data['lulus'] = $this->M_ppdb->tampil_lulus()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('approve_lulus', $data);
		$this->load->view('template/footer');
	}

	public function editlulus($id)
	{
		$sess_data = $this->session->userdata();
		$id =    array('id' => $id);
		$data['lulus'] = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('editlulus', $data);
		$this->load->view('template/footer');
	}

	public function updatelulus()
	{
		$id                = $this->input->post('id');
		$nama              = $this->input->post('nama');
		$tptlahir              = $this->input->post('tptlahir');
		$tgllahir              = $this->input->post('tgllahir');
		$jenis             = $this->input->post('jenis');
		$nisn              = $this->input->post('nisn');
		$alamat            = $this->input->post('alamat');
		$sekolah_asal      = $this->input->post('sekolah_asal');
		$namaayah              = $this->input->post('namaayah');
		$namaibu              = $this->input->post('namaibu');
		$no_wa              = $this->input->post('no_wa');
		$akte          = $this->input->post('akte');
		$no_hp             = $this->input->post('no_hp');
		$foto             = $this->input->post('foto');
		$bukti_tf          = $this->input->post('bukti_tf');
		$username          = $this->input->post('username');
		$password          = $this->input->post('password');
		$role              = $this->input->post('role');
		$approve_formulir       = $this->input->post('approve_formulir');
		$approve_lulus          = $this->input->post('approve_lulus');
		$approve_daftarulang    = $this->input->post('approve_daftarulang');



		$data = array(
			'nama_lengkap' => $nama,
			'tptlahir' => $tptlahir,
			'tgllahir' => $tgllahir,
			'namaayah' => $namaayah,
			'namaibu' => $namaibu,
			'no_wa' => $no_wa,
			'akte' => $akte,
			'jenis' => $jenis,
			'nisn' => $nisn,
			'alamat' => $alamat,
			'sekolah_asal' => $sekolah_asal,
			'no_hp' => $no_hp,
			'foto' => $foto,
			'bukti_tf' => $bukti_tf,
			'username' => $username,
			'password' => $password,
			'role' => $role,
			'approve_formulir' => $approve_formulir,
			'approve_lulus' => $approve_lulus,
			'approve_daftarulang' => $approve_daftarulang
		);

		$where = array(
			'id' => $id
		);

		$data2 = array(
			'id' => $id, 'tingkat' => "", 'nama_lengkap' => "", 'nama_panggilan' => "", 'nisn' => "",
			'tpt_lahir' => "", 'tgl_lahir' => "", 'agama' => "", 'suku' => "", 'jk' => "", 'goldar' => "",
			'anak_ke' => "", 'dari_saudara' => "", 'alamat' => "", 'jarak' => "", 'desa' => "", 'kecamatan' => "",
			'kabupaten' => "", 'provinsi' => "", 'nama_ayah' => "", 'tptlahir_ayah' => "", 'tgllahir_ayah' => "",
			'pendidikan_ayah' => "", 'pekerjaan_ayah' => "", 'penghasilan_ayah' => "", 'alamat_ayah' => "",
			'desa_ayah' => "", 'kecamatan_ayah' => "", 'kabupaten_ayah' => "", 'provinsi_ayah' => "", 'hp_ayah' => "",
			'nama_ibu' => "", 'tptlahir_ibu' => "", 'tgllahir_ibu' => "",
			'pendidikan_ibu' => "", 'pekerjaan_ibu' => "", 'penghasilan_ibu' => "", 'alamat_ibu' => "",
			'desa_ibu' => "", 'kecamatan_ibu' => "", 'kabupaten_ibu' => "", 'provinsi_ibu' => "", 'hp_ibu' => "",
			'sekolah_asal' => "", 'npsn' => "", 'alamat_sekolah' => "", 'kabupaten_sekolah' => "", 'provinsi_sekolah' => "",
			'penyakit' => "", 'olah_raga' => "", 'seni' => "", 'tari' => "", 'lukis' => "", 'drama' => "", 'sastra' => "",
			'organisasi' => "", 'prestasi' => "", 'alasan' => "", 'tentang_sekolah' => ""
		);



		if ($approve_lulus == "Lulus") {
			$hitungid = $this->M_ppdb->hitungidlulus($id);

			if ($hitungid == 0) {
				$this->M_ppdb->tambahiddaftarulang($data2, 'daftarulang');
			}
		}

		$this->M_ppdb->updatelulus($where, $data, 'pengguna');
		$this->load->view('berhasil_ubah_lulus');
		$this->load->view('approve_lulus');
	}

	public function approve_daftarulang()
	{
		$data['daftarulang'] = $this->M_ppdb->tampil_daftarulang()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('approve_daftarulang', $data);
		$this->load->view('template/footer');
	}

	public function editdaftarulang($id)
	{
		$sess_data = $this->session->userdata();
		$id =    array('id' => $id);
		$data['daftarulang'] = $this->M_ppdb->editdaftarulang($id, 'daftarulang')->result();
		$data2['approval_daftarulang'] = $this->M_ppdb->tampilpengguna($id, 'pengguna')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('editdaftarulang', $data);
		$this->load->view('konfirm_daftarulang', $data2);
		$this->load->view('template/footer');
	}

	public function updatedaftarulang()
	{
		$id              = $this->input->post('id');
		$nama            = $this->input->post('nama');
		$jenis      	 = $this->input->post('jenis');
		$nisn	         = $this->input->post('nisn');
		$alamat	         = $this->input->post('alamat');
		$sekolah_asal    = $this->input->post('sekolah_asal');
		$no_hp           = $this->input->post('no_hp');
		$foto            = $this->input->post('foto');
		$bukti_tf        = $this->input->post('bukti_tf');
		$username        = $this->input->post('username');
		$password        = $this->input->post('password');
		$role            = $this->input->post('role');
		$approve_formulir    = $this->input->post('approve_formulir');
		$approve_lulus       = $this->input->post('approve_lulus');
		$approve_daftarulang = $this->input->post('approve_daftarulang');



		$data = array(
			'nama_lengkap' => $nama,
			'jenis' => $jenis,
			'nisn' => $nisn,
			'alamat' => $alamat,
			'sekolah_asal' => $sekolah_asal,
			'no_hp' => $no_hp,
			'foto' => $foto,
			'bukti_tf' => $bukti_tf,
			'username' => $username,
			'password' => $password,
			'role' => $role,
			'approve_formulir' => $approve_formulir,
			'approve_lulus' => $approve_lulus,
			'approve_daftarulang' => $approve_daftarulang
		);

		$where = array(
			'id' => $id
		);
		$this->M_ppdb->updatedaftarulang($where, $data, 'pengguna');
		$this->load->view('berhasil_ubah_daftarulang');
		$this->load->view('approve_daftarulang');
	}

	public function datapengguna()
	{
		$data['pengguna'] = $this->M_ppdb->tampildatapengguna()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('datapengguna', $data);
		$this->load->view('template/footer');
	}

	public function editpengguna($id)
	{
		$data['editpengguna'] = $this->M_ppdb->tampil_data_pengguna($id)->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $sess_data);
		$this->load->view('editpengguna', $data);
		$this->load->view('template/footer');
	}

	public function updatedatapengguna()
	{
		$id              = $this->input->post('id');
		$nama            = $this->input->post('nama');
		$jenis      	 = $this->input->post('jenis');
		$nisn	         = $this->input->post('nisn');
		$alamat	         = $this->input->post('alamat');
		$sekolah_asal    = $this->input->post('sekolah_asal');
		$no_hp           = $this->input->post('no_hp');
		$foto            = $this->input->post('foto');
		$bukti_tf        = $this->input->post('bukti_tf');
		$username        = $this->input->post('username');
		$password        = $this->input->post('password');
		$role            = $this->input->post('role');
		$approve_formulir    = $this->input->post('approve_formulir');
		$approve_lulus       = $this->input->post('approve_lulus');
		$approve_daftarulang = $this->input->post('approve_daftarulang');



		$data = array(
			'nama_lengkap' => $nama,
			'jenis' => $jenis,
			'nisn' => $nisn,
			'alamat' => $alamat,
			'sekolah_asal' => $sekolah_asal,
			'no_hp' => $no_hp,
			'foto' => $foto,
			'bukti_tf' => $bukti_tf,
			'username' => $username,
			'password' => $password,
			'role' => $role,
			'approve_formulir' => $approve_formulir,
			'approve_lulus' => $approve_lulus,
			'approve_daftarulang' => $approve_daftarulang
		);

		$where = array(
			'id' => $id
		);
		$this->M_ppdb->updatedatapengguna($where, $data, 'pengguna');
		$this->load->view('berhasil_ubah_password');
		$this->load->view('datapengguna');
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('dinas/login'));
	}
}
