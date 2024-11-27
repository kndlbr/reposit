<?php  
    require_once('configM.php');

    $datetime = $_POST['datetime'];
    $master = $_POST['master'];
    $id = $_GET['id'];

    $sql = "INSERT INTO `notes`(`user_id`, `datetime`, `master_id`) VALUES ('$id','$datetime','$master')";
    $conn->query($sql);

    Header('Location:../catalog.php');
?>