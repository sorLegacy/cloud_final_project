<?php


$conn = mysqli_connect('db', 'Ahmed', 'legacy563', 'student_data');

if(!$conn){
    die("Connection failed " . mysqli_connect_error());
} 