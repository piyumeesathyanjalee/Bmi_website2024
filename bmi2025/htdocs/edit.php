<!DOCTYPE html>
<html>
    <header><link rel="stylesheet" href="../css/edit.css"/></header>
    <?php
    include('dbcon.php');
    ?>
    <body>
    <?php include('navigation/header3.php');?>
    <?php
        $sql='SELECT * FROM student WHERE sid='.$_GET['id'];
        $result = $conn->query($sql);

        while ($row=mysqli_fetch_assoc($result)) {
            $z=$row['sid'];
            $a=$row['name'];
            $b=$row['dob'];
            $c=$row['age'];
            $d=$row['height'];
            $e=$row['weight'];
            $f=$row['email'];
            $g=$row['gender'];
            
        }
        $id=$_GET['id'];
        
    ?>
        <table class="updt">
            <caption><h1>Update Form</h1></caption>
            <form method='POST' action="update.php">
                <tr>
                <th></th>
                <td> 
                    <input type="hidden" name="id" value="<?php echo $z; ?>"/>
                </td>
                </tr>

                <tr>
                <th>Name of Citizen</th>
                <td> 
                    <input type="text" name="name" value="<?php echo $a; ?>"/>
                </td>
                </tr>

                <tr>
                <th>Date of Birth</th>
                <td> 
                    <input type="date" name="dob" value="<?php echo $b; ?>"/>
                </td>
                </tr>

                <tr>
                <th>Age</th>
                <td> 
                    <input type="number" name="age" value="<?php echo $c; ?>"/>
                </td>
                </tr>

                <tr>
                <th>Height</th>
                <td> 
                    <input type="number" name="height" value="<?php echo $d; ?>"/>
                </td>
                </tr>

                <tr>
                <th>Weight</th>
                <td> 
                    <input type="number" name="weight" value="<?php echo $e; ?>"/>
                </td>
                </tr>

                <tr>
                <th>email</th>
                <td> 
                    <input type="email" name="email" value="<?php echo $f; ?>"/>
                </td>
                </tr>

                <tr>
                <th>Gender</th>
                <td> 
                    <input type="radio" name="gender" <?php if($g=='M') {echo "checked";} ?> value="M">Male
                    <input type="radio" name="gender" <?php if($g=='F') {echo "checked";} ?> value="F">female
                </td>
                </tr>

                <tr>
                <td> 
                    <input type="submit" name="update" value="update"/>
                </td>
                </tr>



            </form>
        </table>
</body>
    </html>