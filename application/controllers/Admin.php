<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
        $datauser = $this->session->userdata('login'); 
		if ($datauser!= "Berhasil") {
            $this->session->sess_destroy();
			redirect(base_url('hal/login'));
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
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('dashboard_ereport');


	}

	public function role()
	{
		$data['role'] = $this->M_ppdb->tampil_data_role()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('role_ereport',$data);
	}

	public function tambah_role()
	{
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_role_ereport');
	}


	public function pengguna()
	{
		$data['user'] = $this->M_ppdb->tampil_data_user()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('pengguna_ereport',$data);
	}

	public function tambah_user()
	{
		$data['user'] = $this->M_ppdb->tampil_data_user()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_user_ereport',$data);
	}

	public function insert_user()
	{
		
			$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'role' => $this->input->post('role')
		);

		$cek_jumlah_user = $this->M_ppdb->cek_jumlah_user($this->input->post('username'),md5($this->input->post('password')), $this->input->post('role'))->num_rows();

		if ($cek_jumlah_user>0) {
			$this->load->view('gagal_tambah_user_ereport');
		}else{
			$this->M_ppdb->tambah_data_user($data,'user');
			$this->load->view('berhasil_tambah_pengguna_ereport');
		}
	
			
	}

	public function edit_user($id){
		$sess_data = $this->session->userdata();
		$data['edit_user'] = $this->M_ppdb->edit_user($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_user_ereport',$data);
	}

	public function update_user(){

		$password_lama = $this->input->post('password_lama');
		$password_baru = $this->input->post('password_baru');

		if ($password_baru=="") {
			$password = $password_lama;
		}else {
			$password = md5($password_baru);
		}

		$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'username' => $this->input->post('username'),
			'password' => $password,
			'role' => $this->input->post('role')
		);
		
	
		$where = array(
			'id_user' => $this->input->post('id_user')
		);

	
		$this->M_ppdb->update_user($where,$data,'user');
		$this->load->view('berhasil_ubah_user_ereport');
	}

	public function hapus_user($id){
		$id_user =    array ('id_user' => $id);
		$this->M_ppdb->hapus_user($id_user,'user');
		redirect(base_url('admin/pengguna'));
	}



	public function info_khusus()
	{
		$data['info'] = $this->M_ppdb->tampil_data_info()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('info_khusus_ereport',$data);
	}

	public function tambah_info()
	{
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_info_ereport');
	}

	public function insert_info()
	{
		
			$data = array(
			'judul' => $this->input->post('judul'),
			'info' => $this->input->post('info'),
			'tanggal_terbit' => $this->input->post('tanggal_terbit')
		);

			$this->M_ppdb->tambah_data_info($data,'info_khusus');
			$this->load->view('berhasil_tambah_info_ereport');			
	}

	public function baca_info($id){
		$sess_data = $this->session->userdata();
		$data['baca_info'] = $this->M_ppdb->baca_info($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('baca_info_ereport',$data);
	}

	public function edit_info($id){
		$sess_data = $this->session->userdata();
		$data['edit_info'] = $this->M_ppdb->baca_info($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_info_ereport',$data);
	}

	public function update_info(){

		$data = array(
			'judul' => $this->input->post('judul'),
			'info' => $this->input->post('info'),
			'tanggal_terbit' => $this->input->post('tanggal_terbit')
		);
		
	
		$where = array(
			'id_info' => $this->input->post('id_info')
		);

	

		$this->M_ppdb->update_info($where,$data,'info_khusus');
		$this->load->view('berhasil_ubah_info_ereport');
	}

	public function hapus_info($id){
		$id_info =    array ('id_info' => $id);
		$this->M_ppdb->hapus_user($id_info,'info_khusus');
		redirect(base_url('admin/info_khusus'));
	}

	public function wali_kelas()
	{
		$sess_data = $this->session->userdata();
		$role = $this->session->userdata('role');
		$id_user = $this->session->userdata('id_user');
		if ($role=="3") {
			$data['walas'] = $this->M_ppdb->tampil_data_form_walas_guru($id_user)->result();
			$data['tp_aktif'] = $this->M_ppdb->tampil_data_tp_aktif()->result();
			$this->load->view('template/header',$sess_data);
			$this->load->view('template/sidebar_admin_sekolah');
			$this->load->view('form_walas_ereport',$data);
		} 
		else {
			$data['walas'] = $this->M_ppdb->tampil_data_form_walas()->result();
			$data['tp_aktif'] = $this->M_ppdb->tampil_data_tp_aktif()->result();
			$this->load->view('template/header',$sess_data);
			$this->load->view('template/sidebar_admin_sekolah');
			$this->load->view('form_walas_ereport',$data);
		}


	}


	public function tambah_form_walas()
	{
		$sess_data = $this->session->userdata();
		$id_user = $this->session->userdata('id_user');
		$data['kelas_walas'] = $this->M_ppdb->tampil_data_kelas_walas($id_user)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_form_walas_ereport',$data);
	}


	public function insert_form_walas()
	{
		
			$data = array(
			'id_walas' => $this->input->post('id_walas'),
			'kelas' => $this->input->post('kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
			'jlh_tepat_waktu' => $this->input->post('jlh_tepat_waktu'),
			'jlh_keterlambatan' => $this->input->post('jlh_keterlambatan'),
			'jlh_sakit' => $this->input->post('jlh_sakit'),
			'jlh_izin' => $this->input->post('jlh_izin'),
			'jlh_alpa' => $this->input->post('jlh_alpa'),
			'deskripsi_base_class' => $this->input->post('deskripsi_base_class'),
			'permasalahan_kelas' => $this->input->post('permasalahan_kelas'),
			'follow_up' => $this->input->post('follow_up')
		);


			$this->M_ppdb->tambah_form_walas($data,'form_walas');
			$this->load->view('berhasil_tambah_form_walas_ereport');
	
			
	}


	public function baca_form_walas($id){
		$sess_data = $this->session->userdata();
		$data['baca_form_walas'] = $this->M_ppdb->baca_form_walas($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('baca_form_walas_ereport',$data);
	}

	public function edit_form_walas($id){
		$sess_data = $this->session->userdata();
		$data['edit_form_walas'] = $this->M_ppdb->edit_form_walas($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_form_walas_ereport',$data);
	}

	public function update_form_walas(){

		$data = array(
			'id_walas' => $this->input->post('id_walas'),
			'kelas' => $this->input->post('kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
			'jlh_tepat_waktu' => $this->input->post('jlh_tepat_waktu'),
			'jlh_keterlambatan' => $this->input->post('jlh_keterlambatan'),
			'jlh_sakit' => $this->input->post('jlh_sakit'),
			'jlh_izin' => $this->input->post('jlh_izin'),
			'jlh_alpa' => $this->input->post('jlh_alpa'),
			'deskripsi_base_class' => $this->input->post('deskripsi_base_class'),
			'permasalahan_kelas' => $this->input->post('permasalahan_kelas'),
			'follow_up' => $this->input->post('follow_up')
		);
		
	
		$where = array(
			'id_form_walas' => $this->input->post('id_form_walas')
		);

	

		$this->M_ppdb->update_form_walas($where,$data,'form_walas');
		$this->load->view('berhasil_ubah_form_walas_ereport');
	}


	public function hapus_form_walas($id){
		$id_form_walas =    array ('id_form_walas' => $id);
		$this->M_ppdb->hapus_form_walas($id_form_walas,'form_walas');
		redirect(base_url('admin/wali_kelas'));
	}


	public function mapel()
	{
		$sess_data = $this->session->userdata();
		$role = $this->session->userdata('role');
		$id_user = $this->session->userdata('id_user');
		if ($role=="2") {
			$data['mapel'] = $this->M_ppdb->tampil_data_form_mapel_guru($id_user)->result();
			$data['tp_aktif'] = $this->M_ppdb->tampil_data_tp_aktif()->result();
			$this->load->view('template/header',$sess_data);
			$this->load->view('template/sidebar_admin_sekolah');
			$this->load->view('form_mapel_ereport',$data);
		} else if ($role=="3") {
			$data['mapel'] = $this->M_ppdb->tampil_data_form_mapel_walas($id_user)->result();
			$data['tp_aktif'] = $this->M_ppdb->tampil_data_tp_aktif()->result();
			$this->load->view('template/header',$sess_data);
			$this->load->view('template/sidebar_admin_sekolah');
			$this->load->view('form_mapel_ereport',$data);
		} 
		else {
			$data['mapel'] = $this->M_ppdb->tampil_data_form_mapel()->result();
			$data['tp_aktif'] = $this->M_ppdb->tampil_data_tp_aktif()->result();
			$this->load->view('template/header',$sess_data);
			$this->load->view('template/sidebar_admin_sekolah');
			$this->load->view('form_mapel_ereport',$data);
		}

	}

	public function tambah_form_mapel()
	{
		$sess_data = $this->session->userdata();
		$data['kelas'] = $this->M_ppdb->tampil_data_kelas_mapel()->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_form_mapel_ereport',$data);
	}

	public function insert_form_mapel()
	{
		
			$data = array(
			'id_guru_mapel' => $this->input->post('id_guru_mapel'),
			'kelas' => $this->input->post('kelas'),
			'mapel' => $this->input->post('mapel'),
			'tanggal_jam_input' => $this->input->post('tanggal_jam_input'),
			'deskripsi_akademik' => $this->input->post('deskripsi_akademik'),
			'deskripsi_sikap' => $this->input->post('deskripsi_sikap')
		);


			$this->M_ppdb->tambah_form_mapel($data,'form_mapel');
			$this->load->view('berhasil_tambah_form_mapel_ereport');
	}

	public function baca_form_mapel($id){
		$sess_data = $this->session->userdata();
		$data['baca_form_mapel'] = $this->M_ppdb->baca_form_mapel($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('baca_form_mapel_ereport',$data);
	}

	public function edit_form_mapel($id){
		$sess_data = $this->session->userdata();
		$data['kelas'] = $this->M_ppdb->tampil_data_kelas_mapel()->result();
		$data['edit_form_mapel'] = $this->M_ppdb->edit_form_mapel($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_form_mapel_ereport',$data);
	}

	public function update_form_mapel(){

		$data = array(
			'id_guru_mapel' => $this->input->post('id_guru_mapel'),
			'kelas' => $this->input->post('kelas'),
			'mapel' => $this->input->post('mapel'),
			'deskripsi_akademik' => $this->input->post('deskripsi_akademik'),
			'deskripsi_sikap' => $this->input->post('deskripsi_sikap')
		);
		
	
		$where = array(
			'id_form_mapel' => $this->input->post('id_form_mapel')
		);

	

		$this->M_ppdb->update_form_mapel($where,$data,'form_mapel');
		$this->load->view('berhasil_ubah_form_mapel_ereport');
	}


	public function hapus_form_mapel($id){
		$id_form_mapel =    array ('id_form_mapel' => $id);
		$this->M_ppdb->hapus_form_mapel($id_form_mapel,'form_mapel');
		redirect(base_url('admin/mapel'));
	}

	public function wakasis()
	{
		$data['wakasis'] = $this->M_ppdb->tampil_data_wakasis()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('wakasis_ereport',$data);
	}

	public function tambah_wakasis()
	{
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_wakasis_ereport');
	}

	public function insert_wakasis()
	{

		$file_upload              = $_FILES['file_upload']['name'];

		$config['upload_path']          = 'file/pelanggaran/';
        $config['allowed_types']        = 'pdf|PDF|JPG|jpg|jpeg|JPEG|png|PNG|xls|xlsx';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (! $this->upload->do_upload('file_upload')) {
            $this->load->view('error_upload_ereport');
        }else{
            $file_upload2=$this->upload->data('file_name');
        }
		


			$data = array(
			'id_wakasis' => $this->input->post('id_wakasis'),
			'file_upload' => $file_upload2,
			'deskripsi_pelanggaran' => $this->input->post('deskripsi_pelanggaran'),
		);


			$this->M_ppdb->tambah_wakasis($data,'wakasis');
			$this->load->view('berhasil_tambah_wakasis_ereport');
	}

	public function baca_wakasis($id){
		$sess_data = $this->session->userdata();
		$data['baca_wakasis'] = $this->M_ppdb->baca_wakasis($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('baca_wakasis_ereport',$data);
	}

	public function edit_wakasis($id){
		$sess_data = $this->session->userdata();
		$data['edit_wakasis'] = $this->M_ppdb->edit_wakasis($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_wakasis_ereport',$data);
	}


	public function update_wakasis(){

		$data = array(
			'id_wakasis' => $this->input->post('id_wakasis'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'tanggal_pelanggaran' => $this->input->post('tanggal_pelanggaran'),
			'deskripsi_pelanggaran' => $this->input->post('deskripsi_pelanggaran'),
			'tindakan' => $this->input->post('tindakan')
		);
		
	
		$where = array(
			'id_form_wakasis' => $this->input->post('id_form_wakasis')
		);

	

		$this->M_ppdb->update_wakasis($where,$data,'wakasis');
		$this->load->view('berhasil_ubah_wakasis_ereport');
	}

	public function hapus_wakasis($id){
		$id_form_wakasis =    array ('id_form_wakasis' => $id);
		$this->M_ppdb->hapus_wakasis($id_form_wakasis,'wakasis');
		redirect(base_url('admin/wakasis'));
	}

	public function wakakur_roster()
	{
		$data['wakakur_roster'] = $this->M_ppdb->tampil_data_wakakur_roster()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('wakakur_roster_ereport',$data);
	}

	public function tambah_wakakur_roster()
	{
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_wakakur_roster_ereport');
	}

	public function insert_wakakur_roster()
	{
		$file_roster              = $_FILES['file_roster']['name'];

		$config['upload_path']          = 'file/roster/';
        $config['allowed_types']        = 'pdf|PDF|JPG|jpg|jpeg|JPEG|png|PNG|xls|xlsx';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (! $this->upload->do_upload('file_roster')) {
            $this->load->view('error_upload_ereport');
        }else{
            $file_roster2=$this->upload->data('file_name');
        }
		


			$data = array(
			'tahun_ajaran' => $this->input->post('tahun_ajaran'),
			'semester' => $this->input->post('semester'),
			'file_roster' => $file_roster2
		);

			$this->M_ppdb->tambah_wakakur_roster($data,'wakakur_roster');
			$this->load->view('berhasil_tambah_wakakur_roster_ereport');
	}

	public function hapus_wakakur_roster($id){
		$id_roster =    array ('id_roster' => $id);
		$this->M_ppdb->hapus_wakasis($id_roster,'wakakur_roster');
		redirect(base_url('admin/wakakur_roster'));
	}

	public function tahun_ajaran()
	{
		$data['tp'] = $this->M_ppdb->tampil_data_tp()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tp_ereport',$data);
	}

	public function tambah_tp()
	{
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_tp_ereport');
	}

	public function insert_tp()
	{
		
			$data = array(
			'nama_tp' => $this->input->post('nama_tp'),
			'status' => $this->input->post('status'),
			'visible' => $this->input->post('visible')

		);

		$status = $this->input->post('status');

		if ($status=="AKTIF") {
			$this->M_ppdb->update_tp_visible();
			$this->M_ppdb->tambah_tp($data,'tp');
		}else{
			$this->M_ppdb->tambah_tp($data,'tp');
		}
			$this->load->view('berhasil_tambah_tp_ereport');
	}


	public function edit_tp($id){
		$sess_data = $this->session->userdata();
		$data['edit_tp'] = $this->M_ppdb->edit_tp($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_tp_ereport',$data);
	}

	public function update_tp(){

		$data = array(
			'nama_tp' => $this->input->post('nama_tp'),
			'status' => $this->input->post('status'),
			'visible' => $this->input->post('visible')
		);
		
	
		$where = array(
			'id_tp' => $this->input->post('id_tp')
		);

		$status = $this->input->post('status');
		if ($status=="AKTIF") {
			$this->M_ppdb->update_tp_visible();
			$this->M_ppdb->update_tp($where,$data,'tp');
		}else{
			$this->M_ppdb->update_tp($where,$data,'tp');
		}

		$this->load->view('berhasil_ubah_tp_ereport');
	}

	public function hapus_tp($id){
		$id_tp =    array ('id_tp' => $id);
		$this->M_ppdb->hapus_tp($id_tp,'tp');
		redirect(base_url('admin/tahun_ajaran'));
	}


	public function semester()
	{
		$data['semester'] = $this->M_ppdb->tampil_data_semester()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('semester_ereport',$data);
	}

	public function tambah_semester()
	{
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_semester_ereport');
	}

	public function insert_semester()
	{
		
			$data = array(
			'nama_semester' => $this->input->post('nama_semester'),
			'status' => $this->input->post('status')
		);


			$this->M_ppdb->tambah_semester($data,'semester');
			$this->load->view('berhasil_tambah_semester_ereport');
	}


	public function edit_semester($id){
		$sess_data = $this->session->userdata();
		$data['edit_semester'] = $this->M_ppdb->edit_semester($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_semester_ereport',$data);
	}

	public function update_semester(){

		$data = array(
			'nama_semester' => $this->input->post('nama_semester'),
			'status' => $this->input->post('status')
		);
		
	
		$where = array(
			'id_semester' => $this->input->post('id_semester')
		);

	

		$this->M_ppdb->update_semester($where,$data,'semester');
		$this->load->view('berhasil_ubah_semester_ereport');
	}

	public function hapus_semester($id){
		$id_semester =    array ('id_semester' => $id);
		$this->M_ppdb->hapus_semester($id_semester,'semester');
		redirect(base_url('admin/semester'));
	}

	public function kelas()
	{
		$data['kelas'] = $this->M_ppdb->tampil_data_kelas()->result();
		$data['tp_aktif'] = $this->M_ppdb->tampil_data_tp_aktif()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('kelas_ereport',$data);
	}

	public function tambah_kelas()
	{
		$sess_data = $this->session->userdata();
		$data['tp'] = $this->M_ppdb->tampil_data_tp_input()->result();
		$data['walas'] = $this->M_ppdb->tampil_data_walas_input()->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_kelas_ereport',$data);
	}

	public function insert_kelas()
	{
		
			$data = array(
			'id_tp' => $this->input->post('id_tp'),
			'nama_kelas' => $this->input->post('nama_kelas'),
			'id_walas' => $this->input->post('id_walas')
		);

			$this->M_ppdb->tambah_kelas($data,'kelas');
			$this->load->view('berhasil_tambah_kelas_ereport');
	}

	public function edit_kelas($id){
		$sess_data = $this->session->userdata();
		$data['tp'] = $this->M_ppdb->tampil_data_tp_input_id()->result();
		$data['walas'] = $this->M_ppdb->tampil_data_walas_input()->result();
		$data['edit_kelas'] = $this->M_ppdb->edit_kelas($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_kelas_ereport',$data);
	}

	public function update_kelas(){

		$data = array(
			'id_tp' => $this->input->post('id_tp'),
			'nama_kelas' => $this->input->post('nama_kelas'),
			'id_walas' => $this->input->post('id_walas')
		);
	
		$where = array(
			'id_kelas' => $this->input->post('id_kelas')
		);

	

		$this->M_ppdb->update_kelas($where,$data,'kelas');
		$this->load->view('berhasil_ubah_kelas_ereport');
	}

	public function hapus_kelas($id){
		$id_kelas =    array ('id_kelas' => $id);
		$this->M_ppdb->hapus_kelas($id_kelas,'kelas');
		redirect(base_url('admin/kelas'));
	}


	public function notulensi_rapat()
	{
		$data['notulensi'] = $this->M_ppdb->tampil_data_notulensi()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('wakakur_notulensi_ereport',$data);
	}


	public function tambah_notulensi()
	{
		$sess_data = $this->session->userdata();
		$data['tp'] = $this->M_ppdb->tampil_data_tp_input()->result();
		$data['walas'] = $this->M_ppdb->tampil_data_walas_input()->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_wakakur_notulensi_ereport',$data);
	}

	public function insert_notulensi()
	{
		$file_notulensi              = $_FILES['file_notulensi']['name'];

		$config['upload_path']          = 'file/notulensi/';
        $config['allowed_types']        = 'pdf|PDF|JPG|jpg|jpeg|JPEG|png|PNG';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (! $this->upload->do_upload('file_notulensi')) {
            $this->load->view('error_upload_ereport');
        }else{
            $file_notulensi=$this->upload->data('file_name');
        }
		


			$data = array(
			'judul_rapat' => $this->input->post('judul_rapat'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu' => $this->input->post('waktu'),
			'file_notulensi' => $file_notulensi
		);

			$this->M_ppdb->tambah_notulensi($data,'notulensi');
			$this->load->view('berhasil_tambah_wakakur_notulensi_ereport');
	}

	public function hapus_notulensi($id){
		$id_notulensi =    array ('id_notulensi' => $id);
		$this->M_ppdb->hapus_notulensi($id_notulensi,'notulensi');
		redirect(base_url('admin/notulensi_rapat'));
	}


	public function wakakur_info_tambahan()
	{
		$data['info_tambahan'] = $this->M_ppdb->tampil_data_info_tambahan_wakakur()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('wakakur_info_tambahan_ereport',$data);
	}


	public function tambah_info_wakakur()
	{
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_info_tambahan_ereport');
	}

	public function insert_info_tambahan()
	{
		
			$data = array(
			'judul' => $this->input->post('judul'),
			'info' => $this->input->post('info'),
			'tanggal_terbit' => $this->input->post('tanggal_terbit')
		);

			$this->M_ppdb->tambah_data_infotambahan($data,'wakakur_infotambahan');
			$this->load->view('berhasil_tambah_infotambahan_ereport');			
	}

	public function hapus_infotambahan($id){
		$id_info =    array ('id_info' => $id);
		$this->M_ppdb->hapus_infotambahan($id_info,'wakakur_infotambahan');
		redirect(base_url('admin/wakakur_info_tambahan'));
	}

	public function edit_infotambahan($id){
		$sess_data = $this->session->userdata();
		$data['edit_info'] = $this->M_ppdb->edit_infotambahan($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_infotambahan_ereport',$data);
	}

	public function update_infotambahan(){

		$data = array(
			'judul' => $this->input->post('judul'),
			'info' => $this->input->post('info'),
			'tanggal_terbit' => $this->input->post('tanggal_terbit')
		);
		
	
		$where = array(
			'id_info' => $this->input->post('id_info')
		);

	

		$this->M_ppdb->update_infotambahan($where,$data,'wakakur_infotambahan');
		$this->load->view('berhasil_ubah_infotambahan_ereport');
	}

	public function baca_infotambahan($id){
		$sess_data = $this->session->userdata();
		$data['baca_info'] = $this->M_ppdb->baca_infotambahan($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('baca_infotambahan_ereport',$data);
	}

	public function wakasis_info_tambahan()
	{
		$data['info_tambahan'] = $this->M_ppdb->tampil_data_info_tambahan_wakasis()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('wakasis_info_tambahan_ereport',$data);
	}

	public function tambah_info_wakasis()
	{
		$sess_data = $this->session->userdata();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_info_tambahan_wakasis_ereport');
	}

	public function insert_info_tambahan_wakasis()
	{
		
			$data = array(
			'judul' => $this->input->post('judul'),
			'info' => $this->input->post('info'),
			'tanggal_terbit' => $this->input->post('tanggal_terbit')
		);

			$this->M_ppdb->tambah_data_infotambahan_wakasis($data,'wakasis_infotambahan');
			$this->load->view('berhasil_tambah_infotambahan_wakasis_ereport');			
	}

	public function hapus_infotambahan_wakasis($id){
		$id_info =    array ('id_info' => $id);
		$this->M_ppdb->hapus_infotambahan_wakasis($id_info,'wakasis_infotambahan');
		redirect(base_url('admin/wakasis_info_tambahan'));
	}

	public function edit_infotambahan_wakasis($id){
		$sess_data = $this->session->userdata();
		$data['edit_info'] = $this->M_ppdb->edit_infotambahan_wakasis($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_infotambahan_wakasis_ereport',$data);
	}

	public function update_infotambahan_wakasis(){

		$data = array(
			'judul' => $this->input->post('judul'),
			'info' => $this->input->post('info'),
			'tanggal_terbit' => $this->input->post('tanggal_terbit')
		);
		
	
		$where = array(
			'id_info' => $this->input->post('id_info')
		);

	

		$this->M_ppdb->update_infotambahan_wakasis($where,$data,'wakasis_infotambahan');
		$this->load->view('berhasil_ubah_infotambahan_wakasis_ereport');
	}

	public function baca_infotambahan_wakasis($id){
		$sess_data = $this->session->userdata();
		$data['baca_info'] = $this->M_ppdb->baca_infotambahan_wakasis($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('baca_infotambahan_wakasis_ereport',$data);
	}

	public function laporan_bulanan()
	{
		$sess_data = $this->session->userdata();
		$role = $this->session->userdata('role');
		$id_user = $this->session->userdata('id_user');

			$data['laporan'] = $this->M_ppdb->tampil_data_laporan_bulanan()->result();
			$data['tp_aktif'] = $this->M_ppdb->tampil_data_tp_aktif()->result();
			$this->load->view('template/header',$sess_data);
			$this->load->view('template/sidebar_admin_sekolah');
			$this->load->view('form_laporan_bulanan_ereport',$data);

	}

	public function tambah_laporan_bulanan()
	{
		$sess_data = $this->session->userdata();
		$id_user = $this->session->userdata('id_user');
		$data['kelas_walas'] = $this->M_ppdb->tampil_data_kelas_walas($id_user)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('tambah_laporan_bulanan_ereport',$data);
	}

	
	public function insert_laporan_bulanan()
	{
		
			$data = array(
			'id_kelas' => $this->input->post('id_kelas'),
			'id_walas' => $this->input->post('id_walas'),
			'periode' => $this->input->post('periode'),
			'jlh_laki' => $this->input->post('jlh_laki'),
			'jlh_laki_islam' => $this->input->post('jlh_laki_islam'),
			'jlh_laki_kristen' => $this->input->post('jlh_laki_kristen'),
			'jlh_laki_katolik' => $this->input->post('jlh_laki_katolik'),
			'jlh_laki_budha' => $this->input->post('jlh_laki_budha'),
			'jlh_laki_hindu' => $this->input->post('jlh_laki_hindu'),
			'jlh_perempuan' => $this->input->post('jlh_perempuan'),
			'jlh_perempuan_islam' => $this->input->post('jlh_perempuan_islam'),
			'jlh_perempuan_kristen' => $this->input->post('jlh_perempuan_kristen'),
			'jlh_perempuan_katolik' => $this->input->post('jlh_perempuan_katolik'),
			'jlh_perempuan_budha' => $this->input->post('jlh_perempuan_budha'),
			'jlh_perempuan_hindu' => $this->input->post('jlh_perempuan_hindu'),
			'total' => $this->input->post('total'),
			'jlh_hadir_tpt_waktu' => $this->input->post('jlh_hadir_tpt_waktu'),
			'persen_hadir_tpt_waktu' => $this->input->post('persen_hadir_tpt_waktu'),
			'keterangan_hadir_tpt_waktu' => $this->input->post('keterangan_hadir_tpt_waktu'),
			'jlh_terlambat' => $this->input->post('jlh_terlambat'),
			'persen_terlambat' => $this->input->post('persen_terlambat'),
			'keterangan_terlambat' => $this->input->post('keterangan_terlambat'),
			'jlh_sakit' => $this->input->post('jlh_sakit'),
			'persen_sakit' => $this->input->post('persen_sakit'),
			'ket_sakit' => $this->input->post('ket_sakit'),
			'jlh_izin' => $this->input->post('jlh_izin'),
			'persen_izin' => $this->input->post('persen_izin'),
			'ket_izin' => $this->input->post('ket_izin'),
			'jlh_alpa' => $this->input->post('jlh_alpa'),
			'persen_alpa' => $this->input->post('persen_alpa'),
			'ket_alpa' => $this->input->post('ket_alpa'),
			'kondisi_akademik' => $this->input->post('kondisi_akademik'),
			'kondisi_psiko' => $this->input->post('kondisi_psiko'),
			'kondisi_fisik' => $this->input->post('kondisi_fisik')
		);


			$this->M_ppdb->tambah_laporan_bulanan($data,'laporan_bulanan_walas');
			$this->load->view('berhasil_tambah_laporan_bulanan_ereport');
	
			
	}

	public function baca_laporan_bulanan($id){
		$sess_data = $this->session->userdata();
		$data['baca_laporan'] = $this->M_ppdb->baca_laporan_bulanan($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('baca_laporan_bulanan_ereport',$data);
	}

	
	public function edit_laporan_bulanan($id){
		$sess_data = $this->session->userdata();
		$data['edit_laporan'] = $this->M_ppdb->edit_laporan_bulanan($id)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('edit_laporan_bulanan_ereport',$data);
	}

	public function update_laporan_bulanan(){

		$data = array(
			'id_kelas' => $this->input->post('id_kelas'),
			'id_walas' => $this->input->post('id_walas'),
			'periode' => $this->input->post('periode'),
			'jlh_laki' => $this->input->post('jlh_laki'),
			'jlh_laki_islam' => $this->input->post('jlh_laki_islam'),
			'jlh_laki_kristen' => $this->input->post('jlh_laki_kristen'),
			'jlh_laki_katolik' => $this->input->post('jlh_laki_katolik'),
			'jlh_laki_budha' => $this->input->post('jlh_laki_budha'),
			'jlh_laki_hindu' => $this->input->post('jlh_laki_hindu'),
			'jlh_perempuan' => $this->input->post('jlh_perempuan'),
			'jlh_perempuan_islam' => $this->input->post('jlh_perempuan_islam'),
			'jlh_perempuan_kristen' => $this->input->post('jlh_perempuan_kristen'),
			'jlh_perempuan_katolik' => $this->input->post('jlh_perempuan_katolik'),
			'jlh_perempuan_budha' => $this->input->post('jlh_perempuan_budha'),
			'jlh_perempuan_hindu' => $this->input->post('jlh_perempuan_hindu'),
			'total' => $this->input->post('total'),
			'jlh_hadir_tpt_waktu' => $this->input->post('jlh_hadir_tpt_waktu'),
			'persen_hadir_tpt_waktu' => $this->input->post('persen_hadir_tpt_waktu'),
			'keterangan_hadir_tpt_waktu' => $this->input->post('keterangan_hadir_tpt_waktu'),
			'jlh_terlambat' => $this->input->post('jlh_terlambat'),
			'persen_terlambat' => $this->input->post('persen_terlambat'),
			'keterangan_terlambat' => $this->input->post('keterangan_terlambat'),
			'jlh_sakit' => $this->input->post('jlh_sakit'),
			'persen_sakit' => $this->input->post('persen_sakit'),
			'ket_sakit' => $this->input->post('ket_sakit'),
			'jlh_izin' => $this->input->post('jlh_izin'),
			'persen_izin' => $this->input->post('persen_izin'),
			'ket_izin' => $this->input->post('ket_izin'),
			'jlh_alpa' => $this->input->post('jlh_alpa'),
			'persen_alpa' => $this->input->post('persen_alpa'),
			'ket_alpa' => $this->input->post('ket_alpa'),
			'kondisi_akademik' => $this->input->post('kondisi_akademik'),
			'kondisi_psiko' => $this->input->post('kondisi_psiko'),
			'kondisi_fisik' => $this->input->post('kondisi_fisik')
		);
		
	
		$where = array(
			'id_laporan' => $this->input->post('id_laporan')
		);

	

		$this->M_ppdb->update_laporan_bulanan($where,$data,'laporan_bulanan_walas');
		$this->load->view('berhasil_ubah_laporan_bulanan_ereport');
	}


	public function hapus_laporan_bulanan($id){
		$id_info =    array ('id_laporan' => $id);
		$this->M_ppdb->hapus_laporan_bulanan($id_info,'laporan_bulanan_walas');
		redirect(base_url('admin/laporan_bulanan'));
	}

	public function profil(){
		$sess_data = $this->session->userdata();
		$id_user = $this->session->userdata('id_user');
		$data['profil'] = $this->M_ppdb->profil($id_user)->result();
		$this->load->view('template/header',$sess_data);
		$this->load->view('template/sidebar_admin_sekolah');
		$this->load->view('profil_ereport',$data);
	}

	public function update_profil(){

			$data = md5($this->input->post('password'));
	

			$where = $this->input->post('id_user');

	

		$this->M_ppdb->update_profil($where,$data);
		$this->load->view('berhasil_ubah_profil_ereport');
	}

	
	public function cetak_laporan($id){
		$sess_data = $this->session->userdata();
		$data['baca_laporan'] = $this->M_ppdb->baca_laporan_bulanan_cetak($id)->result();
		// $this->load->view('cetak_laporan',$data);
		$this->load->library('dompdf_gen');
		
				$this->load->view('cetak_laporan',$data);
				$paper_size = 'F4';
				$orientation = 'portrait';
				$html = $this->output->get_output();
				$this->dompdf->set_paper($paper_size,$orientation);

				$this->dompdf->load_html($html);
				$this->dompdf->render();
				$this->dompdf->stream("Laporan Bulanan Wali Kelas.pdf", array('Attachment' =>0));
	}





	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
	
	public function kuota()
	{
		$data['kuota'] = $this->M_ppdb->tampil_data_kuota()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('kuota',$data);
		$this->load->view('template/footer');
	}

	public function data_bpp()
	{
		$data['bpp'] = $this->M_ppdb->tampil_data_bpp()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('data_bpp',$data);
		$this->load->view('template/footer');
	}

	public function insert_bpp()
	{
		$bulan1 = $this->input->post('bulan1');
		$bulan2 = $this->input->post('bulan2');
		$tahun1 = $this->input->post('tahun1');
		$tahun2 = $this->input->post('tahun2');
		$keterangan_tambahan = $this->input->post('keterangan_tambahan');
		
		if ($bulan1=="" && $tahun1=="") {
			$setrip="";
		}elseif($bulan2=="" && $tahun2==""){
			$setrip="";
		}
		else {
			$setrip="-";
		}
		$keterangan=$bulan1." ".$tahun1." ".$setrip." ".$bulan2." ".$tahun2."\n".$keterangan_tambahan;

			$data = array(
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jenjang' => $this->input->post('jenjang'),
			'status' => $this->input->post('status'),
			'keterangan' => $keterangan
		);
	


		$cek_nis = $this->M_ppdb->cek_nis($this->input->post('nis'))->num_rows();

		if ($cek_nis>0) {
			$this->load->view('gagal_nis');
		}else{
			$this->M_ppdb->tambah_data($data,'data');
			$this->load->view('berhasil_bpp');
		}

	}

	public function update_bpp(){


		$bulan1 = $this->input->post('bulan1');
		$bulan2 = $this->input->post('bulan2');
		$tahun1 = $this->input->post('tahun1');
		$tahun2 = $this->input->post('tahun2');
		$keterangan_tambahan = $this->input->post('keterangan_tambahan');
		
		if ($bulan1=="" && $tahun1=="") {
			$setrip="";
		}elseif($bulan2=="" && $tahun2==""){
			$setrip="";
		}
		else {
			$setrip="-";
		}
		$keterangan=$bulan1." ".$tahun1." ".$setrip." ".$bulan2." ".$tahun2."\n".$keterangan_tambahan;

		$data = array(
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jenjang' => $this->input->post('jenjang'),
			'kelas' => $this->input->post('kelas'),
			'status' => $this->input->post('status'),
			'keterangan' => $keterangan
		);
		
	
		$where = array(
			'nis' => $this->input->post('nis')
		);
	
		$this->M_ppdb->update_bpp($where,$data,'data');
		$this->load->view('berhasil_ubah_bpp');
	}

	public function edit_bpp($id){
		$sess_data = $this->session->userdata();
		$nis =    array ('nis' => $id);
		$data['edit_bpp'] = $this->M_ppdb->edit_bpp($nis)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('edit_bpp',$data);
		$this->load->view('template/footer');
	}


	public function tambah_bpp(){
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('tambah_bpp');
		$this->load->view('template/footer');
	}


	public function rekap_data(){
		$sess_data = $this->session->userdata();
		$data['jenjang'] = $this->M_ppdb->tampil_jenjang()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('rekap_data',$data);
		$this->load->view('template/footer');
	}

	public function ambil_kelas($id){
		$sess_data = $this->session->userdata();
		$data['kelas'] = $this->M_ppdb->tampil_kelas($id)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('rekap_data_kelas',$data);
		$this->load->view('template/footer');
	}

	public function ambil_siswa($id){
		$sess_data = $this->session->userdata();
		$data['siswa'] = $this->M_ppdb->tampil_siswa($id)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('rekap_data_siswa',$data);
		$this->load->view('template/footer');
	}









	public function tambahkuota(){
		$jenis           = $this->input->post('jenis');
		$kuota          = $this->input->post('kuota');
		$keterangan          = $this->input->post('keterangan');


	   
		$data = array(
			'jenis' => $jenis,
			'kuota' => $kuota,
			'keterangan' => $keterangan

		);
	
		$this->M_ppdb->tambahkuota($data,'kuota');
		redirect(base_url('home/kuota'));
	}

	public function hapuskuota($id){
		$id =    array ('id' => $id);
		$this->M_ppdb->hapuskuota($id,'kuota');
		redirect(base_url('home/kuota'));
	}

	public function hapus_bpp($id){
		$nis =    array ('nis' => $id);
		$this->M_ppdb->hapususer($nis,'data');
		redirect(base_url('admin/data_bpp'));
	}

	public function editkuota($id){
		$sess_data = $this->session->userdata();
		$id =    array ('id' => $id);
		$data['kuota'] = $this->M_ppdb->editkuota($id,'kuota')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('editkuota',$data);
		$this->load->view('template/footer');
	}


	public function preview($id){
		header("Content-type: application/pdf");
		readfile("asset/file");
		// $data['file']=$id;
		// $this->load->view('preview',$data);

	}

	public function zonasi($id)
	{
		$sess_data = $this->session->userdata();
		$id_pesertadidik = $this->session->userdata('id_pesertadidik');
		$data['zonasi'] = $this->M_ppdb->zonasiadmin($id)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah', $sess_data);
		$this->load->view('zonasiadmin', $data);
		$this->load->view('template/footer');
	}

	public function updatekuota(){
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
	
		$this->M_ppdb->updatekuota($where,$data,'kuota');
		$this->load->view('berhasil_ubah');
		$this->load->view('kuota');
	}

	public function approve_formulir()
	{
		$sess_data = $this->session->userdata();
		$id_sekolah = $this->session->userdata('id_pesertadidik');
		$data['formulir'] = $this->M_ppdb->tampil_approval($id_sekolah)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('approve_formulir',$data);
		$this->load->view('template/footer');
	}

	public function cetak_kartu($id){
		$sess_data = $this->session->userdata();
		$id =    array ('id' => $id);
		$data['cetak_kartu'] = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   
		$data2 = $this->M_ppdb->tampilpengguna($id,'pengguna')->result();   

                $this->load->view('template/header');
                $this->load->view('template/sidebar_admin_sekolah',$sess_data);
                $this->load->view('cetak_kartu2',$data);
                $this->load->view('template/footer');

        }

	

	public function editapproval($id){
		$sess_data = $this->session->userdata();
		$data['approval'] = $this->M_ppdb->tampilpengguna_upload($id)->result();
		
		foreach ($data['approval'] as $data1){
				$data3 = $data1->id_pesertadidik;
		}
		
		$id_pesertadidik=$data3;
		$data['approval2'] = $this->M_ppdb->tampilketerangan($id_pesertadidik)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('editapproval',$data);
		$this->load->view('template/footer');
	}

	

	public function updatepassword(){
		$id_pesertadidik        = $this->input->post('id_pesertadidik');
        $username   			= $this->input->post('username');
		$password   			= $this->input->post('password');

		$this->M_ppdb->updatepassword($username,$password,$id_pesertadidik);
		$this->load->view('berhasil_ubah_user');
	}



		
		public function cetakformulir(){
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
			header("Content-length: ".strlen($document));
			echo $document;
 

		}

		public function approve_lulus()
	{
		$sess_data = $this->session->userdata();
		$id_sekolah = $this->session->userdata('id_pesertadidik');
		$data['lulus'] = $this->M_ppdb->tampil_lulus($id_sekolah)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('approve_lulus',$data);
		$this->load->view('template/footer');
	}

	public function editlulus($id){
		$sess_data = $this->session->userdata();
		$data['lulus'] = $this->M_ppdb->tampilpengguna_lulus($id)->result();
		
		foreach ($data['lulus'] as $data1){
			$data3 = $data1->id_pesertadidik;
		}
		$id_pesertadidik=$data3;


		$data['approval2'] = $this->M_ppdb->tampilketerangan($id_pesertadidik)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('editlulus',$data);
		$this->load->view('template/footer');
	}


	public function updateapproval(){
		$id                	= $this->input->post('id');
        $approve_formulir   = $this->input->post('approve_formulir');
		$id_pesertadidik    = $this->input->post('id_pesertadidik');
        $keterangan		    = $this->input->post('keterangan');
		
		$data = array(
			'id_pesertadidik' => $id_pesertadidik,
            'keterangan' => $keterangan
        );

		$hitungdata= $this->M_ppdb->tampil_keterangan($id_pesertadidik);

		if ($hitungdata ==1) {
            $this->M_ppdb->updateketerangan($id_pesertadidik, $keterangan);
			$this->M_ppdb->updateformulir($approve_formulir,$id,'pengguna');
			$this->load->view('berhasil_ubah_formulir');
		}else{
            $this->M_ppdb->tambahketerangan($data);
			$this->M_ppdb->updateformulir($approve_formulir,$id,'pengguna');
			$this->load->view('berhasil_ubah_formulir');  
		}


	}


	
		public function approve_daftarulang()
	{
		$sess_data = $this->session->userdata();
		$id_sekolah = $this->session->userdata('id_pesertadidik');
		$data['lulus'] = $this->M_ppdb->tampil_daftarulang($id_sekolah)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('approve_daftarulang',$data);
		$this->load->view('template/footer');
	}

	public function status_finalisasi()
	{
		$sess_data = $this->session->userdata();
		$id_sekolah = $this->session->userdata('id_pesertadidik');
		$data['finalisasi'] = $this->M_ppdb->tampil_finalisasi($id_sekolah)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('status_finalisasi',$data);
		$this->load->view('template/footer');
	}

	public function editdaftarulang($id){
		$sess_data = $this->session->userdata();
		$data['daftarulang'] = $this->M_ppdb->tampilpengguna_daftarulang($id)->result();
		foreach ($data['daftarulang'] as $data1){
			$data3 = $data1->id_pesertadidik;
		}
	
		$id_pesertadidik=$data3;
		$data['approval2'] = $this->M_ppdb->tampilketerangan($id_pesertadidik)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('editdaftarulang',$data);
		$this->load->view('template/footer');
	}

	public function updatedaftarulang(){
		$id                		= $this->input->post('id');
        $approve_daftarulang   	= $this->input->post('approve_daftarulang');
		$id_pesertadidik    = $this->input->post('id_pesertadidik');
        $keterangan		    = $this->input->post('keterangan');

		$data = array(
			'id_pesertadidik' => $id_pesertadidik,
            'keterangan' => $keterangan
        );

		$hitungdata= $this->M_ppdb->tampil_keterangan($id_pesertadidik);

		if ($hitungdata ==1) {
            $this->M_ppdb->updateketerangan($id_pesertadidik, $keterangan);
			$this->M_ppdb->updatedaftarulang($approve_daftarulang,$id,'pengguna');
			$this->load->view('berhasil_ubah_daftarulang');	
		}else{
            $this->M_ppdb->tambahketerangan($data);
			$this->M_ppdb->updatedaftarulang($approve_daftarulang,$id,'pengguna');
			$this->load->view('berhasil_ubah_daftarulang');	
		}
	}

	public function updatelulus(){
		$id                	= $this->input->post('id');
        $approve_lulus   	= $this->input->post('approve_lulus');
		$id_pesertadidik    = $this->input->post('id_pesertadidik');
        $keterangan		    = $this->input->post('keterangan');

		$data = array(
			'id_pesertadidik' => $id_pesertadidik,
            'keterangan' => $keterangan
        );

		$hitungdata= $this->M_ppdb->tampil_keterangan($id_pesertadidik);

		if ($hitungdata ==1) {
            $this->M_ppdb->updateketerangan($id_pesertadidik, $keterangan);
			$this->M_ppdb->updatelulus($approve_lulus,$id,'pengguna');
			$this->load->view('berhasil_ubah_lulus');	
		}else{
            $this->M_ppdb->tambahketerangan($data);
			$this->M_ppdb->updatelulus($approve_lulus,$id,'pengguna');
			$this->load->view('berhasil_ubah_lulus');	
		}
	}
	
		public function datapengguna()
	{
		$data['pengguna'] = $this->M_ppdb->tampildatapengguna()->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('datapengguna',$data);
		$this->load->view('template/footer');
	}

	public function editpengguna($id)
	{
		$id =    array ('id' => $id);
		$data['editpengguna'] = $this->M_ppdb->tampilpengguna($id)->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('editpengguna',$data);
		$this->load->view('template/footer');
	}

	public function ganti_password($id)
	{
		$data['ganti_password'] = $this->M_ppdb->tampilgantipassword($id)->result();
		$sess_data = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('ganti_password',$data);
		$this->load->view('template/footer');
	}

	public function editfinalisasi($id)
	{
		$sess_data = $this->session->userdata();
		$data['editfinalisasi'] = $this->M_ppdb->edit_finalisasi($id)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin_sekolah',$sess_data);
		$this->load->view('editfinalisasi',$data);
		$this->load->view('template/footer');
	}

	public function updatefinalisasi(){
		$id                	= $this->input->post('id');
		$id_pesertadidik   	= $this->input->post('id_pesertadidik');
        $status   			= $this->input->post('status');

		
		$data['tampil_finalisasi'] = $this->M_ppdb->tampil_data_sekolahtujuan_finalisasi($id_pesertadidik)->result();

		foreach ($data['tampil_finalisasi'] as $datakunci){
			$id_sekolah = $datakunci ->id_sekolah;
			if ($datakunci->jenis_pendaftaran==1) {
				$kurang = "sisa_zonasi";
			}
			if ($datakunci->jenis_pendaftaran==2) {
				$kurang = "sisa_afirmasi";
			}
			if ($datakunci->jenis_pendaftaran==3) {
				$kurang = "sisa_pindahan";
			}
			if ($datakunci->jenis_pendaftaran==4) {
				$kurang = "sisa_prestasi";
			}
			if ($datakunci->jenis_pendaftaran==5) {
				$kurang = "sisa_umum";
			}
		}

		$kurang1=$kurang;
		$id_sekolah1=$id_sekolah;

		if ($status == 0) {
			$this->M_ppdb->kurang_kuota($kurang1,$id_sekolah1);
		}
		$this->M_ppdb->updatefinalisasi_admin($status,$id,'pengguna');
		$this->load->view('berhasil_ubah_status');
	}

	public function updatedatapengguna(){
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
			'alamat' =>$alamat,
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
		$this->M_ppdb->updatedatapengguna($where,$data,'pengguna');
		$this->load->view('berhasil_ubah_password');
		$this->load->view('datapengguna');	}


	public function cetakformulirdaftarulang(){
			// membaca data dari form
			$nama_lengkap    = $this->input->post('nama_lengkap');
			$nama_panggilan  = $this->input->post('nama_panggilan');
			$tingkat		 = $this->input->post('tingkat');
			$nisn	         = $this->input->post('nisn');
			$goldar	         = $this->input->post('goldar');
			$anak_ke         = $this->input->post('anak_ke');
			$dari_saudara    = $this->input->post('dari_saudara');
			$jarak	         = $this->input->post('jarak');
			$tpt_lahir	     = $this->input->post('tpt_lahir');
			$tgl_lahir       = $this->input->post('tgl_lahir');
			$agama	         = $this->input->post('agama');
			$suku	         = $this->input->post('suku');
			$jk		         = $this->input->post('jk');
			$alamat	         = $this->input->post('alamat');
			$desa	         = $this->input->post('desa');
			$kabupaten       = $this->input->post('kabupaten');
			$provinsi        = $this->input->post('provinsi');
			$nama_ayah	     = $this->input->post('nama_ayah');
			$pendidikan_ayah	= $this->input->post('pendidikan_ayah');
			$penghasilan_ayah	= $this->input->post('penghasilan_ayah');
			$hp_ayah	        = $this->input->post('hp_ayah');
			$tptlahir_ayah      = $this->input->post('tptlahir_ayah');
			$tgllahir_ayah      = $this->input->post('tgllahir_ayah');
			$pekerjaan_ayah     = $this->input->post('pekerjaan_ayah');
			$alamatayah        = $this->input->post('alamat_ayah');
			$desa_ayah          = $this->input->post('desa_ayah');
			$kabupaten_ayah     = $this->input->post('kabupaten_ayah');
			$provinsi_ayah      = $this->input->post('provinsi_ayah');
			$nama_ibu	     = $this->input->post('nama_ibu');
			$pendidikan_ibu	= $this->input->post('pendidikan_ibu');
			$penghasilan_ibu	= $this->input->post('penghasilan_ibu');
			$hp_ibu	        = $this->input->post('hp_ibu');
			$tptlahir_ibu      = $this->input->post('tptlahir_ibu');
			$tgllahir_ibu      = $this->input->post('tgllahir_ibu');
			$pekerjaan_ibu     = $this->input->post('pekerjaan_ibu');
			$alamat_ibu        = $this->input->post('alamat_ibu');
			$desa_ibu          = $this->input->post('desa_ibu');
			$kabupaten_ibu     = $this->input->post('kabupaten_ibu');
			$provinsi_ibu      = $this->input->post('provinsi_ibu');
			$sekolah_asal	   = $this->input->post('sekolah_asal');
			$npsn		       = $this->input->post('npsn');
			$almt_sekolah    = $this->input->post('alamat_sekolah');
			$kabupaten_sekolah		= $this->input->post('kabupaten_sekolah');
			$provinsi_sekolah		= $this->input->post('provinsi_sekolah');
			$penyakit	         = $this->input->post('penyakit');
			$olah_raga	         = $this->input->post('olah_raga');
			$seni	         = $this->input->post('seni');
			$tari	         = $this->input->post('tari');
			$lukis	         = $this->input->post('lukis');
			$drama	         = $this->input->post('drama');
			$sastra	         = $this->input->post('sastra');
			$organisasi	         = $this->input->post('organisasi');
			$prestasi	         = $this->input->post('prestasi');
			$alasan	         = $this->input->post('alasan');
			$tentang_sekolah	         = $this->input->post('tentang_sekolah');



			
			// memanggil dan membaca template dokumen yang telah kita buat
			$document = file_get_contents("formulir_pendaftaran_ulang.rtf");
			
			// isi dokumen dinyatakan dalam bentuk string
			$document = str_replace("#NAMA_LENGKAP", $nama_lengkap, $document);
			$document = str_replace("#NAMA_PANGGILAN", $nama_panggilan, $document);
			$document = str_replace("#TINGKAT", $tingkat, $document);
			$document = str_replace("#NISN", $nisn, $document);
			$document = str_replace("#GOLDAR", $goldar, $document);
			$document = str_replace("#ANAK_KE", $anak_ke, $document);
			$document = str_replace("#DARI_SAUDARA", $dari_saudara, $document);
			$document = str_replace("#JARAK", $jarak, $document);
			$document = str_replace("#TPTLAHIR", $tpt_lahir, $document);
			$document = str_replace("#TGLLAHIR", $tgl_lahir, $document);
			$document = str_replace("#AGAMA", $agama, $document);
			$document = str_replace("#SUKU", $suku, $document);
			$document = str_replace("#JK", $jk, $document);
			$document = str_replace("#ALAMAT", $alamat, $document);
			$document = str_replace("#DESA", $desa, $document);
			$document = str_replace("#KABUPATEN", $kabupaten, $document);
			$document = str_replace("#PROVINSI", $provinsi, $document);
			$document = str_replace("#NAMA_AYAH", $nama_ayah, $document);
			$document = str_replace("#PENDIDIKAN_AYAH", $pendidikan_ayah, $document);
			$document = str_replace("#PENGHASILAN_AYAH", $penghasilan_ayah, $document);
			$document = str_replace("#NOTEL", $hp_ayah, $document);
			$document = str_replace("#TPT_AYAH", $tptlahir_ayah, $document);
			$document = str_replace("#TGL_AYAH", $tgllahir_ayah, $document);
			$document = str_replace("#PEKERJAAN", $pekerjaan_ayah, $document);
			$document = str_replace("#TPTTINGGAL_AYAH", $alamatayah, $document);
			$document = str_replace("#KEL", $desa_ayah, $document);
			$document = str_replace("#KAB", $kabupaten_ayah, $document);
			$document = str_replace("#KAU", $provinsi_ayah, $document);


			$document = str_replace("#MOTHER", $nama_ibu, $document);
			$document = str_replace("#KUG", $pendidikan_ibu, $document);
			$document = str_replace("#KEK", $penghasilan_ibu, $document);
			$document = str_replace("#HP", $hp_ibu, $document);
			$document = str_replace("#KUH", $tptlahir_ibu, $document);
			$document = str_replace("#KUK", $tgllahir_ibu, $document);
			$document = str_replace("#KUB", $pekerjaan_ibu, $document);
			$document = str_replace("#KEH", $alamat_ibu, $document);
			$document = str_replace("#KEF", $desa_ibu, $document);
			$document = str_replace("#KAF", $kabupaten_ibu, $document);
			$document = str_replace("#KAG", $provinsi_ibu, $document);
			$document = str_replace("#HH", $sekolah_asal, $document);
			$document = str_replace("#HK", $npsn, $document);
			$document = str_replace("#HN", $almt_sekolah, $document);
			$document = str_replace("#HJ", $kabupaten_sekolah, $document);
			$document = str_replace("#HY", $provinsi_sekolah, $document);
			$document = str_replace("#PENYAKIT", $penyakit, $document);
			$document = str_replace("#OLAH_RAGA", $olah_raga, $document);
			$document = str_replace("#SENI", $seni, $document);
			$document = str_replace("#TARI", $tari, $document);
			$document = str_replace("#LUKIS", $lukis, $document);
			$document = str_replace("#DRAMA", $drama, $document);
			$document = str_replace("#SASTRA", $sastra, $document);
			$document = str_replace("#ORGANISASI", $organisasi, $document);
			$document = str_replace("#PRESTASI", $prestasi, $document);
			$document = str_replace("#ALASAN", $alasan, $document);
			$document = str_replace("#TENTANG_SEKOLAH", $tentang_sekolah, $document);


			



			
			// header untuk membuka file output RTF dengan MS. Word
			
			header("Content-type: application/msword");
			header("Content-disposition: inline; filename=formulir_pendaftaran_ulang.doc");
			header("Content-length: ".strlen($document));
			echo $document;

		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('hal/login'));    
		}

}
