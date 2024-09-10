<?php
session_start();
include("dbcon.php");

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header('Location: index.php?error=User name is required');
        exit();
    } elseif (empty($pass)) {
        header('Location: index.php?error=Password is required');
        exit();
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = ? AND password = ?");
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if ($row["user_name"] === $uname && $row["password"] === $pass) {
            echo "Logged In";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header('Location: home.php');
            exit();
        } else {
            header('Location: index.php?error=Incorrect User Name or Password');
            exit();
        }
    } else {
        header('Location: index.php?error=Incorrect User Name or Password');
        exit();
    }

    $stmt->close();
} else {
    header('Location: index.php?error=Please fill in all required fields');
    exit();
}

$conn->close();
