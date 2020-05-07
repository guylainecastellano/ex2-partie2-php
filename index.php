<?php
$age = 18;
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex2 partie2 php</title>
</head>
<body>
  <?php
  //|| double paip
  if ($age > 0 && $age <120){
    if ($age >= 18 && $gender == 'homme'){
      ?>
      <p>Vous êtes un homme et Vous êtes majeur</p>
    <?php }  elseif ($age < 18 && $gender =='homme'){ ?>
      <p>Vous êtes un homme et Vous êtes mineur</p>
    <?php } elseif ($age >= 18 && $gender =='femme'){ ?>
      <p>Vous êtes un femme et Vous êtes majeure"</p>
    <?php } elseif ($age < 18 && $gender =='femme') { ?>
      <p>Vous êtes un femme et Vous êtes mineure</p>
    <?php } else { ?>
      <p>vous avez fait une erreur dans le genre</p>
    <?php }
  } elseif ($gender != 'femme' && $gender != 'homme'){ ?>    //!= différent de
    <p>vous avez fait une erreur dans l\age et dans le genre</p>
  <?php }else{ ?>
    <p>vous avez fait une erreur dans l'age</p>
  <?php } ?>
</body>
</html>
