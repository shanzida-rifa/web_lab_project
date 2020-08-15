<html>
<head>
<title>comment</title>
</head>
<body>
<form action="" method="post" id="com">
<label> Name: <br><input type ="text" name="name"><br></label>
<label> Book name, Author name & Comment: <br><textarea cols="35" rows="5" name="mes"></textarea><br></label>
<br>
<input type="submit" name="post" value="Post">
</form>
</body>
</html>

<?php

$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"];

if($post)
{
//WRITE DOWN COMMENTS

$write = fopen("com.txt", "a+");
fwrite($write, "<u><b> $name</b></u><br>$text<br>");
fclose($write);

//display comments

$read = fopen("com.txt", "r+t");
echo "All comments:<br>";

while(!feof($read))
{
echo fread($read, 1024);
}

fclose($read);

}

else
{
//display comments
    $read= fopen("com.txt", "r+t");
    echo "All comments:<br>";

    while(!feof($read))
    {
    echo fread($read, 1024);
    }
fclose($read);
}
?>

