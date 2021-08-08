<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hal extends CI_Controller {

    function __construct(){
        parent::__construct();


    }

    public function login()
	{
		$this->load->model('M_ppdb');
		$this->load->view('login');	
	}


    public function login_aksi(){
        $username = $this->input->post('username',true);
        $password = md5($this->input->post('password',true));
 
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
 
        if($this->form_validation->run() != FALSE){
            
 
             $ceklogin = $this->M_ppdb->cek_login_user($username,$password)->num_rows();
             $cekloginid = $this->M_ppdb->cek_login_user($username,$password)->result();
             if ($ceklogin == 1) {
                 foreach ($cekloginid as $cek) {
                     $id_user = $cek->id_user;
                     $nama_user = $cek->nama_user;
                     $role = $cek->role;
                     $username = $cek->username;
                     $password = $cek->password;
                    }
 

                     $sess_data =  array(
                         'username' => $username,
                         'password' => $password,
                         'nama_user' => $nama_user,
                         'id_user' => $id_user,
                         'role' => $role,
                         'login' => 'Berhasil'              
                        );

                        print_r($sess_data);
 
                //  redirect(base_url('home'));

                if ($sess_data['role'] == "0" || $sess_data['role'] == "1"){
                    $this->session->set_userdata($sess_data); 
                    redirect(base_url('admin')); 
                 }
                 else{
                    $this->load->view('gagallogin');
                }
                 
             }else{
                 $this->load->view('error');
             }
 
        }else{
         $this->load->view('error');
 
        }
     }

     public function cari()
	{

        $data['siswa'] = $this->M_ppdb->siswa_cek()->result();
		$this->load->view('registrasi',$data);
	}

    public function cari2()
	{
        $data['siswa'] = $this->M_ppdb->siswa_cek()->result();
		$this->load->view('registrasi2',$data);
	}

    public function tambahuser(){
		$id_pesertadidik       = $this->input->get('hsh');
		$username           = $this->input->get('nik');
		$password           = $this->input->get('nisn');
	
		
		$data = array(
			'id_pesertadidik' => $id_pesertadidik,
			'username' => $username,
			'password' => $password,
			'role' => "2",
			'approve_formulir' 	=> "Antrian",
			'approve_lulus' 	=> "Antrian",
			'approve_daftarulang' => "Antrian",
            'status' => 0

		);

		$hitungusername= $this->M_ppdb->tampildatapengguna1($username,$password);

		if ($hitungusername >=1) {
			$this->load->view('username_gagal');   
		}else{
            $hitungusernamedata= $this->M_ppdb->tampildatasiswa($username,$password);
           
                $this->M_ppdb->tambahuser($data,'pengguna');
                $this->load->view('status');  
  
		}
		

	}

   


    public function cariuser(){
		$nisn       = $this->input->get('nisn');
        $data['cariuser'] = $this->M_ppdb->tampilsiswa($nisn,'datasiswa')->result();
        if ($data['cariuser']==null) {
            $this->load->view('data_tidak_ditemukan');    
        }else {
            $this->load->view('cariuser',$data);
        }

	}

    public function cariuser2(){
		$nisn       = $this->input->get('nisn');
        $data['cariuser'] = $this->M_ppdb->tampilsiswa($nisn,'datasiswa')->result();
        if ($data['cariuser']==null) {
            $this->load->view('data_tidak_ditemukan');    
        }else {
            $this->load->view('cariuser2',$data);
        }

	}

  

	public function edit(){
        $data['edit'] = $this->M_ppdb->tampilsiswa2()->result();
      
            $this->load->view('edit',$data);

	}

    public function editstatus($nis){
        $data['status'] = $this->M_ppdb->tampilsiswa($nis)->result();
            $this->load->view('editstatus',$data);

	}

    public function updatestatus(){
		$nama           = $this->input->post('nama');
		$nis        = $this->input->post('nis');
		$kelas        = $this->input->post('kelas');
		$status   = $this->input->post('status');

	
		$data = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'status' => $status

		);
	
		$where = array(
			'nis' => $nis
		);
	
		$this->M_ppdb->updatestatus($where,$data,'data');
		$this->load->view('berhasil_ubah');
		$this->load->view('edit');
	}
  

}
