<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Étape 4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h1 class="titre">Atelier 4</h1>

<div class="row">
<div class="col-4">
	   </div>
	   <div class="col-6">
</div>
<div class="col-2">
	   </div>
</div>

<div class="row">
	   <div class="col-3">
	   </div>
	   
	             <div class="col-6">
                 <h2 class="soustitre">Choisissez une table et résolvez les opérations proposés </h2>
    <form method="POST" action="index.php">
    <section class="p-3 mb-2 bg-primary text-white">


        <div class="row">
				<div class="col-6">	                
                    <label><input type="radio" name="check[]" value="0" class="radio" /> Table de 0</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="1" class="radio" /> Table de 1</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="2" class="radio" /> Table de 2</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="3" class="radio" /> Table de 3</label>
                 </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="4" class="radio" /> Table de 4</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="5" class="radio" /> Table de 5</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="6" class="radio" /> Table de 6</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="7" class="radio" /> Table de 7</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="8" class="radio" /> Table de 8</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="9" class="radio" /> Table de 9</label>
                </div>
				<div class="col-6">	
                    <label><input type="radio" name="check[]" value="10" class="radio" /> Table de 10</label>
             
                
                    <br><br>
			<button class="btn btn-secondary" type="submit">voir la table</button>
</div>
            
            
        </section>
    </form>
 </div>
		   <div class="col-3"></div>

</div>
<div class="row">
<div class="col-3"></div>
<div class="col-6">
<div class="p-3 mb-2 bg-secondary text-white">
 
    <form action="elementCheck.php" method="post">
    
       <div class="row">
       <div class="col-9">
        <?php
        if (!empty($_POST) && isset($_POST['check']))
            foreach ($_POST['check'] as $table) :
                ?>
                <h1>Table de
                    <?php echo $table ?>
                </h1>

                <?php
                for ($i = 0; $i < 5; $i++) :
                    $randnumb = rand(0,10);
                    $result = $table * $randnumb;
                    ?>

                    <p>Combien font <?php echo $table?> x <?php echo $randnumb?> ?</p>
                    <input type="text" name="answer[]">
                    <input type="hidden" name="result[]" value="<?= $result ?>">
                    <input type="hidden" name="question[]" value="Combien font <?php echo $table?> x <?php echo $randnumb?> ?">

                <?php endfor ?>
                </div>
                <div class="3"><br><br><br><br><br><br><br><br><br>
                <button class="btn btn-primary" type="submit" id="validmultiple">valider</button>
                </div>
            </div>
                
            <?php endforeach ?>
               
        </section>
    </form>
             </div>
    </div>
    <div class="col-3"></div>
       <div>
</div>

</body>
</html>