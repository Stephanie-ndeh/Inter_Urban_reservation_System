<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "intreurban";

 $conn =mysqli_connect($servername,$username,$password,$db);
    if (!$conn){
        echo 'failed';
    }
 ?>