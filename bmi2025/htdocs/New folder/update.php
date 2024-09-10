<!DOCTYPE html>
<html>
    <?php
    include('dbcon.php');
    ?>
    <body>
    <?php include('navigation/header3.php');?>
    <?php
        $sql="UPDATE student SET name='Deo' WHERE sid=1";
        if($conn->query($sql)===TRUE) {
            echo "Recode Updated Successfully";

        } else {
            echo "Error updating record: " .$conn->error;
        }
        $conn->close();
    ?>
</body>
    </html>