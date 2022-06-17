<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('harry' , 'daniel' , 'emma' , 'chris' , 2001),('twilight' , 'robert' , 'kristen' , 'chrisss' , 2002),('bangalore days' , 'dulquer' , 'nazriya' , 'neel' , 2022),('ok kanmani' , 'dulquer' , 'nithya' , 'robert' , 2012),('saho' , 'prabhas' , 'shraddha' , 'nelson' , 2020);       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movies added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>
