<?php include 'includes/head.php';?>

<div class="row">
	<br />
	<div class="large-10 large-centered columns" style="padding-left:0px;">
		<h2 class="mainHT">Liceo Noticias </h2>
		</div>
	<div class="large-10 large-centered columns" id="mainContain">	
		<br />
		
		<div class="large-6 columns" style="padding-left:0px;">
		<label><h4>Elige Area</h4></label>	
		<select id="whatgrade">
		<option value="preescolar">Preescolar</option>
		<option value="primaria">Primaria</option>
		<option value="secundaria">Secundaria</option>
		</select>
		</div>
		
		
		<div class="large-6 columns" style="padding-right:0px;">
			<label><h4>Elige Mes</h4></label>	
			<select id="month">
			
			<option>Enero</option>
			<option>Febrero</option>
			<option>Marzo</option>
			<option>Abril</option>
			<option>Mayo</option>
			<option>Junio</option>
			<option>Julio</option>
			<option>Agosto</option>
			<option>Septiembre</option>
			<option>Octubre</option>
			<option>Noviembre</option>
			<option>Deciembre</option>
			
			</select>
		</div>
		
		<br />
		<br />
		<hr />
		
		<label><h4>Asunto</h4></label>	
		<input type="text" id="Asunto">
		
		<label><h4>Noticia</h4></label>	
		<textarea id="noticia">
		Hello
		</textarea>
		
		<br />
		<br />
		
		
		<input id="newsmaker" class="button tiny secondary radius" type="submit" value="Enviar" />
		
	</div>
</div>

<?php include 'includes/footer.php';
?>

