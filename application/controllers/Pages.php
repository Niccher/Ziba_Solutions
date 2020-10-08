<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index($page = 'index'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }


        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
        $this->load->view('all/'.$page);
        $this->load->view('helper/tail');
    }

    public function services($page = 'services'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            //redirect('login');
        }

        $data['work_posted'] = $this->mod_services->get_all();

        $this->load->view('helper/header');
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
    }

    public function cart($page = 'cart'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            redirect('login');
        }

        $real_user =  $this->session->userdata('log_id');
        $data['work_cart'] = $this->mod_services->get_cartout($real_user);

        $this->load->view('helper/header');
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
    }


    public function checkout($page = 'checkout'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            redirect('login');
        }

        $real_user =  $this->session->userdata('log_id');
        $data['work_cart'] = $this->mod_services->get_cartout($real_user);

        $this->load->view('helper/header');
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
    }
}
