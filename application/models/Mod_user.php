<?php
	class Mod_user extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_seller(){
            $this->db->where('Category',"Seller");
            $query = $this->db->get('tbl_Users');
            return $query->result_array();//$query->row_array();
        }

        public function get_usas(){
            $this->db->where('Category',"Customer");
            $query = $this->db->get('tbl_Users');
            return $query->result_array();//$query->row_array();
        }

        public function get_user($user_id){
        	$this->db->where('Id',$user_id);
        	$query = $this->db->get('tbl_Users');
        	return $query->row_array();
        }

        public function get_delete($user_id){
            $this->db->where('Id',$user_id);
            $this->db->delete('tbl_Users');

            return true;
        }

        public function get_mail($user_mail){
            $this->db->where('Email',$user_mail);
            $query = $this->db->get('tbl_Users');
            return $query->row_array();
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

        public function get_nam($user_id){
            $this->db->where('UsaID',$user_id);
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

        public function make_admin($mail,$pwd){
            $this->db->where('Email',$mail);
            $this->db->where('Password',$pwd);
            $this->db->where('Category','Admin');

            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                echo $result->row(0)->UsaID;
                return $result->row(0)->UsaID;
            }else{
                return false;
            }
        }

        public function make_user($usr_pwd,$usr_eml){
            $dt = time();
            $data = array(
                'Name' => $this->input->post('form_nwname'),
                'Surname' => $this->input->post('form_nwsurname'),
                'Email' => ($usr_eml),//$this->input->post('form_nwphone'),
                'Phone' => $this->input->post('form_nwphone'),
                //'Sex' => $this->input->post('form_nwsex'),
                //'Comment' => $this->input->post('form_nwcomment'),
                'Password' => ($usr_pwd),
                'Joined' => $dt,
                'Category' => $this->input->post('form_nwcat')
            );

            return $this->db->insert('tbl_Users', $data);
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