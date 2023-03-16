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

// Set the value of a PHP variable
$message = "Registo feito com sucesso!";
?>

<!-- Use PHP to generate dynamic JavaScript code -->
<script>
	var message = "<?php echo $message?>";
	alert(message);
</script>

<script>
function goToLink() {
  var message = "Vai voltar a pagina incial, esperamos a sua encomenda.";
  alert(message);
  window.location.href = "index.php";
}
</script>

<button onclick="goToLink()">Página inical</button>