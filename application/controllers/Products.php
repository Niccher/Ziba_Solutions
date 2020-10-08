<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function add($page = 'add'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            redirect('login');
        }

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
        $this->load->view('all/'.$page);
        $this->load->view('helper/tail');
        $this->load->view('helper/dropzone');
	}

	public function edit($page = 'services'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            redirect('login');
        }

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
	}

    public function delete($page = 'cart'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            redirect('login');
        }

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
    }


	public function info($page = 'checkout'){

        if (!file_exists(APPPATH.'views/all/'.$page.'.php')) {
            show_404();
        }

        if (! $this->session->userdata('log_id')) {
            redirect('login');
        }

        $this->load->view('helper/header');
        //$this->load->view('template/sidebar',$titl);
        $this->load->view('all/'.$page,$data);
        $this->load->view('helper/tail');
	}
}
