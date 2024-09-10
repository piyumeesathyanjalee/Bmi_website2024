<?php
    require_once('dbcon.php');
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $gen=$_POST['gender'];
        $dob=$_POST['dob'];
        $age=$_POST['age'];
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $email=$_POST['email'];

        $sql="insert into student(sid,name,gender,dob,age,height,weight,email)
        Values(null,'$name','$gen','$dob','$age','$height','$weight','$email')";

        if($conn->query($sql) == True) {
            //echo 'Submitted successfully';
            header('Location:bmisample.php');
        } else {
            echo 'Faild';
        }
       
    }
?>