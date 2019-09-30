<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>*****************************</p>
<p>exercice 1</p>
<?php 
$name = "frederic";

echo $name;
?>

<p>*****************************</p>
<p>exercice 2</p>
<?php 
$lastname = "kanni";
$firstname = "frederic";
$age = (int)29; 
echo "<br>";
echo $lastname;
echo $firstname;
echo $age;
?>

<p>*****************************</p>
<p>exercice 3</p>
<?php 
$km = 1;
echo $km;
echo "<br>";
$km =3;
echo $km;
echo "<br>";
$km =125;
echo $km;
echo "<br>";
?>

<p>*****************************</p>
<p>exercice 4</p>
<?php 
$color="red";
$entier=(int)23;
$virgule=(float)25.54;
$condition=(bool)1;


echo $color;
echo "<br>";
echo $entier;
echo "<br>";
echo $virgule;
echo "<br>";
echo $condition;
echo "<br>";
?>

<p>*****************************</p>
<p>exercice 5</p>

<?php 

$entier=(int)null;
echo $entier;
echo "<br>";
$entier=(int)25;
echo $entier;
echo "<br>";
?>
<p>*****************************</p>
<p>exercice 6</p>

<?php 

$name="fred";
echo $name;
echo "<br>";

echo "Bonjour " . $name .  ", comment vas tu ?";
?>

<p>*****************************</p>
<p>exercice 7</p>

<?php 

$lastname = "kanni";
$firstname = "frederic";
$age = (int)29; 
echo "<br>";

echo "Bonjour $lastname $firstname,tu as $age ans";
?>

<p>*****************************</p>
<p>exercice 8</p>

<?php 

$nbr1 = 3 + 4;
$nbr2 = 5 * 20;
$nbr3 = 45 / 5; 
echo "<br>";
echo($nbr1);
echo "<br>";
echo($nbr2);
echo "<br>";
echo($nbr3);
?>

</body>
</html>