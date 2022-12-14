<table 1 border>
    <tr>
        <td>sno</td>
        <td>name</td>
        <td>email</td>
        <td>phone</td>
        <td>Action</td>
    </tr>
    <?php
    include 'db.php';
    $sql="SELECT * FROM batch1";
    $result=$db->query($sql);

    // print_r($result)

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "
            <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[phone]</td>
    <td><a href='edit.php?id=$row[id]'>Edit</a><a href='delete.php?id=#$row[id]'>delete</a></td>
</tr>";
    }
  }

    ?>

</table>
<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>