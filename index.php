<?php
    include "includes/header.php";

$weight = 173;
echo "<br>";
$age= '32';
echo "<br>";
$first = 'Mahougbe';
echo "<br>";
$last = 'HOUFFON';
echo "<br>";
$kg = 'Num';
Function poundsToKG ($kg){
    global $weight, $kg;
return $kg = $weight * (1/2.2);
}
$result = poundsToKG ($kg);
    //write PHP here...
?>

<body>
<h1>Assignment 8</h1>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $first ?>  <?php echo $last ?>!
<p>I am <?php echo $age ?> years old.
I weigh <?php echo $weight ?> pounds, which is <?php echo $result ?>  kg!</p>

</body>
<?php
    include "includes/footer.php";
?>


