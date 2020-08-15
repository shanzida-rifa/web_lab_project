<?php
$username = filter_input(INPUT_POST, 'username');
$starttime = filter_input(INPUT_POST, 'starttime');
if (!empty($username)){	
if (!empty($starttime)){
$host = "localhost";
$dbusername = "root";
$dbstarttime = "";
$dbname = "start";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbstarttime, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO end (username, starttime)
values ('$username','$starttime')";
if ($conn->query($sql)){
echo "Welcome!!!Happy Reading!!!!!! Your Data is recorded Now!!
Please Press the <- key for Entering the home page!! Wishing you Have a wonderful time ahead!";}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "starttime should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>