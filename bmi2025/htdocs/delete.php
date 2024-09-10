<!DOCTYPE html>
<header>
    <title>Delete Data</title>
</header>

    <?php
      include('dbcon.php');  
    ?>
<body>
    <?php
        if (!isset($_GET['do']) || $_GET['do'] != 1) {
            switch ($_GET['type']) {
                case 'student':
                    $sql = 'DELETE FROM student WHERE sid = ' .$_GET['id'];
                    $result = $conn->query($sql);
    ?>
        <script type="text/javascript">
            alter("Successfully Deleted.");
            window.location = "display.php";
        </script>
    <?php
        //break;
            }
        }

        header("Location:display.php");
    ?>
   
</body>
</html>