<?php
   // Países
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact us</title>
	 <style media="screen">
	 	* {
	 		box-sizing: border-box;
	 	}
	 	.form-control {
	 		border: solid 1px #dddddd;
			background-color: #eeeeee;
			padding: 5px;
			margin-bottom: 10px;
	 	}
		.form-control input:not([type=checkbox]) {
			display: block;
			height: 40px;
			width: 100%;
			margin-top: 5px;
			padding: 15px;
			font-size: 1em;
			outline: none;
		}
		.form-control select {
			width: 60%;
			height: 40px;
			font-size: 1em;
			outline: none;
		}
		.form-control button {
			background-color: #24c4d4;
			color: #FFFFFF;
			font-size: 1.2em;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
		}
	 </style>
</head>
<body>
  <?php $paises= ["Argentina" , "Venezuela", "Peru" , "Colombia" ,"Ecuador" , "EEUU" , "España" , "Francia", "Italia" , "Marruecos"];?>

   <form method='post' action="confirmation.php">
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo*: </label>
				<input type='text' name='name'>
			</div>

			<div class='form-control'>
				<label for='email' >Email*:</label>
				<input type='text' name='email'>
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario*:</label>
				<input type='text' name='username'>
			</div>

			<div class='form-control'>
				<label for='password'>Contraseña*:</label>
				<input type='password' name='password'>
			</div>

      <div class='form-control' action>
				<label for='pais-de-nacimiento'>Pais de Nacimiento:</label>
				<select class="" name="pais-de-nacimiento" id= "pais-de-nacimiento">
          <?php foreach ($paises as $pais): ?>

            <option value="<?php echo $pais ?>"><?php echo $pais ?></option>

          <?php endforeach; ?>

      </select>

        <?php var_dump($_POST);?>
			</div>

      <div class='form-control'>
        <label for='pasatiempos'>Pasatiempos:</label>
        <br>
        <input type="checkbox" name="pasatiempos[]" value="Deportes">Deporte
        <br>
        <input type="checkbox" name="pasatiempos[]" value="Plaza con amigos">Plaza con amigos
        <br>
        <input type="checkbox" name="pasatiempos[]" value="Bares">Bares
        <br>
        <input type="checkbox" name="pasatiempos[]" value="Codear">Programar
        <br>
        <input type="checkbox" name="pasatiempos[]" value="Cocinar">Cocinar
      </div>



      <?php if (!isset($_GET["versionCorta"])): ?>

      <div class='form-control'>
				<label for='confirmpassword'>Confirmar Contraseña*:</label>
				<input type='confirmpassword' name='confirmpassword'>
			</div>

      <div class='form-control'>
				<label for='telefono'>telefono de contacto:</label>
				<input type='telefono' name='telefono'>
			</div>

      <div class='form-control'>
				<label for='domicilio'>direccion domicilio:</label>
				<input type='domicilio' name='domicilio'>
			</div>

      <?php endif; ?>

			<div class='form-control'>
				<button type="submit">ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
