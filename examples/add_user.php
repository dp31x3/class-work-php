<?php 

// Set the values of the parameters
$firstName = $_POST['firstName'];
$surName = $_POST['surName'];
$email = $_POST['email'];
$county = $_POST['county'];

//database connection
$conn = new mysqli('localhost','root', '', 'examples');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName, surName, email, county) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$firstName, $surName, $email, $county);
    $stmt->execute();
    echo "Data submitted successfully, thank you!";
    header('Location: login.php');
    $stmt->close();
    $conn->close();
}
