<?php
    $server = "localhost";                    //server
    $user = "root";                           //user
    $password = "";                         
    $db = "movie";                              //database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connection to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('Heaven' , 'Eric Roberts' , 'Marta Gil' , 'Angus Benfield' , 2020),('ABCD' , 'Prabhu Deva' , 'Lauren Gottlieb' , 'Remo D'Souza' , 2013),('dangal' , 'Aamir Khan' , 'Sakshi Tanwar' , 'Nitesh Tiwari' , 2016),('Dhoom 3' , 'abhishek' , 'katrina' , ' Vijay Krishna Acharya' , 2013),('The Terminator' , 'Michael Biehn' , 'Linda Hamilton' , 'James Cameron' , 1984);       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movies added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>
