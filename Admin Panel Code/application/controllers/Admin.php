<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('grocery_CRUD');
        $rits = $this->session->userdata('admin_email');
        if ($rits == NULL) {
            redirect('Login');

        } else {
            //      redirect('dashboard/community');
        }
        $this->load->model('Admin_model');
        $this->load->model('Login_model');
        $this->load->model('Owner_model');

    }

    public function index() {
        $data['countRestraunt'] = $this->Admin_model->getRestrauntCount();
        $data['countMenu'] = $this->Admin_model->getMenuCount();
        $data['countOwner'] = $this->Admin_model->getOwnerCount();
        $data['countUser'] = $this->Admin_model->getUserCount();
       $data['contactUs'] = $this->Admin_model->getContactUs();

        $this->load->view('admin/dashboard',$data);
    }

    //GetEmail Start
    public function email($is_msg=null)
    {
        if ($is_msg != null) {
			$data['msg'] = $is_msg;
			$data['msg'] = "Updated Succesfully ";
		 $data['email'] = $this->Admin_model->getemailText();

        $this->load->view('admin/email',$data); 
		} else {

 $data['email'] = $this->Admin_model->getemailText();

        $this->load->view('admin/email',$data); 

		}
        
    }
//GetEmail End


//UpdateEmail Start
    public function updateEmail()
    {
        $data=array(
        'accept'=>$this->input->post('accept'),
    	'bake'=>$this->input->post('bake'),
    	'take'=>$this->input->post('take'),
    	'signup'=>$this->input->post('signup'),
    	'complete'=>$this->input->post('complete'),
    	'reject'=>$this->input->post('reject'),
 
        );
       $this->Admin_model->updateEmail($data);
       	//$this->session->set_flashdata('msg', 'Updated Succesfully');
       redirect('Admin/email/1');
    }

    //UpdateEmail End

 //////////////////////////////////////////Crud OF Kitchen Starts here////////////////////////////////
