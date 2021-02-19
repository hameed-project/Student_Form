<html>
<head>
    <title>Add Data</title>
</head>
 <body>
<?php

//including the database connection file
include_once 'config.php';

if (isset($_POST['Submit'])) {
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['f_age'];

    $result = mysqli_query($mysqli, "INSERT INTO users (`student_name`, `father_name`, `address`, `gender`,         `email`, `mobile`, `age`) VALUES ('$student_name', '$father_name', '$address', '$gender', '$email', '$mobile', '$age')");
    // echo "<font color='green'>Data added successfully.";
    // echo "<br/><a href='index.php'>View Result</a>";
    header('Location: index.php');
}
    ?>
 </body>
</html>