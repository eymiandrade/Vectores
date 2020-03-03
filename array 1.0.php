<!DOCTYPE html>
<html>
<head>
	<title>Array en php</title>
</head>
<body>
<?php
echo "<br>";
$nombre[0]= 'Lupita';
$nombre[1]='Laura';
$nombre[2]='Fanny';
$nombre[3]='Gilberto';
$nombre[4]='Eduardo';
$nombre[5]='Lizbeth';
$nombre[6]='Adriana';
$nombre[7]='David';
$nombre[8]='Nancy';
$nombre[9]='Cesar';
echo "</br>";

echo "<br>";
$carrera[0]='pymes';
$carrera[1]='manu';
$carrera[2]='ITI';
$carrera[3]='ISA';
$carrera[4]='pymes';
$carrera[5]='manu';
$carrera[6]='ITI';
$carrera[7]='manu';
$carrera[8]='ITI';
$carrera[9]='meca';
echo "</br>";

if ($carrera[3]=='ITI')
 {
	echo "La carrera es ITI";
}

else {
	echo "La carrera no es ITI";
	echo "</br>";
}

?>
</body>
</html>