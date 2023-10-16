<?php 
    $server = "localhost";
    $username = "root";
    $password = "123456";
    $database = "form_nilai";

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
                return 'color: #00FF00;'; // Green
            case 'B':
                return 'color: #FFA500;'; // Orange
            case 'C':
                return 'color: #FF5722;'; // A different shade of orange
            case 'D':
                return 'color: #FF1493;'; // Pink
            case 'E':
                return 'color: #FF0000;'; // Red
            default:
                return 'color: #000000;'; // Black
        }
    }

?>