<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthController extends CI_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->helper('Enum');
        $this->load->database();
        $this->load->model("AuthModel");
	}
	public function index()
    {
        $this->data['state_rec']=array();
        $this->data['state_rec'] = $this->AuthModel->GetCountry();
        $this->load->view('user_login',$this->data);

    }
    public function DoLogin()
	{
        $user_session = $this->session->userdata("STDLOGIN");
        if($user_session && isset($user_session["user_name"])){ redirect("/Dashboard", 'refresh');}
        $response = $this->AuthModel->validateLoginCredentials();
		if($response)
		{

            $data = array('std_id'  => $response->std_id,
                          'std_name' => $response->std_name,
                          'std_emial' => $response->std_emial,
                          'std_dob' => $response->std_dob,
                          'std_gender' => $response->std_gender);
            $this->session->set_userdata("STDLOGIN", $data);
            //redirect('/Settings/SelectCompany', 'refresh');
		}
		else
		{
            $this->session->sess_destroy();
            $this->session->set_flashdata('loginstatus', 'error');
            redirect('/', 'refresh');
		}
	}
	public function Logout($doRedirect=0)
	{
        $this->session->unset_userdata('STDLOGIN');
        $this->session->set_flashdata('loginstatus', 'logout_success');
        $this->session->sess_destroy();
        if($doRedirect=='1'){
            redirect('/');
        }else{
            echo json_encode(array("status"=>200));
        }
	}

    public function CreateStudentDetails(){
        $response=$this->AuthModel->CreateStudentDetails();
        $this->session->set_flashdata('flash_message', json_encode($response));
    }
}