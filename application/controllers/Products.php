<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function add($page = 'add'){

        $this->form_validation->set_rules('form_pdnm','Name','required');
        $this->form_validation->set_rules('form_pdfee','Fee', 'required');
        $this->form_validation->set_rules('form_pdloc','Location','required');
        $this->form_validation->set_rules('form_pdspec','Specifications', 'required');
        $this->form_validation->set_rules('form_pddesc','Description', 'required');
        $this->form_validation->set_rules('form_pdcat','Category', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('helper/header');
            $this->load->view('all/'.$page);
            $this->load->view('helper/tail');
        }else{

            $real_user =  $this->session->userdata('log_id');

            $this->mod_services->make_product($real_user);
            $this->session->set_flashdata("User_registered", "User created succesfully");

            redirect('services');
        }
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


	public function info($PId){

        if (!file_exists(APPPATH.'views/all/details.php')) {
            show_404();
        }

        $data['work_info'] = $this->mod_services->get_at($PId);

        $this->load->view('helper/header');
        $this->load->view('all/details',$data);
        $this->load->view('helper/tail');
	}


    public function cart($PId){

        if (!file_exists(APPPATH.'views/all/details.php')) {
            show_404();
        }

        $real_user =  $this->session->userdata('log_id');
        $this->mod_services->get_cartin($real_user,$PId);

        redirect('cart');

        $this->load->view('helper/header');
        $this->load->view('all/details',$data);
        $this->load->view('helper/tail');
    }
}
