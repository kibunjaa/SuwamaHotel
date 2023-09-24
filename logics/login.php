<?php
session_start();

//database connection
require_once('C:\xampp\htdocs\Suwama_Web\logics\dbconnection.php');

//setting
if(isset($_POST['submit']))
{
    //fetch form data
    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $email = $_POST['email'];
    $person = $_POST['person'];
    $date = $_POST ['date'];

    $query = "INSERT INTO book  (name, phone, email, person, date)
        VALUES('$name','$phone' ,'$email','$person','$date') ";
        
        if($conn->query($query)==TRUE)
        {
            echo "Table was successfully booked";
        }
        else
        {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        // Close the connection
        $conn->close();
}
?>