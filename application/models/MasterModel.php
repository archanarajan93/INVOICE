<?php
class MasterModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function UpsertOthersInvoiceMaster(){
        $grand_total = 0;$data_trans = array();
        $invoice_record = json_decode($this->input->post('invoice_records',true),true);

        $grand_total = (double)$this->input->post('grandTotal');


        $this->db->trans_begin();


            if($invoice_record){

                foreach($invoice_record as $inv_item){
                    //$invt_item_rec = $inv_item["item_rec"];
                    $data_trans[] = array(

                                         "invtrans_item_name"=>$inv_item["item_rec"],
                                         "invtrans_qty"=>$inv_item["quantity"],
                                         "invtrans_rate"=>$inv_item["rate"],
                                         "invtrans_cgst_per"=>$inv_item["cgs_persnt"]?$inv_item["cgs_persnt"]:0,
                                         "invtrans_cgst_amt"=>$inv_item["cgst"],
                                         "invtrans_amount"=>$inv_item["amount"],
                                         "invtrans_rate_tax"=>$inv_item["rate_incTax"]);
                }
            }

            if(isset($data_trans)) $this->db->insert_batch('accs_others_invoice_trans',$data_trans);
            if($this->db->trans_status() === TRUE)
            {
                $this->db->trans_commit();
                $this->Message->status=200;
                $this->Message->text=$this->lang->line('added_success');
            }
            else
            {
                $this->db->trans_rollback();
                $this->Message->status=400;
                $this->Message->text=$this->lang->line('error_processing');
            }

        return $this->Message;
    }
    public function GetInvoiceList(){
        $qry="SELECT * FROM employees.accs_others_invoice_trans";
        return $this->db->query($qry)->result();
    }
}