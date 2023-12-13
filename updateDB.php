<html>
    <head>
        
    </head>
    <body>
        <?php
$servername = "www.icmwk.com";// Not sure
    $username = "icuwkcom_mndvll"; //c-panel username _ DB username
    $password = "blQwer0987"; // DB password

    $mysqli = new mysqli($servername,$username,$password,"icuwkcom_task");
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
$myArray = $_GET["q"];
$arr = explode(",",$myArray);
$sql = "UPDATE tasklist SET Job = $arr[2], Who = $arr[3], Done = $arr[4] WHERE ID = $arr[0]";
echo $sql;
if ($mysqli->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$mysqli->close();

?>
    </body>
    
</html>