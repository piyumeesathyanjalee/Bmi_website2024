<!DOCTYPE html>
<html>
    <body>
    <?php
    require_once('dbcon.php');
    if(isset($_POST['submit'])) {
        $name=$_POST['name'];
        $gen=$_POST['gender'];
        $dob=$_POST['dob'];
        $age=$_POST['age'];
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $status=$_POST['status'];
        $bmi=$_POST['bmi'];
        $bmi=$weight/($height/100)**2;

        if($bmi < 18.5) {
            $status="Underweight";
        }elseif
        ($bmi > 18.5&&$bmi<=25){
            $status="normal weight";
        }elseif
        ($bmi>25&&$bmi<=30){
            $status="Overweight";
        }else
        {
            $status="Obese";
        }

        $email=$_POST['email'];
        $country=$_POST['country'];
        $comment=$_POST['comment'];

        $sql="insert into student(sid,name,gender,dob,age,height,weight,status,bmi,email,country,comment)
        values(null,'$name','$gen','$dob','$age','$height','$weight','$status','$bmi','$email','$country','$comment')";

        if($conn->query($sql)==True){
            //echo "submitted succussfuly";
            header("Location:display.php");
        }else {
            echo"faild";
        }
    }
    ?>
    </body>
</html>