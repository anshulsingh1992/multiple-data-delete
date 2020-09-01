<?php

$student_id = $_POST['id'];

$str = implode($student_id, ","); // Convert Array into String

$conn = mysqli_connect("localhost","root","","multiple-data-delete") or die("Connection Failed");

$sql = "DELETE FROM students WHERE id IN ({$str})";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
	echo 0;
}

?>
