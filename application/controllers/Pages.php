<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index($page = 'index'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            redirect('login');
        }

        $titl['pag'] = "home";
        $data['info'] = "home";

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
	}

	public function services($page = 'services'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            redirect('login');
        }

        $titl['pag'] = "services";
        $data['info'] = "home";

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
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

        $titl['pag'] = "cart";
        $data['info'] = "home";

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
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

        $titl['pag'] = "checkout";
        $data['info'] = "home";

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
	}
}
