<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Atelier 2</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="container">
	<h1 class="titre"> Atelier PHP - Étape 2</h1>
	<div class="row">
		<div class="col-4">
		</div>
	   <div class="col-6">
	   </div>
  	</div>
	<div class="col-2">
	</div>
</div>

<div class="row">
	<div class="col-3">
	</div>
	   
	<div class="col-6">
	<h3 class="soustitre">Merci de sélectionner les tables que vous voulez consulter:</h3>
	<section class="p-3 mb-2 bg-primary text-white">
                    
		<form method="POST" action="">	
			<div class="row">
				<div class="col-6">		
			<label><input type="checkbox" name="check_0" value="0" class="checkbox" />Table de 0</label>
				</div>
				<div class="col-6">	
			<label><input type="checkbox" name="check_1" value="1" class="checkbox" /> Table de 1</label>
				</div>
				<div class="col-6">		
			<label><input type="checkbox" name="check_2" value="2" class="checkbox" /> Table de 2</label>
				</div>
				<div class="col-6">		
			<label><input type="checkbox" name="check_3" value="3" class="checkbox" /> Table de 3</label>
				</div>
				<div class="col-6">	
			<label><input type="checkbox" name="check_4" value="4" class="checkbox" /> Table de 4</label>
				</div>
				<div class="col-6">	
			<label><input type="checkbox" name="check_5" value="5" class="checkbox" /> Table de 5</label>
				</div>
				<div class="col-6">	
			<label><input type="checkbox" name="check_6" value="6" class="checkbox" /> Table de 6</label>
				</div>
				<div class="col-6">	
			<label><input type="checkbox" name="check_7" value="7" class="checkbox" /> Table de 7</label>
				</div>
				<div class="col-6">	
			<label><input type="checkbox" name="check_8" value="8" class="checkbox" /> Table de 8</label>
				</div>
				<div class="col-6">	
			<label><input type="checkbox" name="check_9" value="9" class="checkbox" /> Table de 9</label>
				</div>
				<div class="col-12">	
			<label><input type="checkbox" name="check_10" value="10" class="checkbox"/> Table de 10</label>
				</div>
			<br>
		<button class="btn btn-secondary" type="submit">voir la table</button>	 
		</form>
	</section>
	
	<div class="col-3">
	</div>


	<div class="row bg-secondary text-white">			 
<?php
for($i =0 ; $i <= 11 ; $i++)
    {
        if(isset($_POST['check_'.$i]))
        {

            $multiplicaton = $_POST['check_'.$i];
            echo "<h2>Table de ".$i."<br>";
            for($o=0; $o<11; $o++)
            {
               echo $multiplicaton."x".$o."=".$multiplicaton*$o."<br>";
            }
        }
        
	}
	?>
  
    </div>

	</diV>
</div>


</body>
</html>