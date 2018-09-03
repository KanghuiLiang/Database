<?php

$servername ="localhost";
$username = "root";
$password="1";
$dbname = "University";  

// $sid = $_POST['id'];
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
	// echo "Connected sucessfully";
}

// //select database
// $link = mysqli_select_db($link, "University");

$sql_insert = "INSERT INTO University.Student"."(fname, mName,Lname,DOB,address,Phone,Major,deptCode)".
"VALUES ('$fname', '$Mname', '$Lname','$Dob','$address','$Phone','$major','$deptcode')"; 

// $result = mysqli_query($link, $sql);

if ($link->query($sql_insert) === TRUE) {
	$last_id = $link ->insert_id;
    echo "New record created successfully<br>";
    echo "id: ". $last_id. " -Name: " .
		$fname. " " . $Mname. " " .$Lname ."<br>";
} else {
    echo "Error: " . $sql_insert . "<br>" . $link->error;
}


// $sql_view = "SELECT SId, Fname, Mname,Lname FROM University.Student
// WHERE SId=".$last_id;

// $if ($link->query($sql_insert) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$link->close();

?>
