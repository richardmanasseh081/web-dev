<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Here you can add code to process the data, e.g., save it to a database
    echo '
        '.$name.'
        '.$email.'
        '.$phone.'
        '.$password.'
    ';

    //connect to the database

    $con = new Mysqli("localhost", "root", "", "webdev_db");

    //inserting the values to the database
    $sql = "INSERT INTO `users` ( `name`, `email`, `phone number`, `password`) VALUES ('$name', '$email', '$phone', '$password')";
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error";
    };
}


?>