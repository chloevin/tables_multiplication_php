<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Atelier 3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <div class="container">
   <h1 class="titre">Bienvenue à l'étape 3</h1>
   <div class="row">
<div class="col-4">
	   </div>
	   <div class="col-6">
</div>
<div class="col-2">
	   </div>
</div>

   <div class="row">
   <div class="col-3"></div>
    <div class="col-6">
    <h3 class="soustitre">Choisissez une ou plusieurs table et résolvez les opérations proposés</h3>
    <section class="p-3 mb-2 bg-primary text-white">
 
    <form method="POST" action="index.php">
        
                
        <div class="row">
				<div class="col-6">		
                    <label><input type="checkbox" name="check[]" value="0" class="checkbox" /> Table de 0</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="1" class="checkbox" /> Table de 1</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="2" class="checkbox" /> Table de 2</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="3" class="checkbox" /> Table de 3</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="4" class="checkbox" /> Table de 4</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="5" class="checkbox" /> Table de 5</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="6" class="checkbox" /> Table de 6</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="7" class="checkbox" /> Table de 7</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="8" class="checkbox" /> Table de 8</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="9" class="checkbox" /> Table de 9</label>
                </div>
				<div class="col-6">	
                    <label><input type="checkbox" name="check[]" value="10" class="checkbox" /> Table de 10</label>
                
                    <br><br>
			<button class="btn btn-secondary" type="submit">Questions</button>
    </form>
    </section>
    
    <div class="col-3"></div>
    </div>
   </div>
        <div class="row ">
        <div class="col-3"></div>
    
    <div class="col-6 bg-secondary text-white">
       
    <form action="elementCheck.php" method="post">
       
        <?php
        if (!empty($_POST) && isset($_POST['check']))
            foreach ($_POST['check'] as $table) :
                ?>
                <h1>Table de
                    <?php echo $table ?>
                </h1>

                <?php
                for ($i = 0; $i < 1; $i++) :
                    $randnumb = rand(0,10);
                    $result = $table * $randnumb;
                    ?>

                    <p>Combien font <?php echo $table?> x <?php echo $randnumb?> ?</p>
                    <input type="text" name="answer[]">
                    <input type="hidden" name="result[]" value="<?= $result ?>">
                    <input type="hidden" name="question[]" value="Combien font <?php echo $table?> x <?php echo $randnumb?> ?">

                <?php endfor ?>
                <br>
                <br><br>
			<button class="btn btn-primary" type="submit">Réponses</button>
			
              
               

            <?php endforeach ?>
                
    </form>
    </div>
    <div class="col-3"></div>
    </div>
    </div>
     </div>
    
</body>
</html>