//GetOwnerData Start
    public function Kitchenold()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('kitchen')
            ->set_subject('Kitchens')
            ->display_as('kitchen_name', 'Name')->display_as('kitchen_address', 'Address')->display_as('owner_id', 'Owner')->display_as('kitchen_image', 'Image')   ->unset_fields(array('kitchen_longi', 'kitchen_lat'))->unset_columns(array('kitchen_longi', 'kitchen_lat'));

        $data['owner'] = $this->Admin_model->getOwner();

        $array = array();
        foreach ($data['owner'] as $arr) {
            $array[$arr->owner_id] = $arr->owner_name;

        }
        $crud->field_type('owner_id', 'dropdown', $array);

        $crud->set_field_upload('kitchen_image', 'assets/uploads/files');
        $output = $crud->render();
        $output->table = 'Kitchen';
        $this->_display_records($output);
    }
    //GetOwnerData End

    //Load AdminKitchen Page
    public function kitchen(){
        $data['kitchens']=$this->Admin_model->getkitchen();
    	$this->load->view('admin/admin_kitchen',$data);
    }
    //Load AdminKitchen Page
    

    //Load AddKitchen Page
    public function addKitchen(){
        $data['owner']=$this->Admin_model->getOwner();
    	$this->load->view('admin/addKitchen',$data);
    }
    //Load AddKitchen Page
    

    //AddNewKitchen
    	public function newKitchen(){
	    $uploads_dir = 'assets/uploads/images/';
        $id = $this->session->userdata('owner_id');
        //$pic = $_FILES["file"]['name'];
        if ($_FILES["file"]['name']=="")
        {
            $pic="sample.jpg";
        }
        else{
            $pic = $_FILES["file"]['name'];
        }

        $pic2 = $uploads_dir . time().$pic;


            $tmp_name = $_FILES["file"]['tmp_name'];

            // $tmp_name = basename($_FILES["files"]["tmp_name"]);
            move_uploaded_file($tmp_name, $pic2);
        $date=date('y-m-d');
        $pic=time().$pic;


            $uploads_dir1 = 'assets/images/';

            //$pic = $_FILES["file"]['name'];
            if ($_FILES["cover"]['name']=="")
            {
                $pic3="banner.jpg";
            }
            else{
                $pic3 = $_FILES["cover"]['name'];
            }

            $pic4 = $uploads_dir1 . time().$pic;


            $tmp_name1 = $_FILES["cover"]['tmp_name'];

            // $tmp_name = basename($_FILES["files"]["tmp_name"]);
            move_uploaded_file($tmp_name1, $pic4);
            $date=date('y-m-d');
            $pic3=time().$pic3;



$open_time=$this->input->post('opentime');
    	$close_time=$this->input->post('closetime');
 $opentime= date("H:i", strtotime($open_time));
 $closetime= date("H:i", strtotime($close_time));
//die();

        $data=array(
    	'kitchen_name'=>$this->input->post('kitchenname'),
    	'kitchen_address'=>$this->input->post('kitchenaddress'),
        'owner_id'=>$this->input->post('owner_id'),
    	'kitchen_image'=>$pic,
            'cover'=>$pic3,
    	'open_time'=>$opentime,
    	'close_time'=>$closetime
    	);
        $this->Admin_model->newKitchen($data);
        redirect('admin/kitchen');
        }
        //AddNewKitchen
        
    
    //UpdateKitchen    
    public function updateKitchen($kitchen_id){
    $data['kitchen']=$this->Admin_model->getEditKitchen($kitchen_id);
    $data['owner']=$this->Admin_model->getOwner();
    $this->load->view('admin/updatekitchen',$data);
    }
    //UpdateKitchen
    
    
    //EditKitchen
     public function editKitchen(){
     $kitchen_id=$this->input->post('kitchenid');
     $uploads_dir = 'assets/uploads/images/';
       
        $pic = $_FILES["file"]['name'];
        
        $pic2 = $uploads_dir.$pic;


            $tmp_name = $_FILES["file"]['tmp_name'];

            // $tmp_name = basename($_FILES["files"]["tmp_name"]);
            move_uploaded_file($tmp_name, $pic2);
        $date=date('y-m-d');
        $pic=$pic;
        $open_time=$this->input->post('opentime');
    	$close_time=$this->input->post('closetime');
        $opentime= date("H:i", strtotime($open_time));
        $closetime= date("H:i", strtotime($close_time));
        if ($_FILES["file"]['name']!=""){
        
        $data=array(
        'kitchen_name'=>$this->input->post('kitchenname'),
    	'kitchen_address'=>$this->input->post('kitchenaddress'),
    	//'kitchen_longi'=>$this->input->post('kitchenlocation'),
    	'owner_id'=>$this->input->post('owner_id'),
    	'kitchen_image'=>$pic,
    	'open_time'=>$opentime,
    	'close_time'=>$closetime

        );
       }else{

       $data=array(
        'kitchen_name'=>$this->input->post('kitchenname'),
    	'kitchen_address'=>$this->input->post('kitchenaddress'),
    	//'kitchen_longi'=>$this->input->post('kitchenlocation'),
    	'owner_id'=>$this->input->post('owner_id'),
    	'open_time'=>$opentime,
    	'close_time'=>$closetime
 
        );
       }
       $menu_id = $this->Admin_model->editKitchen($data,$kitchen_id);
       redirect('admin/kitchen');
    }
