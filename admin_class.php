 <?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function login(){
		extract($_POST);
		$qry = $this->db->query("SELECT * FROM users where username = '".$username."' and password = '".$password."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'passwors' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
				return 1;
		}else{
			return 3;
		}
	}
	function login2(){
		extract($_POST);
		$qry = $this->db->query("SELECT * FROM users where username = '".$email."' and password = '".md5($password)."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'passwors' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
				return 1;
		}else{
			return 3;
		}
	}
	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:login.php");
	}
	function logout2(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:../index.php");
	}

	function save_user(){
		extract($_POST);
		 $groupname=implode(',',$groupname);
		$data1 = " groupname = '$groupname' ";
		
		$data = " name = '$name' ";
		$data .= ", username = '$username' ";
		$data .= ", password = '$password' ";

		  $data .= ", type = '$type' ";
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users set ".$data.",".$data1);
			//$save = $this->db->query("INSERT INTO application set ".$data1);
		}else{
			$save = $this->db->query("UPDATE users set ".$data.",".$data1." where id = ".$id);
		}
		if($save){
			return 1;
		}
	}
	// position
	function save_user1(){
		extract($_POST);
		$data = " position = '$name' ";
		 
		if(empty($id)){
			$save = $this->db->query("INSERT INTO position set ".$data);
		} else{
			$save = $this->db->query("UPDATE position set ".$data." where id = ".$id);
		}
		if($save){
			return 1;
		}
	}
	function signup(){
		extract($_POST);
		$data = " name = '$name' ";
		$data .= ", contact = '$contact' ";
		$data .= ", address = '$address' ";
		$data .= ", username = '$email' ";
		$data .= ", password = '".md5($password)."' ";
		$data .= ", type = 3";
		$chk = $this->db->query("SELECT * FROM users where username = '$email' ")->num_rows;
		if($chk > 0){
			return 2;
			exit;
		}
			$save = $this->db->query("INSERT INTO users set ".$data);
		if($save){
			$qry = $this->db->query("SELECT * FROM users where username = '".$email."' and password = '".md5($password)."' ");
			if($qry->num_rows > 0){
				foreach ($qry->fetch_array() as $key => $value) {
					if($key != 'passwors' && !is_numeric($key))
						$_SESSION['login_'.$key] = $value;
				}
			}
			return 1;
		}
	}

	function save_settings(){
		extract($_POST);
		$data = " name = '".str_replace("'","&#x2019;",$name)."' ";
		$data .= ", email = '$email' ";
		$data .= ", contact = '$contact' ";
		$data .= ", about_content = '".htmlentities(str_replace("'","&#x2019;",$about))."' ";
		if($_FILES['img']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
						$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/img/'. $fname);
					$data .= ", cover_img = '$fname' ";

		}
		
		// echo "INSERT INTO system_settings set ".$data;
		$chk = $this->db->query("SELECT * FROM system_settings");
		if($chk->num_rows > 0){
			$save = $this->db->query("UPDATE system_settings set ".$data);
		}else{
			$save = $this->db->query("INSERT INTO system_settings set ".$data);
		}
		if($save){
		$query = $this->db->query("SELECT * FROM system_settings limit 1")->fetch_array();
		foreach ($query as $key => $value) {
			if(!is_numeric($key))
				$_SESSION['setting_'.$key] = $value;
		}

			return 1;
				}
	}

	
	function save_recruitment_status(){
		extract($_POST);
		$data = " status_label = '$status_label' ";
		if(empty($id)){
			$save = $this->db->query("INSERT INTO recruitment_status set ".$data);
		}else{
			$save = $this->db->query("UPDATE recruitment_status set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}

	function save_group_status(){
		extract($_POST);
		$data = " groupname = '$groupname' ";
		if(empty($id)){
			$save = $this->db->query("INSERT INTO user_group set ".$data);
		}else{
			$save = $this->db->query("UPDATE user_group set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}


	function delete_recruitment_status(){
		extract($_POST);
		$delete = $this->db->query("UPDATE recruitment_status set status = 0 where id = ".$id);
		if($delete)
			return 1;
	}
	function delete_group_status(){
		extract($_POST);

		  $qry=$this->db->query("SELECT id, groupname FROM `user_group` where id=".$id);
		  $grq=$qry->fetch_array();
		    $groupname_ps=$grq['groupname'];//group2
		  

		  $qry=$this->db->query("SELECT id, groupname FROM `users`");
		  while ($st=$qry->fetch_array()){
                    $user_id=$st['id'] ;
                    $groupname_gt= $st['groupname'];
		            $replace_string_group= str_replace($groupname_ps,'',$groupname_gt);
		          //  $replace_string_group= str_replace(',','',$replace_string_group);
                    $UPDATE = $this->db->query("UPDATE users set groupname='$replace_string_group' where id =".$user_id); 
		  }

 
		  $delete = $this->db->query("DELETE FROM `user_group`  where id =".$id);
		 
	    	if($delete)
			return 1;
	}
	function save_vacancy(){
		extract($_POST);
		$data = " position = '$position' "; 
		$data .= ", availability = '$availability' ";
		$data .= ", description = '".htmlentities(str_replace("'","&#x2019;",$description))."' "; 
		if(isset($status))
		$data .= ", status = '$status' "; 

		if(empty($id)){
			
			$save = $this->db->query("INSERT INTO vacancy set ".$data);
		}else{
			$save = $this->db->query("UPDATE vacancy set ".$data." where id=".$id);
		}
		if($save)
			return 1;
		 
			}
	function delete_vacancy(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM vacancy where id = ".$id);
		if($delete)
			return 1;
	}
	function delete_user(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM users where id = ".$id);
		if($delete)
			return 1;
	}
	function save_application(){
		extract($_POST);
		$allid= $_SESSION['login_id'];
		// $rand_id= echo(mt_rand(10000000,99999999));
		$data = " lastname = '$lastname' ";
		$data .= ", firstname = '$firstname' ";
		$data .= ", middlename = '$middlename' ";
		$data .= ", address = '$address' ";
		$data .= ", contact = '$contact' ";
		$data .= ", email = '$email' ";
		$data .= ", csalary = '$csalary' ";
		$data .= ", esalary= '$esalary' ";
		$data .= ", dojoining = '$dojoining' ";
		$data .= ", experience = '$experience' ";
		$data .= ", gender = '$gender' ";
		$data .= ", source = '$source' ";
		$data .= ", Comment_source = '$Comment_source' ";
		$data .= ", cover_letter = '".htmlentities(str_replace("'","&#x2019;",$cover_letter))."' ";
		$data .= ", position_id = '$position_id' ";
		$data .= ", rand_id = '".mt_rand(10000000,99999999)."' ";
		$data .= ", User_id = '$allid' ";
		
		if(isset($status))
		$data .= ", process_id = '$status' ";
			
		if($_FILES['resume']['tmp_name'] != ''){
						 $fnames = str_replace("'"," " ,$_FILES['resume']['name']);

						  $fname = strtotime(date('y-m-d H:i')).'_'.$fnames;
						 

						$move = move_uploaded_file($_FILES['resume']['tmp_name'],'assets/resume/'. $fname);
					$data .= ", resume_path = '$fname' ";

		}
       ;
       
		$select = $this->db->query("SELECT  `email`, `contact`  FROM `application` where  email='$email' OR contact='$contact'");
		 
		$save1=$select->num_rows>0;
 		if($save1){return 2;}else{

		if(empty($id)){
						//echo "INSERT INTO application set ".$data;
						// exit; 
					    $data .= ", status = 'New' ";
			 			$save = $this->db->query("INSERT INTO application set ".$data);
		     }else{
			        $save = $this->db->query("UPDATE application set ".$data." where id=".$id);
		           }
		if($save)
			return 1; }
	}
	function delete_application(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM application where id = ".$id);
		if($delete)
			return 1;
	}
	function delete_user1(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM position where id = ".$id);
		if($delete)
			return 1;
	}
	function feedback_application(){
		extract($_POST);
		$allid= $_SESSION['login_id'];
		$username= $_SESSION['login_name'];
		
		$data2 = " status = '$Status' ";
		$data1 = "nextinterview = '$nextinterview' ";
		$data1 .= ", nextview = '$nextview' ";
		$data3 = " fStatus = '$fStatus' ";
		
		// $data = " interview_stime = '$stime' "; 
		$data = " nextinterview = '$nextinterview' ";
		$data .= ", nextview      = '$nextview' ";
		// $data .= ", interview_etime	 = '$etime' ";
		$data .= ", feedback_text = '$Feedback' ";
		$data .= ", feedback_id = '$id' ";
		$data .= ", userid = '$allid' ";
		$data .= ", user_name = '$username' ";
		 
	 
		if(!empty($id)){
		 //  echo "INSERT INTO feedback set ".$data.",".$data2.",".$data3;
			// exit;

			// if (!empty($Status)) {
		 	$save = $this->db->query("INSERT INTO feedback set ".$data.",".$data2.",".$data3);
				// }

	 		$save = $this->db->query(" UPDATE application set ".$data1.",".$data2.",".$data3." where rand_id=".$id);
 
		   }
		if($save)
			return 1;
	}

}