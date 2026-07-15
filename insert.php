<?php
include "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // hobby array → string
    $hobby = isset($_POST['hobby']) ? implode(",", $_POST['hobby']) : "";

    // IMAGE
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    // unique name
    $new_name = time() . "_" . $img_name;

    $folder = "uploads/" . $new_name;

    move_uploaded_file($tmp_name, $folder);

    // INSERT ALL DATA
    $sql = "INSERT INTO student_db(name,password,age,dob,email,gender,hobby,img)
            VALUES('$name','$password','$age','$dob','$email','$gender','$hobby','$new_name')";

    mysqli_query($conn, $sql);

    header("Location: view.php");
}
?>