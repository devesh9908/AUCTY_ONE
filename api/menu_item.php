<?php
include_once("config.php");
$db = new dbObj();
$con =  $db->getConnstring();

extract($_REQUEST);
$result=mysqli_query($con,"select ID as MID,name,description,image,price from menu_mast");

if(mysqli_num_rows($result)>0){


$data['status']=true;
 $data['message']="request successfully completed";
 
 while($row=mysqli_fetch_assoc($result)){
   $data['data'][]=$row;
 }
 
echo str_replace('\/','/',json_encode($data));
 
}else{

 $data['status']=false;
 $data['message']="Record not found";
 $data['data']=array();
 $string=json_encode($data);
 echo $string;

}


?>