<?php

$servername ="localhost";
$username = "root";
$password="1";
$dbname = "University";

//Create connection
$link = new mysqli($servername, $username, $password, $dbname);


//check connection
if ($link -> connect_error) {
    die('Could not connect: ' . $link->connect_error);
}
else{
	// echo "Connected sucessfully";
}

// //select database
// $link = mysqli_select_db($link, "University");


$sql = "SELECT SId, Fname, Mname,Lname FROM University.Student
WHERE SId=".$_POST['id'];

$result = $link -> query($sql);

if ($result -> num_rows > 0){
	while($row = $result ->fetch_assoc()){
		echo "id: ". $row["SId"]. " -Name: " .
		$row ["Fname"]. " " . $row["Mname"]. " " . $row["Lname"] ."<br>";
	}
} else {
	echo "0 results";
}

$link->close();

?>