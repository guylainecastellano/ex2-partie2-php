<?php
$age <=> 18;
$a = 20;
$gender = "homme";
$gender = "femme";
$man = "homme";
$woman = "femme";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex2 partie2 php</title>
</head>
<body>
  <p>
    <?php
    if ($a >= $age){
      echo "Vous êtes un homme et Vous êtes majeur"; $gender == $man;
    }  if ($a < $age){
      echo "Vous êtes un homme et Vous êtes mineur"; $gender == $man;
    } if ($a >= $age){
      echo "Vous êtes un femme et Vous êtes majeur"; $gender == $woman
    } if ($age < 18) {
      echo "Vous êtes un femme et Vous êtes mineur"; $gender == $woman
    }
    ?>
  </p>
</body>
</html>
