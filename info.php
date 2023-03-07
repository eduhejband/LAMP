<?php
$servername = "localhost";
$username = "root";
$password = "***";
$dbname = "lamp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
        die("conexao falhou" . mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
        echo "Lista de Usuarios"."<br>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<br>" . "<br>". "ID->" . $row["id"] . "<br>";
		echo "Nome->" . $row["nome"] . "<br>";
		echo "Idade->" . $row["idade"] . "<br>";

}
	echo "usuarios";
	}else{
		echo "Nothing";
	}
mysqli_close($conn);


?>



