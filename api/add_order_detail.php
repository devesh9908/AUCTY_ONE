<?php
if(isset($_REQUEST['order_no']) && isset($_REQUEST['MID']) && isset($_REQUEST['qty']) && isset($_REQUEST['rate']) && isset($_REQUEST['amount'])){

include_once("config.php");
$db = new dbObj();
$con =  $db->getConnstring();
extract($_REQUEST);


$sql="INSERT INTO `orderdetail` (`ID`, `orderno`, `MID`, `qty`, `rate`,`amount`) VALUES (NULL, '$order_no', '$MID', '$qty', '$rate','$amount')";

 
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
 $data['message']="Server Not Responding - Missing parameters";
 $string=json_encode($data);
 echo $string;


}


?>