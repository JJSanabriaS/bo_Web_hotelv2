<html>
<body>
impresion dia actual  <?php
echo " " . date("m/d/Y");
echo "   " . date("l"). "<br>";?><br>
Welcome arrival data  <?php echo $_POST["booking-form-arrival-date"]; ?>   <?php echo gettype($_POST["booking-form-arrival-date"]); ?><br>
saida: <?php echo $_POST["booking-form-departure-date"]; ?><br>
<?php
$actual = strtotime(date("m/d/Y"));
$entrada = strtotime($_POST["booking-form-arrival-date"]);
$salida = strtotime($_POST["booking-form-departure-date"]);
$ch=$_POST["booking-form-children"];
$Ad=$_POST["booking-form-adults"];

if($entrada == null || $entrada == "")
{
 echo '<script type="text/javascript">'; echo 'alert("Por favor escoja fecha entrada")'; echo '</script>';
 return false;
}
if($salida == null || $salida == "")
{
 echo '<script type="text/javascript">'; echo 'alert("Por favor escoja fecha salida")'; echo '</script>';
 return false;
}


if($entrada>=$actual){
echo 'tiempo entrada posterior a actial';
echo "<br>";
}
else{
    echo '<script type="text/javascript">'; echo 'alert("Por favor escoja fecha entrada valida posterior a actual")'; echo '</script>';
}
?>
<?php

if($salida>=$actual){
if ($salida>=$entrada){
echo 'tiempo salida posterior a actial';
  echo 'tiempo salida posterior a entrada';

} else { echo '<script type="text/javascript">'; echo 'alert("Por favor escoja fecha salida valida posterior a entrada")'; echo '</script>';}
}
else{
    echo '<script type="text/javascript">'; echo 'alert("Por favor escoja fecha salida valida posterior actual")'; echo '</script>';
}
?>


Adultos: <?php echo $Ad; ?> <?php echo gettype($Ad);?><br>
chicos: <?php echo $ch; ?>
<?php
if($Ad == 0)
{
  if($ch == 0)
  {
   echo '<script type="text/javascript">'; echo 'alert("Por favor escoja un numero de huepedes")'; echo '</script>';
   return false;
     }
}
if($ch == 0)
{
  if($Ad == 0)
  {
   echo '<script type="text/javascript">'; echo 'alert("Por favor escoja un numero de huepedes")'; echo '</script>';
   return false;
  }
}
?>

modificaciones plantilla...inclusion de los scrips pag 33 y onsubmit
</body>
</html>
