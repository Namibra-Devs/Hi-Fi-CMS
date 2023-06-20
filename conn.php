<?php
//DATABASE CONNECTION DETAILS
$dsn = 'mysql:host=localhost;port=3307;dbname=hi-fi-cms';
$username = 'root';
$password = 'charlesbih';

//CREATE A NEW PDO INSTANCE FOR DATABASE CONNECTION
$conn = new PDO($dsn, $username, $password);
