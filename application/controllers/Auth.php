<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login($page = 'login'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        $this->form_validation->set_rules('form_lgeml','Email','required');
        $this->form_validation->set_rules('form_lgpwd','Password', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('helper/header');
            $this->load->view('all/'.$page);
            $this->load->view('helper/tail');
        }else{

            $lg_eml = ($this->mod_crypt->Enc_String($this->input->post('form_lgeml')));
            $lg_pwd = ($this->mod_crypt->Enc_String($this->input->post('form_lgpwd')));

            //$cukie = base64_encode($lg_eml."|||".$lg_pwd."|||".$lg_lvl);
            $user_id = $this->mod_user->make_login($lg_eml,$lg_pwd);
            $lg_name = $this->mod_user->get_name($lg_eml);

            if ($user_id) {
                $user_type = $this->mod_user->get_type($user_id);

                $user_logged = array(
                    'log_mail' => $lg_eml,
                    'log_name' => $lg_name,
                    'log_id' => $user_id,
                    'log_type' => $user_type
                );

                $this->session->set_userdata($user_logged);
                
                redirect('home');

            }else{
                redirect('login');
                $this->session->set_flashdata("lg_fail", "Login was unsuccesful");
            }
            
        }
	}

    public function admin_log($page = 'auth'){

        if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
            show_404();
        }

        $this->form_validation->set_rules('form_lgeml','Email','required');
        $this->form_validation->set_rules('form_lgpwd','Password', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('helper/header');
            $this->load->view('all/'.$page);
            $this->load->view('helper/tail');
        }else{

            $lg_eml = ($this->mod_crypt->Enc_String($this->input->post('form_lgeml')));
            $lg_pwd = ($this->mod_crypt->Enc_String($this->input->post('form_lgpwd')));

            $user_id = $this->mod_user->make_login($lg_eml,$lg_pwd);
            $lg_name = $this->mod_user->get_name($lg_eml);

            if ($user_id) {
                $user_type = $this->mod_user->get_type($user_id);

                $user_logged = array(
                    'log_mail' => $lg_eml,
                    'log_name' => $lg_name,
                    'log_id' => $user_id,
                    'log_type' => $user_type,
                    'log_state' => "admin"
                );

                $this->session->set_userdata($user_logged);
                
                redirect('admin');

            }else{
                redirect('login');
                $this->session->set_flashdata("lg_fail", "Login was unsuccesful");
            }
            
        }
    }

	public function register($page = 'register'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        $this->form_validation->set_rules('form_nwname','Name','required|callback_name_exists');
        $this->form_validation->set_rules('form_nwsurname','Surname', 'required|callback_user_exists');
        $this->form_validation->set_rules('form_nwphone','Phone','required');
        $this->form_validation->set_rules('form_nweml','Email', 'required|callback_email_exists');
        $this->form_validation->set_rules('form_nwcat','Category', 'required');
        $this->form_validation->set_rules('form_nwtown','Town','required');
        $this->form_validation->set_rules('form_nwpwd','Password', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('helper/header');
            //$this->load->view('template/sidebar',$titl);
            $this->load->view('all/'.$page);
            $this->load->view('helper/tail');
        }else{

            $nw_pwd = $this->mod_crypt->Enc_String($this->input->post('form_nwpwd'));
            $nw_eml = $this->mod_crypt->Enc_String($this->input->post('form_nweml'));

            $this->mod_user->make_user($nw_pwd , $nw_eml);
            $this->session->set_flashdata("User_registered", "User created succesfully");

            redirect('login');
        }
	}

    public function user_info($user_id){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            //redirect('login');
        }

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
    }

    public function user_exists($user){
        $this->form_validation->set_message("user_exists","Surname Exists, Try another one");

        if($this->mod_user->checkuser_exists($user)) {
            return true;
        }else{
            return false;
        }
    }

    public function name_exists($name){
        $this->form_validation->set_message("name_exists","Name Exists, Try another one");

        if($this->mod_user->checkname_exists($name)) {
            return true;
        }else{
            return false;
        }
    }

    public function email_exists($mail){
        $this->form_validation->set_message("email_exists","Email Exists, Try another one");

        if($this->mod_user->checkmail_exists($mail)) {
            return true;
        }else{
            return false;
        }
    }
}
