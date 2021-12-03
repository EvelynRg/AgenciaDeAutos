<?php include ('header.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Acerca de</h1>
			</div>

			<div class="articulo">
				<article>
					<p>NUESTRA VISIÓN</p>
					<br/>
					<p> Nuestro compromiso es ser la compañía más confiable en términos
                        de movilidad y diseño de vehículos inteligentes que ayuden a las personas a transportarse de manera libre y segura. </p>
					<br/>
					<p>DATOS QUE SE RECABAN</p>
					<br/>
					<p>Los datos personales que tratará Ford son: nombre, edad, domicilio, correo electrónico, teléfono (fijo y/o celular), si es usuario de redes sociales, género, gustos y preferencias; así como también,
                        de resultar aplicable, número de serie (VIN, por sus siglas en inglés), modelo, año y color de su vehículo.</p>
                    <br/>
                    <br/>
                    <p>Si ya eres cliente nuestro entra a tu cuenta para recibir descuentos especiales!</p>
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