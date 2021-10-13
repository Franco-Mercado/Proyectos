<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>listado</title>

</head>

<body>
	<div class="container-fluid">
		<main>
<?php
$registro = array();

$datos1 = array();
$datos1["nombre"] = "Clark";
$datos1["apellido"] = "Kent";
$datos1["edad"] = "34";
$datos1["Email"] = "Clarkent@hotmail.com";
$datos1["D.N.I"] = "23.123.456";

$datos2 = array();
$datos2["nombre"] = "Bruce";
$datos2["apellido"] = "Wayne";
$datos2["edad"] = "37";
$datos2["Email"] = "Batman@hotmail.com";
$datos2["D.N.I"] = "23.124.656";

$datos3 = array();
$datos3["nombre"] = "Carlos";
$datos3["apellido"] = "Tevez";
$datos3["edad"] = "48";
$datos3["Email"] = "Tevez@hotmail.com";
$datos3["D.N.I"] = "17.122.000";

$datos4 = array();
$datos4["nombre"] = "juan";
$datos4["apellido"] = "Carlos";
$datos4["edad"] = "58";
$datos4["Email"] = "HolaJuancarlos@hotmail.com";
$datos4["D.N.I"] = "13.233.999";

$datos5 = array();
$datos5["nombre"] = "Riqui";
$datos5["apellido"] = "Ricon";
$datos5["edad"] = "23";
$datos5["Email"] = "Ricachon@hotmail.com";
$datos5["D.N.I"] = "34.194.384";

$registro[0] = $datos1;
$registro[1] = $datos2;
$registro[2] = $datos3;
$registro[3] = $datos4;
$registro[4] = $datos5;

echo "<div class=\"row bg-primary text-center fw-bold\">";
echo "<div class=\"col-12 col-sm-2 border border-dark py-2\">Nombre</div>";
echo "<div class=\"col-12 col-sm-2 border border-dark py-2\">apellido</div>";
echo "<div class=\"col-12 col-sm-2 border border-dark py-2\">edad</div>";
echo "<div class=\"col-12 col-sm-4 border border-dark py-2\">Email</div>";
echo "<div class=\"col-12 col-sm-2 border border-dark py-2\">D.N.I</div>";
echo "</div>";
for ($i = 0; $i < count($registro); $i++) {
    echo "<div class=\"row bg-secondary text-center text-white\">";
    echo "<div class=\"col-12 col-sm-2 border border-dark py-1\">".$registro[$i]["nombre"]."</div>";
    echo "<div class=\"col-12 col-sm-2 border border-dark py-1\">".$registro[$i]["apellido"]."</div>";
    echo "<div class=\"col-12 col-sm-2 border border-dark py-1\">".$registro[$i]["edad"]."</div>";
    echo "<div class=\"col-12 col-sm-4 border border-dark py-1\">".$registro[$i]["Email"]."</div>";
    echo "<div class=\"col-12 col-sm-2 border border-dark py-1\">".$registro[$i]["D.N.I"]."</div>";
    echo "</div>";
}
?>
        </main>
        <footer>

        </footer>
	</div>
</body>

</html>