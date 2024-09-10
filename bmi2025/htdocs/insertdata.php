<?php
    require_once('dbcon.php');
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $gen=$_POST['gender'];

        $sql="insert into citizen(sid,name,gender)
        Values(null,'$name','$gen')";

        if($conn->query($sql) == True) {
            //echo 'Submitted successfully';
            header('Location:sample.php');
        } else {
            echo 'Faild';
        }
       
    }
?>