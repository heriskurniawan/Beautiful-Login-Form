<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
    }


	public function index()
	{
		$this->load->view('login/login');
    }
    function chek_login() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $loginUser = $this->Model_user->chekLogin($username, $password);
         
            if (!empty($loginUser)) {
        
                 $session = array(
                    'username'  =>  $loginUser['username']);
               $this->session->set_userdata($session);
               redirect('dashboard');
              // $this->template_admin->load('template_admin', 'user/list', $data);
            }
           
        } else {
            redirect('auth');
        }
    }
}
