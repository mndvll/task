<?php
    $servername = "www.icmwk.com";// Not sure
    $username = "icuwkcom_mndvll"; //c-panel username _ DB username
    $password = "blQwer0987"; // DB password

    $mysqli = new mysqli($servername,$username,$password,"icuwkcom_task");
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    
    $sql = "SELECT * FROM tasklist";
    $result = $mysqli -> query($sql); 
    

//use mysqli->affected_rows
for ($x = 1; $x <= $mysqli->affected_rows; $x++) {
  $rows[] = $result->fetch_assoc();
}

//this will return a nested array
echo json_encode($rows);

    $mysqli -> close();
    ?>
