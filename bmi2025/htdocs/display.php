<?php
    include('dbcon.php');
?>

<html>
    <header><link rel="stylesheet" href="../css/styless.css"/></header>
<body>
    <?php include('navigation/header3.php');?>
    <br><br>
    <a href="bmi.php" type="button" id="add">ADD NEW</a>
    <br><br><br><br>
<table class="heed" border="1">
    <thead class="hed">
        <tr>
        <th>name</th>
        <th>gender</th>
        <th>dob</th>
        <th>age</th>
        <th>height</th>
        <th>weight</th>
        <th>bmi</th>
        <th>status</th>
        <th>email</th>
        <th>country</th>
        <th>comment</th>
        <th></th>
        </tr>
    </thead>
<tbody>
<?php
    $sql="select *from student";
    $result=$conn->query($sql) or die("connection faild:".$conn->connect_error);
    //echo"Okay";
    while ($row=mysqli_fetch_assoc($result)){
            echo'<tr>';
            echo'<td>'.$row['name'].'</td>';
            echo'<td>'.$row['gender'].'</td>';
            echo'<td>'.$row['dob'].'</td>';
            echo'<td>'.$row['age'].'</td>';
            echo'<td>'.$row['height'].'</td>';
            echo'<td>'.$row['weight'].'</td>';
            echo'<td>'.$row['bmi'].'</td>';
            echo'<td>'.$row['status'].'</td>';
            echo'<td>'.$row['email'].'</td>';
            echo'<td>'.$row['country'].'</td>';
            echo'<td>'.$row['comment'].'</td>';
            echo'<td><a type"button" id="edit" href="edit.php?action=edit&id='.$row['sid'].'">EDIT</a>';
            echo'&nbsp;&nbsp;';
            echo ' <a type="button" id="del" href="delete.php? type=student&delete & id='.$row['sid']. '">DELETE</a></td>';
            echo'</tr>';

            }
?>
</tbody>
</table>
</body>
</html>