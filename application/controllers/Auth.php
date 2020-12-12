<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{

		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|');

		if($this->form_validation->run() == false) {

		$this->load->view('templates/auth_header');
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
		}else{
			$this-> _login();
		}
		
	}
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$admin = $this->db->get_where('admin',['email'=>$email])->row_array();
		$admin = $this->db->get_where('admin',['password'=>$password])->row_array();
		
		
		if($user){
			//usernya ada
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Modol neng</div>');
             redirect('auth');
		}
	 }
	public function registration()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim','valid_email|is_unique[tb_user.email]');
		$this->form_validation->set_rules('password2','Password','required|trim|min_length[4]|matches[password3]',[

				'matches'=> 'Password tidak sama',
				'min_length' => 'Karakter terlalu pendek'
		]);
		$this->form_validation->set_rules('password3','Password','required|trim|matches[password2]');


		if ($this->form_validation->run()==false){
		$this->load->view('templates/auth_header');
		$this->load->view('auth/registration');
		$this->load->view('templates/auth_footer');
		}else{
            $nama= $this->input->post('nama');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $data = array(
                'email' => $email, 
                'password' => md5($password),
                'nama' => $nama
            );

             $this->db->insert("admin",$data);
             $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Modol neng</div>');
             redirect('auth');
        }
		
	}
}