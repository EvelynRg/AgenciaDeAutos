<?php include ('header.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Contacto</h1>
			</div>

			<div class="articulo">
				<article>
					<p>Entra a nuestra página web y dinos todas tus dudas por medio de nuestro chat inteligente!</p>
					<br/>
					<p> O síguenos en:  </p>
					<br/>
					<p>Facebook • Twitter • Instagram • YouTube</p>
					<br/>
                    <br/>
                    <p>Agenda tu cita con nosotros! Registrate aquí:</p>
					<br/>
                    <br/>
                    <form action="/action_page.php" method="get">
                        <label for="fname">Nombre</label>
                        <input type="text" id="fname" name="fname"><br><br>
                        <label for="lname">Apellido</label>
                        <input type="text" id="lname" name="lname"><br><br>
                        <label for="correo">Correo electrónico</label>
                        <input type="text" id="correo" name="correo"><br><br>
                        <input type="submit" value="Listo!">
                    </form>
                    <br/><br/>
					
				</article>
			</div>
            <?php include ('sidebar.php');?>
			
		</div>
	</section>
    <?php include ('footer.php');?>
</body>
</html>