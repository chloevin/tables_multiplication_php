<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Étape 4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1 class="text-center animated infinite swing delay-60s">Corrections et scores</h1>
<div class="row">
<div class="col-3">
	   </div>


    <div class="col-6">
    
<section class="p-3 mb-2 bg-primary text-white text-center">
<form>   
<?php
            //attribution de valeurs à mes variables
            $score = 0;
            $scoreMax = 0;
            $answer = $_POST['answer'];
            $result = $_POST['result'];
            $question = $_POST['question'];

            // pour chaque reponse, je stock dans round son index et dans answer sa valeur
            foreach ($_POST['answer'] as $round => $answer ) {
            //J'ajoutes 1 à la variable scoreMax
                $scoreMax++;
        ?>
            <!--J'affiche le numéro de la question avec la variable scoreMax-->
                <h2>Question<?php echo $scoreMax ?>:</h2>
            <!--J'affiche la multiplication posé-->
                    <p><?php  echo $question[$round]?></p>
            <!--Jaffiche la réponse donné par le visiteur-->
                <p>votre réponse: <?php echo $answer?> </p>
            <!--Si le résultat attendu correspond à la réponse proposé-->
                <?php if ($result[$round] == $answer) {
            //J'affiche un message positif 
                    echo '<p style="color:green">Bonne réponse !</p><hr>';
//                </div>
            //J'ajoutes 1 à la variable score
                    $score++;
            //Sinon
                } else {
            //J'affiche un message négatif et la réponse qui etait attendue
                    echo '<p class=" animated infinite flash delay-2s" style="color:red">Mauvaise réponse !</p>';
                    echo '<p class=" animated infinite flash delay-2s" style="color:red">La bonne réponse est: '.$result[$round].'</p><hr>'; 
                }    
            } ?><!-- J'affiche le score final + le scoreMax-->
        <h1>Score final : <?php echo $score ?> / <?php echo $scoreMax ?></h1>
</form>
<a class="btn btn-secondary animated infinite bounce delay-2s" href="index.php" role="button">rejouer</a>
</section>
</div>
<div class="col-3">
	   </div>
</div>
</div>
</body>
</html>
