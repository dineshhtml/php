<?php
include 'db.php';
$id=$_GET['id'];

print_r($_GET);

// exit
$sql="SELECT * FROM batch1 WHERE id=$id";
$result=$db->query($sql);
$dada=$result->fetch_assoc();
// print_r($dada);


?>

<form action="" method="post">
    <input type="text" value="<?php echo $dada['name'];?>" name="name" placeholder="Name">
    <input type="text" value="<?php echo $dada ['email'];?>" name='email' placeholder='Email'>
    <input type="text" value="<?php echo $dada['phone'];?>;" name='phone' placeholder='Phone'>
    <input type="submit" name="submit" value="Submit">

</form>

<?php  
if(isset($_POST['submit'])){

    print_r($_POST);
    extract($_POST);

    $sql ="update batch1 set Name='$name', Email='$email', phone='$phone' where id=$id";

    if($db->query($sql)){
        $msg = "Record updated successfully";
    }else{
        $msg = "ERROR: Could not able to execute $sql.".$db->error;
    }

    header("Location: list.php?msg=$msg");
}

?>
