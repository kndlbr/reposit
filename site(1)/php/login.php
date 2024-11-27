<?php  
    require_once('configM.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                  session_start();
                  $_SESSION['auth'] = true;
                  $_SESSION['email'] = $email;
                  echo $_SESSION['email'];
                  Header('Location: ../profile.php');
              }
            }
?>