<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function index($error = NULL) {

        $data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),
            'error' => $error
        );
		check_already_login();
        $this->load->view('login', $data);
    }
    public function login() {
        $this->load->model('m_data');
        $login = $this->m_data->login($this->input->post('username'), md5($this->input->post('password')));
        if ($login == 1) {
            $row = $this->m_data->data_login($this->input->post('username'), md5($this->input->post('password')));
            $data = array(
                'logged' => TRUE,
                'username' => $row->username,
                'level' => $row->level
            );
            $this->session->set_userdata($data);
            redirect(site_url('home'));
        } else {
            $error = 'username / password salah';
            $this->index($error);
        }
    }
    function register(){
        $this->load->view('v_register');
    }
    function logout() {
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }
}