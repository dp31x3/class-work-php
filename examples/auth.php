<?php
session_start();

require_once './src/DatabaseConnection.php';

if(isset($_POST(['email']) && isset($_POST['password']))) {
    $connection = (new\app\DatabaseConnection())->getConnection();

    $stmt = $connection->prepare(query:"select * from user where ('email') = ? && ('password') = ?");
    $stmt->bind_param(types:'ss', $_POST['email'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_results();

    if (result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user['email'];
        header(header: 'Location: index.php');
        exit();
    }
}