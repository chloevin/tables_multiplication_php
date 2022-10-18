<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atelier 1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>


<body>
    
<div class="container">
	<h1> Atelier PHP - Étape 1</h1>
		<div class="row">
		</div>
		<div class="col-6">
		</div>
		<div class="row">
		<div class="col-3">
		</div>
	   
	<div class="col-6">
	<h3>Merci de sélectionner la table que vous voulez consulter:</h3>

				 
		<form action="" onsubmit="return valider()" method="POST">

   			<section class="p-3 mb-2 bg-primary text-white">
		
			
				<select name="table" class="form-control">
					<option value="0">Table de 0</option>
					<option value="1">Table de 1</option>
					<option value="2">Table de 2</option>
					<option value="3">Table de 3</option>
					<option value="4">Table de 4</option>
					<option value="5">Table de 5</option>
					<option value="6">Table de 6</option>
					<option value="7">Table de 7</option>
					<option value="8">Table de 8</option>
					<option value="9">Table de 9</option>
					<option value="10">Table de 10</option>
				</select>
		<br><br>
			<button class="btn btn-secondary" type="submit">voir la table</button>	
   			</section>
		</form>
           </div>

		   </div>
		   <div class="col-3"></div>
		  
        <div class="row">
		<div class="col-5"></div>
		<div class="col-2"><br><br>
		<div class="backgroundtable">

<?php
if(isset($_POST['table']))
{
    for($i =1 ; $i <= 10 ; $i++)
    {
        echo $i." X ".$_POST['table']." = ".$i*$_POST['table']."<br />";
    }
}
 ?>
       </div>
	   <div class="col-5"></div>
         </div>   
</div>
</body>
</html>