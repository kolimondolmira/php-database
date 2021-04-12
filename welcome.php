<?php

include("connection.php");

$name =$_POST['name'];
$student_id =$_POST['student_id'];
$section =$_POST['section'];
$email =$_POST['email'];
$password =$_POST['password'];

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $student_id;
echo "<br>";
echo $section;
echo "<br>";
echo $email;
echo "<br>";
echo $password;


 $sql ="insert into  data values('','$name', '$student_id', '$section' ,'$email', '$password')";
 
 if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>