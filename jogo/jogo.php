<!DOCTYPE html>
<html>
	<head>
		<?php 
			include "includes/header.php";
		?>
		<title>Jogo</title>
		<link rel="stylesheet" href="dist/css/jogo.css"/>
		<script src="dist/js/motor.js"></script>
	</head>
	<body>
		<?php 
			$nmpage = 'GM';
			include 'verificaLogin.php';	
			include "includes/navbar.php";
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body" id='lvl'>...</div>
						
					</div>
					<button id="btn" onclick="iniciar()">INICIAR</button>
					<div id='batata'>
						<h3 class="text" id="text1">...</h3>
						<h3 class="text" id="text2">...</h3>
						<h3 class="text" id="text3">...</h3>
					</div>		
					<h2 id='status'>....</h2>					
				</div>
				<div class="col-lg-8">
					<div class="tabuleiro">
						<?php
							$k =  1;
							for($i = 1;$i <= 3;$i++){
								echo "<div class='row'>";
									for($j = 1;$j <= 3;$j++){
										echo "<div class='col-lg-4'>
												<div class='btn quadrado".$k."' id='azul' onclick='apertou(".$k.")' ></div>
											  </div>";
										$k++;										
									}
								echo "</div>";
							}
						?>
						
				</div>
			</div>			
		</div>
		<audio id="do" src="dist/audio/do.wav"></audio>
		<audio id="fa" src="dist/audio/fa.wav"></audio>
		<audio id="la" src="dist/audio/la.wav"></audio>
		<audio id="mi" src="dist/audio/mi.wav"></audio>
		<audio id='audio2' src="dist/audio/errou.mp3"></audio>
		<audio id='audio'>
			<source src="audio/som.mp3" type="dist/audio/mp3" >
			<source src="audio/som.mp3" type="dist/audio/mp3" >
		</audio>			
		<?php 
			include "includes/footer.php";
		?>    	
	</body>
</html>
