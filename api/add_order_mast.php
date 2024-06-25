<?php
if(isset($_REQUEST['user_id']) && isset($_REQUEST['table_no']) && isset($_REQUEST['amount'])){

include_once("config.php");
$db = new dbObj();
$con =  $db->getConnstring();
extract($_REQUEST);
$order_no=time();

$date=date('Y-m-d');
$time=date('h:i A');

$result=mysqli_query($con,"select * from ordermast where `order_no`='$order_no'");

if(mysqli_num_rows($result)==0){

 $sql="INSERT INTO `ordermast` (`ID`, `order_no`, `date`, `time`, `table_no`,`amount`,`user_id`) VALUES (NULL, '$order_no', '$date', '$time', '$table_no','$amount','$user_id')";

 
 $rslt=mysqli_query($con,$sql);

 if($rslt){

 $data['status']=true;
 $data['message']="Save Successfully";
 $data['order_no']=$order_no;

 }else{
   
   $data['status']=false;
   $data['message']="Server Not Responding - Database Problem";

 }

 $string=json_encode($data);
 echo $string;
 
}else{

 $data['status']=false;
 $data['message']="Order No is already exist";
 
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