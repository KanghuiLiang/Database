<?php

$servername ="localhost";
$username = "root";
$password="1";
$dbname = "University";  

$sid = $_POST['id'];
$fname= $_POST['First'];
$Mname = $_POST['Middle'];
$Lname = $_POST['Last'];
$Dob = $_POST['DOB'];
$address = $_POST['Address'];
$Phone = $_POST['Phone'];
$major = $_POST['Major'];
$deptcode = $_POST['Code'];



//Create connection
$link = new mysqli($servername, $username, $password, $dbname);


//check connection
if ($link -> connect_error) {
    die('Could not connect: ' . $link->connect_error);
}
else{
	echo "Connected sucessfully";
}

// //select database
// $link = mysqli_select_db($link, "University");

$sql_insert = "INSERT INTO University.Student"."(sid, fname, mName,Lname,DOB,address,Phone,Major,deptCode)".
"VALUES ('$sid', '$fname', '$Mname', '$Lname','$Dob','$address','$Phone','$major','$deptcode')"; 

// $result = mysqli_query($link, $sql);

if ($link->query($sql_insert) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql_insert . "<br>" . $link->error;
}


// $sql_view = "SELECT SId, Fname, Mname,Lname FROM University.Student
// WHERE SId=".$_POST['id'];

// $result = $link -> query($sql_view);

// if ($result -> num_rows > 0){
// 	while($row = $result ->fetch_assoc()){
// 		echo "id: ". $row["SId"]. " -Name: " .
// 		$row ["Fname"]. " " . $row["Mname"]. " " . $row["Lname"] ."<br>";
// 	}
// } else {
// 	echo "0 results";
// }

$link->close();

include_once ('view_students.php');

?>
