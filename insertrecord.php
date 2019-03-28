<?php
// Create the connection variable, referring to the database.

$link = mysqli_connect("localhost", "root", "", "lab_database");
 
// Check for successful connection.

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Create the insertion command, and attempt to execute. Display error if unsuccessful.

$sql = "INSERT INTO staff (FirstName, LastName, Email, Phone, HireDate) VALUES ('Wonkey', 'DonkeyMonster', 'email@email.com', '867-5309', '10-5-1985')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Either way, close the connection.
mysqli_close($link);
?>
