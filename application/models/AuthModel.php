<?php
class AuthModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    public function validateLoginCredentials()
	{
		$user_login_name = $this->input->post('user_login_name', true);
		$user_password   = $this->input->post('user_password', true);
        $sql = "SELECT
                    std_id,std_name,std_emial
                FROM
                    employees.student_details
                WHERE
                    std_emial = '".$user_login_name."'
                        AND std_password '".$user_password."' ";
        return $this->db->query($sql)->row();
	}
    public function GetCountry(){
        $qry="SELECT
                state_code, state_name, state_country_code, created_by, created_date, modified_by, modified_date
                FROM
                employees.state_master ";
        return $this->db->query($qry)->result();
    }
    public function CreateStudentDetails(){
        $reg_name = strtoupper($this->input->post('reg_name', true));
        $reg_mobile = $this->input->post('reg_mobile', true);
        $reg_email = $this->input->post('reg_email', true);
        $reg_pass = $this->input->post('reg_pass', true);
        $reg_dob = $this->input->post('dob', true);
        $reg_male = $this->input->post('male', true);
        $reg_female = $this->input->post('female', true);
        $reg_country = $this->input->post('country', true);
        $reg_state = $this->input->post('state', true);

        $data = array(
            "std_name"=>$reg_name,
            "std_dob"=>$reg_dob,
            "std_emial"=>$reg_email,
            "std_gender"=>$reg_male?$reg_male:$reg_female,
            "std_country"=>$reg_country,
            "std_state"=>$reg_state,
            "std_mob"=>$reg_mobile,
            "std_password"=>$reg_pass
            );

        $this->db->trans_begin();
        $this->db->insert_batch('student_details', $data);
        if($this->db->trans_status() === TRUE)
        {
            $this->db->trans_commit();
            $this->Message->status=200;
            $this->Message->text="Register Successfully";
        }
        else
        {
            $this->db->trans_rollback();
            $this->Message->status=400;
            $this->Message->text="oohps Error";
        }
        return $this->Message;
    }
}