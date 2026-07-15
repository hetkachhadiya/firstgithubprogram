<<<<<<< HEAD
<?php

$conn = mysqli_connect("localhost","root","","mydatabase");

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

=======
<?php

$conn = mysqli_connect("localhost","root","","studentdb");

if(!$conn){
    die("Connection Failed");
}

$name = $_POST['name'];
$password = $_POST['password'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$hobby = implode(",", $_POST['hobby']);

$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];

move_uploaded_file($temp,"upload/".$image);

$sql = "INSERT INTO students
(name,password,age,dob,email,gender,hobby,image)
VALUES
('$name','$password','$age','$dob','$email','$gender','$hobby','$image')";

if(mysqli_query($conn,$sql)){
    echo "Data Insert Successfully";
}else{
    echo "Error";
}

mysqli_close($conn);

>>>>>>> 40988b13d1c42bca089be27324ecb37364cef7b3
?>