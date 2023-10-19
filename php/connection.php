<?php 
    $server = "";
    $username = "";
    $password = "";
    $database = "";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    function Grade($total) {
        $avg = $total / 5;
        
        if ($avg >= 90) {
            return 'A';
        } elseif ($avg >= 80) {
            return 'B';
        } elseif ($avg >= 70) {
            return 'C';
        } elseif ($avg >= 60) {
            return 'D';
        } else {
            return 'E';
        }
    }

    function Total($result) {
       return $result['tugas1'] + $result['tugas2'] + $result['tugas3'] + $result['uts'] + $result['uas'];
    }

    function GradeColor($grade) {
        switch ($grade) {
            case 'A':
                return 'color: #00FF00;'; 
            case 'B':
                return 'color: #FFA500;'; 
            case 'C':
                return 'color: #FF5722;';
            case 'D':
                return 'color: #FF1493;'; 
            case 'E':
                return 'color: #FF0000;'; 
            default:
                return 'color: #000000;'; 
        }
    }

?>
