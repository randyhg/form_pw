<?php 

    require_once("connection.php");

    $name = $_POST["name"];
    $tugas1 = $_POST["tugas1"];
    $tugas2 = $_POST["tugas2"];
    $tugas3 = $_POST["tugas3"];
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];

    $sql = "INSERT INTO nilai (`name`, `tugas1`, `tugas2`, `tugas3`, `uts`, `uas`) VALUES ('$name', '$tugas1', '$tugas2', '$tugas3', '$uts', '$uas')";
    
    mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("Location: ../views/index.php");
?>