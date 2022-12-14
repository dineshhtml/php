<form action="" method= "post">
<input type="text" name="name" placeholder="name"><br><br>
<input type="email" name="email" placeholder="email"><br><br>
<input type="text" name="phone" placeholder="phone"><br><br>
<input type="submit" name="submit" value="submit">
</form>

<?php 
include 'db.php';
if(isset($_POST['submit'])){
    extract($_POST);

    $sql = "INSERT INTO `batch1`( `name`, `email`, `phone`) VALUES ('$name','$email','$phone')";

    if($db->query($sql)){
        echo 'insert successfully';
    
    // echo 'success';

}else{
    echo 'insert error';
}

}

?>