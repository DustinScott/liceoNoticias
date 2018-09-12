<?php include 'includes/head.php';
	
	   include 'includes/topbar.php';

	   if(isset($_GET['nivel'])){
		   
	   $nivel = $_GET['nivel'];
	
	   include 'niveles/'.$nivel.'';
	   
	   }else{
		   echo '
		   
		   		<div class="large-12 columns" style="padding:0;">
		   		
			   		<ul class="example-orbit" data-orbit>
  <li>
    <img src="img/preescolar.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Preescolar
    </div>
  </li>
  <li class="active">
    <img src="img/prima.jpg" alt="slide 2" />
    <div class="orbit-caption">
      Primaria
    </div>
  </li>
  <li>
    <img src="img/secu.jpg" alt="slide 3" />
    <div class="orbit-caption">
     Secundaria
    </div>
  </li>
 <li>
    <img src="img/after.jpg" alt="slide 3" />
    <div class="orbit-caption">
     AfterSchool
    </div>
  </li>
</ul>
			   		
		   		
		   
		   		</div>
		   		<hr />
		   		
		   		
		   		<div class="large-5 large-centered columns" style="padding:0;">
		   		
		   		<a class="button secondary" href="?nivel=preescolar.php">PreEscolar</a>
		   		<a class="button secondary" href="?nivel=primaria.php">Primaria</a>
		   		<a class="button secondary" href="?nivel=secundaria.php">Secundaria</a>
		   		<a class="button secondary" href="?nivel=afterschool.php">AfterSchool</a>
		   		
		   		
		   		
		   		</div>';
		   		
	   }
?>





<?php include 'includes/footer.php';?>