<?php
// Assuming you have a database connection established

// Replace the following with your database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "scheduling";

// Create a new mysqli connection
$connection = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the username and new password from the form
  $username = $_POST["username"];
  $newPassword = $_POST["newPassword"];

  // Query the member table to check if the username exists
  $query = "SELECT username FROM member WHERE username = '$username'";
  $result = $connection->query($query);

  if ($result->num_rows > 0) {
    // Username exists in the member table

    // Update the member table with the new password
   
    $updateQuery = "UPDATE member SET password = '$newPassword' WHERE username = '$username'";
    $connection->query($updateQuery);

    // Redirect to a success page
   

   { echo "<script type='text/javascript'>document.location='index.php'</script>";
}
  } else {
    // Username does not exist in the member table
    echo "Username not found.";
  }
}

// Close the database connection
$connection->close();
?>
