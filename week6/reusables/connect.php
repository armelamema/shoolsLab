<?php 
        $connect = mysqli_connect(
          'localhost', 
          'root', 
          'root', //writye your password
          'publicschool' // write your database name
        );

        if(!$connect){
          echo "Connection Failed: " . mysqli_connect_error();
        }

        $query  = 'SELECT * FROM schools';
        $schools = mysqli_query($connect, $query);