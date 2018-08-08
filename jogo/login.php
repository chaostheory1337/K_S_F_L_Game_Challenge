<!DOCTYPE html>
<html>
  <head>
    <?php 
        include "includes/header.php";
    ?>
    <title>Login</title>
	<script src="dist/js/connection/login.script.js"></script>
  </head>
  <body class="text-center">
      <?php 
        include "includes/navbar.php";
      ?>
	  <div id="divMensagem"></div>
      <div class="board">
         <form id="formLogin">
          <div class="form-group">
            <h1>Login</h1>
            <label>Email</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Digite seu Email" >
          </div>
          <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" id="inputSenha" name="inputSenha" aria-describedby="Help" placeholder="Digite sua Senha">
          </div>
          <button type="submit" class="btn btn-outline-dark">Entrar</button>
		  <button class="btn btn-outline-dark" id="btnRegistrar" type="button">Registrar</button>
        </form>
      </div>
      <?php 
        include "includes/footer.php";
      ?>
  </body>
</html>