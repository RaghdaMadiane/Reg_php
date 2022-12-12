<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "system_users";

$errors = array();

$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
if (isset($_POST['reg_btn'])) {
    if (empty($_POST['username'])) {
        array_push($errors, "username is required");
      

    }
    if (empty($_POST['password'])) {
        
        array_push($errors, "password is required");
    }
    if (empty($_POST['email'])) {
    
        array_push($errors, "email is required");
    }
    $stmt = $db->prepare("select id,email FROM users WHERE email=? or username=?");
    $stmt->bind_param("ss", $_POST["email"], $_POST["username"]);
    $stmt->execute();

    $stmt->bind_result($_POST['email'], $_POST['username']);
    $stmt->store_result();



    if ($stmt->fetch() > 0) {
        $res = $stmt->fetch();
        array_push($errors, "email already exists,try again");
        $error_msg = 'email or username already exists,try again';
    } else {
        if (count($errors) == 0) {
            // send data to database
            if ($stmt = $db->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)")) {
                $password = md5($_POST['password']);
                $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
                $stmt->execute();
                $success = true;
                echo 'successufly registered';
            } else {
                $error_msg = 'An error occurred and your account was not created.';
                echo 'error occured';
            }
        } else {
            $error_msg = 'please fill the required fields';
        }
    }
    $stmt->close();
}
if (isset($_POST["login"])) {

    if (empty($_POST['password'])) {

        array_push($errors, "password is required");
    }
    if (empty($_POST['email'])) {

        array_push($errors, "email is required");
    }
    if (count($errors) == 0) {
        $password = md5($_POST['password']);

        $email = $_POST['email'];
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            echo  $_SESSION;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION["login"] == true;
            header('location: index.php');
        } else {
            $_SESSION["errorMessage"] = "<span class='error'>Wrong username/password combination,tryagain</span>";
            array_push($errors, "Wrong username/password combination");
        }
    }
}

// $db->close();
