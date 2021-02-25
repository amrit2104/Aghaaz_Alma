<?php 

//echo "Name is $a <br> Email is $b <br> Roll No. is $c <br> Team chosen $d ";

$servername = "166.62.8.2";
$username = "alma18int";
$password = "teamAlma@18";
$dbname = "alma18int";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO inductions18 (name, Email, Roll, Team1, Team2, phone, why_teams, why_alma, EAA) VALUES (?, ?, ?, ?, ?, ?,?,?,? )");
$stmt->bind_param("sssssssss", $a, $b, $c, $d, $e, $f, $g ,$h, $i);

$a=htmlentities($_POST['name']);
$b=htmlentities($_POST['Email']);
$c=htmlentities($_POST['Roll']);
$d=htmlentities($_POST['Team1']);
$e=htmlentities($_POST['Team2']);
$f=htmlentities($_POST['phone']);
$g=htmlentities($_POST['why_teams']);
$h=htmlentities($_POST['why_alma']);
$i=htmlentities($_POST['EAA']);

$stmt->execute();

$stmt->close();
/*if($conn->query($sql)===TRUE){
	echo "new user registered";
}
else{
	 echo "Error: " . $sql . "<br>" . $conn->error;
}*/



echo "Hi! "; echo $a;
echo " You have been succesfully registered!";

mysqli_close($conn);
?>