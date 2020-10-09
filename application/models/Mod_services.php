<?php
	class Mod_services extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_users(){
            $this->db->where('Category',"False");
        	$query = $this->db->get('tbl_Users');
        	return $query->result_array();//$query->row_array();
        }

        public function get_all(){
        	$query = $this->db->get('tbl_Products');
        	return $query->result_array();
        }

        public function get_like($string){
            $reg = ucfirst($string);
            $quiz = "SELECT * FROM tbl_Products WHERE `Category` LIKE '$string' ";
            $query = $this->db->query($quiz);
            return $query->result_array();
        }

        public function get_at($pid){
            $this->db->where('PId',$pid);
            $query = $this->db->get('tbl_Products');
            return $query->row_array();
        }

        public function get_cartin($user, $pid){
            $dt = time();
            $data = array(
                'Owner' => $user,
                'Product' => $pid,
                'Joined' => $dt
            );

            return $this->db->insert('tbl_Cart', $data);
        }

        public function get_cartout($user_id){
            $this->db->where('Owner',$user_id);
            $query = $this->db->get('tbl_Cart');
            return $query->result_array();
        }

        public function get_name($user_mail){
            $this->db->where('Email',$user_mail);
            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                return $result->row(0)->Surname;
            }else{
                return false;
            }
        }

        public function get_type($user_id){
            $this->db->where('UsaID',$user_id);
            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                return $result->row(0)->isAdmin;
            }else{
                return false;
            }
        }

        public function make_login($mail,$pwd){
            $this->db->where('Email',$mail);
            $this->db->where('Password',$pwd);

            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                echo $result->row(0)->UsaID;
                return $result->row(0)->UsaID;
            }else{
                return false;
            }
        }

        public function make_product($real_user, $imgs){
            $dt = time();
            $data = array(
                'Name' => $this->input->post('form_pdnm'),
                'Fee' => $this->input->post('form_pdfee'),
                'Location' => $this->input->post('form_pdloc'),
                'Specification' => $this->input->post('form_pdspec'),
                'Owner' => $real_user,
                'Description' => $this->input->post('form_pddesc'),
                'Joined' => $dt,
                'Category' => $this->input->post('form_pdcat'),
                'Imgs' => $imgs
            );

            return $this->db->insert('tbl_Products', $data);
        }

        public function make_edit($usr_pwd,$usr_eml,$usr_id){
            $dt = Date('F d, Y');
            $data = array(
                'Name' => $this->input->post('form_nwname'),
                'Username' => $this->input->post('form_nwusrname'),
                'Email' => base64_encode($usr_eml),//$this->input->post('form_nwemail'),
                'Phone' => $this->input->post('form_nwphone'),
                'Sex' => $this->input->post('form_nwsex'),
                'Comment' => $this->input->post('form_nwcomment'),
                'Password' => base64_encode($usr_pwd),
                'Dates' => $dt,
                'IsAdmin' => "False"
            );

            return $this->db->update('tbl_Users', $data, "Id = ".$usr_id);
        }

        public function checkuser_exists($user){
            $query = $this->db->get_where('tbl_Users', array('Surname'=>$user));

            if (empty($query->row_array())) {
                return true;
            }else{
                return false;
            }
        }

        public function checkname_exists($name){
            $query = $this->db->get_where('tbl_Users', array('Name'=>$name));

            if (empty($query->row_array())) {
                return true;
            }else{
                return false;
            }
        }

        public function checkmail_exists($mail){
            $query = $this->db->get_where('tbl_Users', array('Email'=>$mail));

            if (empty($query->row_array())) {
                return true;
            }else{
                return false;
            }
        }
	}
?>