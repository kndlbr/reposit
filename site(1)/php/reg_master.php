<?php  
    require_once('configM.php');

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (email, role_id, password, name, lname, phone) VALUES ('$email', '2', '$password', '$name', '$lname', '$phone')";
    $conn -> query($sql);
    Header('Location:../profile.php');
?>