//EditKitchen
    
    
    //DeleteKitchen
      public function deleteKitchen($kitchen_id){
    	$this->Admin_model->deleteKitchen($kitchen_id);	
    	 redirect('admin/kitchen');
    }
    //DeleteKitchen
    

    //////////////////////////////////////////Crud OF Kitchen Ends here////////////////////////////////

    //ToDisplayOwnerData
    public function owner()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('owner')
            ->set_subject('Owners')
            ->display_as('owner_name', 'Name')->display_as('owner_address', 'Address')->display_as('owner_email', 'Email')->display_as('owner_image', 'Image')->display_as('owner_password', 'Password')->display_as('owner_contact', 'Contact') ->display_as('owner_status', 'Status')   ->unset_fields(array('owner_longi', 'owner_lat'))->unset_columns(array('owner_longi', 'owner_lat'));


        $crud->set_field_upload('owner_image', 'assets/uploads/files');
        $output = $crud->render();
        $output->table = 'Owner';
        $this->_display_records($output);
    }
    //ToDisplayOwnerData
    
 
    //ToDisplayUserData
    public function user()
    {

        $crud = new grocery_CRUD();

        $crud->set_table('user')
            ->set_subject('Users')
            ->display_as('user_name', 'Name')->display_as('user_address', 'Address')->display_as('user_email', 'Email')->display_as('user_image', 'Image')->display_as('user_password', 'Password')->display_as('owner_phone', 'Contact') ->display_as('user_status', 'Status')   ->unset_fields(array('user_longi', 'user_lat'))->unset_columns(array('user_longi', 'user_lat'));


        $crud->set_field_upload('user_image', 'assets/uploads/files');
        $output = $crud->render();
        $output->table = 'user';
        $this->_display_records($output);
    }
    //ToDisplayUserData

//LoadOrderPage
public function order()
{
    $data['orders'] = $this->Admin_model->getOrder();
    $this->load->view('admin/order',$data);
}
//LoadOrderPage

//EditOrder
public function editOrder()
{
    $data['order'] = $this->Admin_model->getOrderDetail();
    $data['orders'] = $this->Admin_model->getOrderDetails();
    $this->load->view('admin/showorder',$data); 
}
//EditOrder

//Loadnewsletter   
public function newsletter()
{
    $data['news']=$this->Admin_model->getNews();
    $this->load->view('admin/news',$data);
}
//Loadnewsletter

//LoadSendEmailPage
public function sentEmail()
{
    $data['suscribers']=$this->Admin_model->getNews();
    $this->load->view('admin/sentnews',$data);
}
//LoadSendEmailPage

//SendMailStart
public function emailsent()
{
    $uploads_dir = 'assets/uploads/images/';
    $pic = $_FILES["file"]['name'];

$pic2 = $uploads_dir . time().$pic;


$tmp_name = $_FILES["file"]['tmp_name'];

    // $tmp_name = basename($_FILES["files"]["tmp_name"]);
move_uploaded_file($tmp_name, $pic2);
$date=date('y-m-d');
$pic=time().$pic;



if ($this->input->post('suscriber')=="all") {

    $data['suscribers'] = $this->Admin_model->getNews();
    foreach ($data['suscribers'] as $sus) {
        $this->load->library('email');
        $from_email = 'angdionne@aol.com'; 

        $subject = 'NewsLetter';
        $message = "PFA";

        //configure email settings
        $config['protocol'] = 'sendmail';
        $config['smtp_host'] = 'ssl://smtp.aol.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = 'angdionne@aol.com';
        $config['smtp_pass'] = 'dionne30#!!'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);

        //send mail
        $this->email->from($from_email, 'Food');
        $this->email->to($sus->email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->attach($pic2);
        $this->email->send();


    }
}
        else
        {
            $this->load->library('email');
            $from_email = 'angeldesignsllc@gmail.com';


            $subject = 'NewsLetter';
            $message = "PFA";

            //configure email settings
            $config['protocol'] = 'sendmail';
            $config['smtp_host'] = 'ssl://smtp.aol.com'; //smtp host name
            $config['smtp_port'] = '465'; //smtp port number
            $config['smtp_user'] = 'angdionne@aol.com';
            $config['smtp_pass'] = 'Dionne30!!'; //$from_email password
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            $this->email->initialize($config);

            //send mail
            $this->email->from($from_email, 'Food');
            $this->email->to($this->input->post('suscriber'));
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->attach($pic2);
            $this->email->send();
        }
    redirect('Admin/newsletter');

}
//SendMailEnd

