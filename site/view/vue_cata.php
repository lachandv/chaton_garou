<!DOCTYPE html>
<?php
include ('../model/mod_cata.php');
?>
<html>
	<head>
		<script type="text/javascript">
			function cata_delete(id)
			{
				document.location.href='../controller/ctrl_cata.php?suppCata='+id;
			}
		</script>
		<title>Catastrophe</title>
	</head>
	<body>
		<form action='../controller/ctrl_cata.php' name='formCatastrophe' method='POST'>
			<label>Longitude : </label><input name='longitude_catastrophe'/>
			<label>Latitude : </label><input name='latitude_catastrophe'/>
			<label>Date : </label><input name='date_catastrophe'/>
			<label>Type : </label>

			<select name='gravite_catastrophe' size='3'>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<select name='libelle_catastrophe' size='3'>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			
			<input type="submit" value="Envoyer"/>
			</br>
			<label>Type : </label>
		</form>
			<?php
				$obj=new Catastrophe();
				$obj->afficher();
			?>
	</body>
</html>