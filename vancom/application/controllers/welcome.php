<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
                var   $Logintitle="Login Faculty of Pharmaceutical Science KKU";
                var  $title="Faculty of Pharmaceutical Science KKU";
              //  var  $head="Therapeutic Drug Monitoring Report";
                 var  $head="รายการหลัก";
	public function index()
	{
		//$this->load->view('welcome_message');
                                   //  $data["titlelogin"]="Login Faculty of Pharmaceutical Science KKU";
                                      $data["titlelogin"]=$this->Logintitle;
                                     $this->load->view("login",$data);
	}
                 public function checklogin()
                 {
                                     $data['title']=$this->title;
                                     $data['head']=$this->head;
                                     $this->load->view("home",$data);
                                     
                 }
                 public function  dg_patient() //ประวัติของผู้ป่วย
                 {

                     # http://127.0.0.1/vancom/index.php/welcome/dg_patient
                           
                        $tb="tb_patient";
                        $query = $this->db->get($tb, 10, 0);
                        $rows=array();
                        foreach( $query->result() as $row  )
                        {
                                $rows[]=$row;
                        }
                         echo json_encode($rows);
                               
                 }
                 public function cmb_hn() //ค้น HN ของ ผู้ป่วย
                 {
                      //  http://127.0.0.1/vancom/index.php/welcome/cmb_hn
                       $q = isset($_POST['q']) ? strval($_POST['q']) : '';
                        $tb="tb_patient";
                        $this->db->like("HN",$q);
                        $query = $this->db->get($tb, 10, 0);
                        $rows=array();
                         foreach( $query->result() as $row  )
                        {
                                $rows[]=$row;
                        }
                         echo json_encode($rows);
                 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */