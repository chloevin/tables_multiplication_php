<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Étape 3</title>
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
            <?php
                $answer = $_POST['answer'];
                $result = $_POST['result'];
                $question = $_POST['question'];

                foreach ($_POST['answer'] as $round => $answer ) {
            ?>
                    <h2>Résultat</h2>
                        <p><?php  echo $question[$round]?></p>
                    <p>votre réponse: <?php echo $answer?> </p>
                    <?php if ($result[$round] == $answer) {
                        echo '<p style="color:green">Bonne réponse !</p>';

                    } else {
                        echo '<p class=" animated infinite flash delay-2s" style="color:red">Mauvaise réponse !</p>';
                        echo '<p class=" animated infinite flash delay-2s" style="color:red">La bonne réponse est: '.$result[$round].'</p>';
                    }
            } ?>
            <a class="btn btn-secondary animated infinite bounce delay-2s" href="index.php" role="button">rejouer</a>
            </section>
            </div>
            <div class="col-3">
	   </div>
</div>
 
</body>
</html>
