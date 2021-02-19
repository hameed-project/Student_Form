



<?php
// including the database connection file
include_once 'config.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    //updating the table
    $result = mysqli_query($mysqli, " UPDATE users SET student_name='$student_name', father_name='$father_name', address='$address', gender='$gender',email='$email', mobile='$mobile', age='$age' WHERE id=$id ");

    //redirectig to the display page. In our case, it is index.php
    header('Location: index.php');
}

     ?>      
 <?php

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $student_name = $res['student_name'];
    $father_name = $res['father_name'];
    $address = $res['address'];
    $gender = $res['gender'];
    $email = $res['email'];
    $mobile = $res['mobile'];
    $age = $res['age'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
    <!DOCTYPE HTML>
<html>
<head>
    <title>School Details</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
 
</head>
</head>
 
<body>
        <!-- container -->
        <div class="container">
        <div class="page-header">
            <h1>Update Student Details</h1>
        </div>
        <br/><br/>
        <a href="index.php" class="btn btn-primary" role="button" >Home</a><br/><br/>
   
    <br/>
    
    <form name="form1" method="post" action="edit.php">
    <table class='table table-hover table-responsive table-bordered'>
            <tr> 
                <td>Student Name</td>
                <td><input type="text" name="student_name" class='form-control'  value="<?php echo $student_name; ?>"></td>
            </tr>
            <tr> 
                <td>Father Name</td>
                <td><input type="text" name="father_name" class='form-control' value="<?php echo $father_name; ?>"></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="address" class='form-control' value="<?php echo $address; ?>"></td>
            </tr>
            <tr> 
                <td>Gender</td>
                <td><input type="text" name="gender" class='form-control' value="<?php echo $gender; ?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" class='form-control' value="<?php echo $email; ?>"></td>
            </tr> 
            <tr> 
                <td>Mobile Number</td>
                <td><input type="text" name="mobile" class='form-control' value="<?php echo $mobile; ?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" class='form-control' value="<?php echo $age; ?>"></td>
            </tr>

           
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>