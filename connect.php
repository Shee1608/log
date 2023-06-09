<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        
    }

    // database details
    $host = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "database";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (username, password) VALUES ('$username', '$password')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>