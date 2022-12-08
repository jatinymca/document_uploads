<?php 
         $login_type=$_SESSION['login_type'];
         $login_groupname=$_SESSION['login_groupname'];

 if($login_type=='1'){
   
   $user_group_Query='';
   $user_group_Query_hm='';
   $user_group_Query_mp='';

 }else{

	  $user_group=explode(',',$login_groupname);//string to array  $login_groupname=Group4,group2,Group1,g2,g3
	// print_r($user_group);//Array ( [0] => Group4 [1] => group2 [2] => Group1 [3] => g2 [4] => g3 )
	$user_access_id=array();

    $res=$conn->query("SELECT * FROM `users` where 1");
    while($row=$res->fetch_assoc()){

            
           $group_name=$row['groupname'];                     //Group1,group3,g5
           $group_name_array=explode(',',$group_name);        //0->g1,1->g2,2->g3
       
       //print_r($group_name_array);
           foreach ($group_name_array as $key => $value) {    //g1 g2 g3
             if(in_array($value, $user_group)){                  
                 $user_access_id[]=$row['id'];
              } 
           } 
     };


 
  $user_access_id=array_unique($user_access_id);
  $user_access_id_st=implode("','",$user_access_id);
	$user_group_Query="AND a.User_id IN('$user_access_id_st')";
  $user_group_Query_hm="AND  User_id IN('$user_access_id_st')";
	$user_group_Query_mp=" a.User_id IN('$user_access_id_st')";
}


 
  ?>