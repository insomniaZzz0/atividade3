<?php
     
     $servidor="localhost";
     $usuario="escola";
     $senha="123";
     $nomedodb="escola";

     $conn=new mysqli($servidor, $usuario, $senha, $nomedodb);

     if ($conn->connect_error){
         die("Conexâo Falhou".$conn->connect_error);
    }

    echo"Agenda"."<br>";

    $sql = "SELECT * FROM agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Nome: " . $row["nome"]. " - Telefone: " . $row["telefone"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>