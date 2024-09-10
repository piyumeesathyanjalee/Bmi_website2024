<?php
session_start();

if (isset($_SESSION["id"]) && isset($_SESSION["user_name"])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
        <a href="logout.php">Logout</a>
    </body>

    </html>

<?php
} else {
    header('Locattion:index.php');
    exit();
}
?>