<html>
    <head>
        
    </head>
    <body>
        <?php
$servername = "www.icmwk.com";// Not sure
    $username = "icuwkcom_mndvll"; //c-panel username _ DB username
    $password = "blQwer0987"; // DB password

    $mysqli = new mysqli($servername,$username,$password,"icuwkcom_bird");
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
$myArray = $_GET["q"];
$arr = explode(",",$myArray);
$sql = "UPDATE BTable SET Name = $arr[1], Level = $arr[2], Covid = $arr[3], Nurse = $arr[4], Note = $arr[5] WHERE ID = $arr[0]";
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