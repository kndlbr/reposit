<?php  
    require_once('configM.php');

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (email, role_id, password, name, lname, phone) VALUES ('$email', '1', '$password', '$name', '$lname', '$phone')";
            if($conn -> query($sql) === TRUE){
                session_start();
                    $_SESSION['auth'] = true;
                    $_SESSION['email'] = $user['email'];
                    Header('Location:profile.php');
            } else {
                echo "Ошибка: ", $conn->error;
            }
?>