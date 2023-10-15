<?php 
    $server = "localhost:3309";
    $username = "root";
    $password = "password";
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
                return 'text-green-500';
            case 'B':
                return 'text-orange-500';
            case 'C':
                return 'text-orange-800';
            case 'D':
                return 'text-pink-500';
            case 'E':
                return 'text-red-500';
            default:
                return 'text-black';
        }
    }

?>