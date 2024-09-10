<!DOCTYPE html>
<header>
    <title>Update Data</title>
    <header><link rel="stylesheet" href="../css/styleupdt.css"/></header>
</header>
<body>
    <?php
        $x = $_POST['id'];
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        include('dbcon.php');

        $query = 'UPDATE student set name ="'.$name.'",
        dob = "'.$dob.'",
        age = '.$age.',
        height = '.$height.',
        weight = '.$weight.',
        email = "'.$email.'",
        gender = "'.$gender.'"
        WHERE sid = "'.$x.'"';
        $result = $conn->query($query);

      
        header("Location:display.php");
      
    ?>
</body>
</html>