<!DOCTYPE html>
<html>
  <head>
    <?php 
        include "includes/header.php";
    ?>
    <title>Ranking</title>
  </head>
  <body class="text-center">
		<?php 
			include 'verificaLogin.php';	
		?>  
      <?php 
        include "includes/navbar.php";
      ?>
      <div class="board">
       <?php
        include 'includes/connection.php';

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro de conexão: " . $conn->connect_error);
        } 

        $sql = "Select NicUsu, TotPon from Pontuacao left Join usuario using(codusu) order by TotPon";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table'>
                <th>Apelido</th>
                <th>Pontuação</th>
                </tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["NicUsu"]."</td>
                    <td>".$row["TotPon"]."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
      ?>

      </div>
      <?php 
        include "includes/footer.php";
      ?>
  </body>
</html>