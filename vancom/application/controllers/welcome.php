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
                 
                   function __construct()
                    {
                        // Call the Model constructor
                          parent::__construct();
                          $this->load->model('authentication');
                    }
    
    
    
	public function index()
	{
		//$this->load->view('welcome_message');
                                   //  $data["titlelogin"]="Login Faculty of Pharmaceutical Science KKU";
                                      $data["titlelogin"]=$this->Logintitle;
                                      
                                           $arr_login=array(
                                                'sess_UserName'=>"",
                                                'sess_UserSurname'=>"",
                                                'sess_UserType'=>"",
                                                'sess_UserCode'=>"",
                                                'sess_Unused'=>"",
                                                'sess_status_login'=>0,
                                            );
                                       $this->session->set_userdata($arr_login);
                                       
                                         /*
                                           $data['sess_UserName']=$this->session->userdata('sess_UserName');
                                              //echo "<br>";
                                              
                                              $data['sess_UserSurname']=$this->session->userdata('sess_UserSurname');
                                             // echo "<br>";
                                              
                                              $data['sess_UserType']=$this->session->userdata('sess_UserType');
                                             // echo "<br>";
                                              
                                              $data['sess_UserCode']=$this->session->userdata('sess_UserCode');
                                             // echo "<br>";
                                              
                                              $data['sess_Unused']=$this->session->userdata('sess_Unused');
                                             // echo "<br>";
                                              
                                              $this->session->userdata('sess_status_login');  //check  authentication
                                            */  

                                     $this->load->view("login",$data);
	}
                 public function checklogin()
                 {
                     echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
                              $data['title']=$this->title;
                              $data['head']=$this->head;
                                               
                                     $tb="user";
                                      $UserName=$this->input->get_post("username");
                                 // echo "<br>";
                                     $Password=$this->input->get_post("password");
                                //  echo "<br>";
                                     //echo "<br>";
                                     /*
                                      SELECT *
SELECT *
FROM `user`
WHERE `Password` = "JUMKKU"
LIMIT 0 , 30
                                      * 
                                      11313 	4 	ศิริลักษณ์ 	ใจซื่อ 	jumkku 	1 	N 	N
                                          UserCode
                                      * Title
                                      * UserName
                                      * UserSurname
                                      * Password
                                      * UserType
                                      * Login
                                      * Unused
                                      */
                                   $query=$this->db->get_where($tb,array("UserName"=>$UserName, "Password"=>$Password ,"Unused"=>"N"  ));
                                    $check=$query->num_rows();
                                  //echo "<br>";
                                   if( $check != 1 )
                                   {
                                       
                                              // $this->load->view("login",$data);
                                            // $this->authentication->check_authentication();
                                       
                                                 $arr_login=array(
                                                'sess_UserName'=>"",
                                                'sess_UserSurname'=>"",
                                                'sess_UserType'=>"",
                                                'sess_UserCode'=>"",
                                                'sess_Unused'=>"",
                                                'sess_status_login'=> "",
                                            );
                                                
                                                     $this->session->set_userdata($arr_login);
                                                     
                                                     
                                               redirect('welcome');
                                               
                                   }
                                  else  if( $check == 1 )
                                   {    
                                            foreach($query->result() as $row )
                                            {
                                                     $UserType=$row->UserType ;  //1=admin
                                                   //echo  "<br>";
                                                     $Unused=$row->Unused;   // 2=บุคคลทั่วไป
                                                   // echo  "<br>";
                                                   $UserSurname=$row->UserSurname;  //นามสกุล
                                                    //echo  "<br>";
                                                   $UserCode=$row->UserCode;  //เลขที่ตำแหน่ง
                                                   // echo  "<br>";

                                            }
                                            
                                            $arr_login=array(
                                                'sess_UserName'=>$UserName,
                                                'sess_UserSurname'=>$UserSurname,
                                                'sess_UserType'=>$UserType,
                                                'sess_UserCode'=>$UserCode,
                                                'sess_Unused'=>$Unused,
                                                'sess_status_login'=> $check,
                                            );
                                            $this->session->set_userdata($arr_login);
                                            
                                             // $data['sess_username']=$this->session->userdata('sess_username'); //ชื่อผู้สัมภาษณ์
                                               $data['sess_UserName']=$this->session->userdata('sess_UserName');
                                              //echo "<br>";
                                              
                                              $data['sess_UserSurname']=$this->session->userdata('sess_UserSurname');
                                             // echo "<br>";
                                              
                                              $data['sess_UserType']=$this->session->userdata('sess_UserType');
                                             // echo "<br>";
                                              
                                              $data['sess_UserCode']=$this->session->userdata('sess_UserCode');
                                             // echo "<br>";
                                              
                                              $data['sess_Unused']=$this->session->userdata('sess_Unused');
                                             // echo "<br>";
                                              
                                              $data['sess_status_login']=$this->session->userdata('sess_status_login');  //check  authentication
                                             // echo "<br>";
                                              
                                            
                                             //  $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                                             
                                              $this->load->view("home",$data);
                                                      
                                   }  
            
                                     
                 }
                 
                 
                    public function  dg_patient_sr_HN() //ประวัติของผู้ป่วย จาก HN
                    {
                         # http://127.0.0.1/vancom/index.php/welcome/dg_patient_sr_HN/HS1553
                            $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                            
                            
                            $tb="tb_patient";
                            
                               //   $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
                              //    $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
                                  
                                     $hn=$this->uri->segment(3);
                                     $this->db->like("HN",$hn);
                                    $this->db->order_by("id_patient","DESC");
                                   
                                            $query = $this->db->get($tb, 5 );  //100 คือจำนวนข้อมูลทั้้งหมด  



                                        $rows=array();
                                        foreach( $query->result() as $row  )
                                        {
                                                $rows[]=$row;
                                        }
                                         echo json_encode($rows);
                            
                    }
                    
                    
                   public function  dg_patient_sr_NAME() //ประวัติของผู้ป่วย จาก HN
                    {
                         # http://127.0.0.1/vancom/index.php/welcome/dg_patient_sr_NAME/
                       //echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';     
                       $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม                      
                            $tb="tb_patient";
                            
                               //   $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
                              //    $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
                                  
                                     $Name=$this->uri->segment(3);
                                     $this->db->like("Name",$Name);
                                    $this->db->order_by("id_patient","DESC");
                                   
                                            $query = $this->db->get($tb, 5 );  //100 คือจำนวนข้อมูลทั้้งหมด  

                                        $rows=array();
                                        foreach( $query->result() as $row  )
                                        {
                                                $rows[]=$row;
                                        }
                                         echo json_encode($rows);
                            
                    }  
                    
                    
                 
                 
                 
                 
                 public function  dg_patient() //ประวัติของผู้ป่วย
                 {

                     # http://127.0.0.1/vancom/index.php/welcome/dg_patient
                           $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                           
                        $tb="tb_patient";
                      
                        /*
                        $page=$this->input->get_post('page');
                        $rows=$this->input->get_post('rows');
                */
                        
                         $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
                         $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;


                        /*
                        if( $page == ""  ||  $rows == ""  )
                        {
                         $query = $this->db->get($tb, 10, 0);
                       //$query = $this->db->get($tb);
                        }
                          elseif( $page > 0  &&  $rows > 0 )
                          {
                                 $query = $this->db->get($tb, 10, $rows );
                              
                          }
                         */
                        
                        $section=$page*10;
                          
                      //$this->db->limit(10, 20);
                      // Produces: LIMIT 20, 10 (in MySQL. Other databases have slightly different syntax)
                        
                         /*
                            $query=$this->db->get_where($tb,array("UserName"=>$UserName, "Password"=>$Password ,"Unused"=>"N"  ));
                            $check=$query->num_rows();
                          */
                          $strmax= $this->db->query("  SELECT   *    FROM    `tb_patient`   ");
                          $max=$strmax->num_rows();
                        
                          $this->db->order_by("id_patient","DESC");
                       //    $query = $this->db->get($tb,   $rows  );
                          /*SELECT *
FROM `tb_patient`
LIMIT 90 , 30   */
                           $query = $this->db->get($tb, 200  ,  $section  );  //100 คือจำนวนข้อมูลทั้้งหมด  
                          
                           
                        
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
                        $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
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
                 public function cmb_name()//ค้น name ของผู้ป่วย
                 {
                     //http://127.0.0.1/vancom/index.php/welcome/cmb_name
                       $this->authentication->check_authentication(); //ใช้สำหรับการ authentication login เข้าสู่โปรแกรม
                       $q = isset($_POST['q']) ? strval($_POST['q']) : '';
                        $tb="tb_patient";
                        $this->db->like("Name",$q);
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