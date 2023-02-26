<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $Username = $_POST['uname'];
        $Password = $_POST['psw'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "JyotiPrajapati@123";
    $dbname = "notification";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "select *from admin where AdminId='$Username' and Password='$Password'";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "<h1><center>Login successful</center></h1>";
    }
  
    // close connection
    mysqli_close($con);

?>