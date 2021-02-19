<?php

//including the database connection file
include_once 'config.php';

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, 'SELECT * FROM users ORDER BY id DESC'); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
     <!-- Latest compiled and minified Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
 
<body>
<div class="container">
<div class="page-header">
            <h1>Student Details</h1>
        </div>
   <br>
    
    <a href="add.html" class="btn btn-primary" role="button" >Add New Data</a><br/><br/>
 
    <table class='table '>
        <tr bgcolor="#c9d6df">
            <td>Student Name</td>
            <td>Father Name</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Mob Number</td>
            <td>Age</td>
            <td>Operations</td>
            
            
        </tr>
       
        <?php
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
        while ($res = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>'.$res['student_name'].'</td>';
            echo '<td>'.$res['father_name'].'</td>';
            echo '<td>'.$res['address'].'</td>';
            echo '<td>'.$res['gender'].'</td>';
            echo '<td>'.$res['email'].'</td>';
            echo '<td>'.$res['mobile'].'</td>';
            echo '<td>'.$res['age'].'</td>';

            echo "<td> <a href=\" edit.php?id=$res[id] \"> Edit </a> | <a href=\" delete.php?id=$res[id] \" onClick=\" return confirm('Are you sure you want to delete?') \"> Delete </a></td>";
        }
        ?>

    </table>
    </div>
</body>
</html>