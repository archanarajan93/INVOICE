<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master extends CI_Controller {
    public $Message = null;
	public function __construct() {
		parent::__construct();
        $this->load->helper('Enum');
        $this->load->database();
        $this->load->library('App/Message');
        $this->load->model("MasterModel");
         $this->Message = new Message();
	}
	public function index()
    {
       //$this->data['records']= $this->MasterModel->GetInvoiceList() ();
       $this->load->view('invoice-details-test',$this->data);
    }
    public function UpsertOthersInvoiceMaster(){
        echo json_encode($this->MasterModel->UpsertOthersInvoiceMaster());
    }

}