<?php 

// Set the values of the parameters
$password = $_POST['password'];
$email = $_POST['email'];



//database connection
$conn = new mysqli('localhost','recipe-user', 'ELr[O_hFYijl1XMk', 'user');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("select * from users where email=? and password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result= $stmt->get_result();
    if ($result->num_rows) 
    {
    echo "Login successfully, thank you!";  
}
else{
echo "Login failed, try again!";
echo "<br>";
echo "<a href='login.php'>Login</a>";
echo "<br>";
echo "<a href='registration.php'>Registration</a>";
}
    $stmt->close();
    $conn->close();
}
