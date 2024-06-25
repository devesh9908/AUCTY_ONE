<?php

if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
include_once("config.php");
$db = new dbObj();
$con =  $db->getConnstring();
extract($_REQUEST);

$result=mysqli_query($con,"select ID as user_id,user_name,mobile,email,password,type from user where email='$email' and password='$password'");

if(mysqli_num_rows($result)==1){
 
 $row=mysqli_fetch_assoc($result);

 $data['status']=true;
 $data['message']="Login Successfully";
 $data['data'][]=$row;
 $string=json_encode($data);
 echo $string;
 
}else{

 $data['status']=false;
 $data['message']="Wrong Email and Password";
 $data['data']=array();
 $string=json_encode($data);
 echo $string;

}

}else{


 $data['status']=false;
 $data['message']="Missing parameters";
 $data['data']=array();
 $string=json_encode($data);
 echo $string;


}


?>