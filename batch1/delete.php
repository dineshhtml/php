<?php 

include 'db.php';

$id= $_GET['id'];

$sql = "delete from crud where id=$id";

if($db->query($_sql)){
    $msg ="Record deleted successfully";
}else{
    $msg = "ERROR: could not able to execute $sql. " . $db->error;

}
header("Location:list.php? msg=$msg");
?>