//DeleteNewsFunction
public function deleteNews($id)
{
    $this->Admin_model->deleteNews($id);
    redirect('admin/newsletter');
}
//DeleteNewsFunction
   
   //LoadDisplayRecords
    function _display_records($output = null)
    {
        $this->load->view('admin/records.php', $output);
    }
    //LoadDisplayRecords
    

    //GetAdminProfileData
    public function profile($is_msg = null) {

		if ($is_msg != null) {
			$data['msg'] = $is_msg;
			$data['msg'] = "Your Profile is Updated ";
			$id = $this->session->userdata('admin_id');
			$data['profile'] = $this->Login_model->getAdminDetail($id);
			$this->load->view('admin/profile', $data);
		} else {

			$id = $this->session->userdata('admin_id');
			$data['profile'] = $this->Login_model->getAdminDetail($id);
			$this->load->view('admin/profile', $data);

		}
	}
	//GetAdminProfileData


	//UpdateAdminProfileData
	public function updateProfile() {

		$id = $this->session->userdata('admin_id');
		$pass = $this->input->post('password');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$cpass = $this->input->post('cpassword');

		if (isset($cpass) && $pass == $cpass) {
			$change =
			array(

				'password' => $pass,
				'admin_name' => $name,
				'admin_email' => $email,

			);
		} else {
			$change =
			array(

				'admin_name' => $name,
				'admin_email' => $email,

			);
		}

		$this->Login_model->UpdateAdmin($change, $id);

		redirect('Admin/profile/1');
	}

	//UpdateAdminProfileData

	//DisplayOrderDetailsById
     public function orderdetail(){
        $orderid=$this->input->post('id');
        
        $query['orderdetail']=$this->Owner_model->getorderdetail($orderid);
        $section=0;
        $section='<table class="table table-stripped">
		         <tr>
     <th>Menus:</th> <th>Quantity:</th><th>Topping</th><th>Comment</th>
     </tr>';
        foreach($query['orderdetail'] as $od){
            $section.='<tr>
            <td>'. $od->menu_name.'</td>
            <td>'. $od->qty.'</td>';
                                                                        
           $section.='<td>'; 
           if(!empty($od->m_extra_id)){
           $array=array();
           $array=explode(',',$od->m_extra_id);
                                                                       
           foreach($array as $menu){
            $menu =MenuEx($menu);
            $menu= rtrim($menu, ",");
            $section.=  $menu .",";
            }
            }
            $section.='</td>';
            $section.='</td>
            <td>'.  $od->comment .'</td></tr>';
            }
            $section.='</table>';
        
            echo $section;
            }
            //DisplayOrderDetailsById
    

    //UpdateOrderStatus
    public function updateOrderStatus()
    {
       $id= $this->input->post('orderid');
        
        $data=array(
       'status'=> $this->input->post('status'),
       );
            $this->Admin_model->updateOrderStatus($id,$data);
            
            redirect('admin/order');
    }
    //UpdateOrderStatus

    //GenerateToday'sReport
    public function todayReports()
    {
        $date = date('y-m-d');
        $data['completed'] = $this->Admin_model->getTodayCompletedOrders($date);
        $data['rejected'] = $this->Admin_model->getTodayRejectedOrders($date);
        $data['countOrders'] = $this->Admin_model->getOrderCount($date);
        $data['countRejected'] = $this->Admin_model->getRejectedCount($date);
        $data['countCompleted'] = $this->Admin_model->getCompletedCount($date);
        $data['sales'] = $this->Admin_model->getSalesCount($date);
        $data['heading']="Today Records";
        $this->load->view('admin/Reports', $data);
        }
        //GenerateToday'sReport

    //LoadGetDatePage    
    public function getDate()
    {
        $this->load->view('admin/getdate');
    }
    //LoadGetDatePage 

    //GenerateReportFromTo
    public function reports()
    {
        $from = $this->input->get('from');
        $to =  $this->input->get('to');

        $data['completed'] = $this->Admin_model->getDateCompletedOrders($from,$to);
        $data['rejected'] = $this->Admin_model->getDateRejectedOrders($from,$to);
        $data['countOrders'] = $this->Admin_model->getDateOrderCount($from,$to);
        $data['countRejected'] = $this->Admin_model->getDateRejectedCount($from,$to);
        $data['countCompleted'] = $this->Admin_model->getDateCompletedCount($from,$to);
        $data['sales'] = $this->Admin_model->getDateSalesCount($from,$to);
        $data['heading']= "Record From :  " . $from. " <br>   To :  " .$to;
        
        $this->load->view('admin/Reports', $data);

    }
    //GenerateReportFromTo
     

    //GetFoodCategory 
    public function food_Cat()
    { 
        $this->load->model('Admin_model');
        $cat['f_cats'] = $this->Admin_model->getFoodCategory();
        $this->load->view('admin/food_cat',$cat);
    }
     //GetFoodCategory

    //LoadAddRecordPage
    public function addrecord()
    {
        $this->load->model('Admin_model');
        $k_id['ki'] = $this->Admin_model->kitchenid();
        $this->load->view('admin/add_record',$k_id);
    }
    //LoadAddRecordPage

    //InsertFoodCat
    public function insertFoodCat()
    {
        $f_name = $_FILES['f_name']['name'];
        $f_tmp  = $_FILES['f_name']['tmp_name'];
        $kitchen_id = $this->input->post('kitchenid');
        foreach($kitchen_id as $k_id)
        {
            $insert_cat = array(
                                    'kitchen_id'     =>  $k_id,
                                    'food_cat_name'  =>  $this->input->post('c_name'),
                                    'food_cat_image' =>  $f_name,
                                    'description'    =>  $this->input->post('desc')
                               );

            $this->load->model('Admin_model');
            $insert = $this->Admin_model->insertFoodCat($insert_cat);

             $destination = 'assets/uploads/files/'.$f_name;
                move_uploaded_file($f_tmp, $destination);
        }

        redirect('admin/food_cat');
    }
     //InsertFoodCat

    //LoadUpdateCatPage
    public function updateCat($id)
    {
        $this->load->model('Admin_model');
        $data['data'] = $this->Admin_model->updateCat($id);
        $this->load->view('admin/update_cat',$data);
    }
    //LoadUpdateCatPage

    //UpdateSuccessMessage
    public function updateCatSuccess()
    {
        $f_name = $_FILES['f_name']['name'];
        $f_tmp  = $_FILES['f_name']['tmp_name'];
        if($f_tmp == "")
        {
            $cat_id = $this->input->post('id');
            $update_cat = array(
                'food_cat_name'   =>   $this->input->post('food_name'),

                'description'     =>   $this->input->post('desc')
            );

            $this->load->model('Admin_model');
            $this->Admin_model->updatSuccess($cat_id,$update_cat);
            return redirect('admin/food_cat');
        }
        else{
        $cat_id = $this->input->post('id');
        
        $update_cat = array(
                                'food_cat_name'   =>   $this->input->post('food_name'),
                                'food_cat_image'  =>   $f_name,
                                'description'     =>   $this->input->post('desc')
                           );

        $this->load->model('Admin_model');
        $this->Admin_model->updatSuccess($cat_id,$update_cat);
        $destination = 'assets/uploads/files/'.$f_name;
        move_uploaded_file($f_tmp, $destination);
        redirect('admin/food_cat');
      }
    }
    //UpdateSuccessMessage

    //DeleteCat
    public function deleteCat($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->deleteCat($id);
        redirect('admin/food_cat');
    }
    //DeleteCat

    //LoadMenuPage
    public function menu()
    {
        $this->load->view('admin/menu_view');
    }
    //LoadMenuPage

    //AddNewMenu
    public function addMenus()
    {
        $this->load->model('Admin_model');
        $data['d']  = $this->Admin_model->getKitchenNames();
        $data['f']  = $this->Admin_model->getFoodNames();
        $data['sc'] = $this->Admin_model->getFoodSubCatNames();
        $this->load->view('admin/add_menus',$data);
    }
    //AddNewMenu

    //InsertSubCategory
    public function insertFoodSubCat()
    {
        $k_id = $this->input->post('kitchenid');
        foreach($k_id as $id)
        {
            
        }
    }
    //InsertSubCategory

}

?>
