<?php

// Set the values of the parameters
$Nome = $_POST['Nome'];
$apelido = $_POST['surName'];
$email = $_POST['email'];
$telemovel = $_POST['telemovel'];
$linkHome = "index.php";
//database connection
$conn = new mysqli('localhost','root', '', 'taberna');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registo(Nome, apelido, email, telemovel) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Nome, $apelido, $email, $telemovel);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

$message = "Registo feito com sucesso! Aguardamos a sua encomenda, obrigado. Vai voltar a página inicial.";
?>

<script>
  var message = "<?php echo $message?>";
	alert(message);

  window.location.href = "index.php"
</script>