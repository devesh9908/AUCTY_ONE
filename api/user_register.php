<?php
if(isset($_REQUEST['user_name']) && isset($_REQUEST['mobile']) && isset($_REQUEST['password']) && isset($_REQUEST['email'])){

include_once("config.php");
$db = new dbObj();
$con =  $db->getConnstring();
extract($_REQUEST);


$result=mysqli_query($con,"select * from user where `email`='$email'");

if(mysqli_num_rows($result)==0){
 $sql="INSERT INTO `user` (`ID`, `user_name`, `mobile`, `email`, `password`) VALUES (NULL, '$user_name', '$mobile', '$email', '$password')";

 //echo $sql;
 $rslt=mysqli_query($con,$sql);

 if($rslt){

 $data['status']=true;
 $data['message']="Save Successfully";

 }else{
   
   $data['status']=false;
   $data['message']="Server Not Responding - Database Problem";

 }

 $string=json_encode($data);
 echo $string;
 
}else{

 $data['status']=false;
 $data['message']="Email is already exist";
 
 $string=json_encode($data);
 echo $string;

}

}else{


 $data['status']=false;
 $data['message']="Server Not Responding - Missing parameters";
 $string=json_encode($data);
 echo $string;


}


?>