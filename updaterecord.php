<?php
// Create the connection variable, referring to the database.

$link = mysqli_connect("localhost", "root", "", "lab_database");
 
// Check for successful connection.

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Create the insertion command, and attempt to execute. Display error if unsuccessful.

$sql = "UPDATE staff SET FirstName='Jimbo', LastName='Jefferies', Email='jimbojohnycakes@email.com' WHERE FirstName='Wonkey'";
if(mysqli_query($link, $sql)){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Either way, close the connection.
mysqli_close($link);
?>
