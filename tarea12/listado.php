
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
?>
                     <div class="row bg-primary text-center fw-bold">
                         <div class="col-12 col-sm-2 border border-dark py-2">Nombre</div>
                         <div class="col-12 col-sm-2 border border-dark py-2">apellido</div>
                         <div class="col-12 col-sm-2 border border-dark py-2">edad</div>
                         <div class="col-12 col-sm-4 border border-dark py-2">Email</div>
                         <div class="col-12 col-sm-2 border border-dark py-2">D.N.I</div>
                         </div>
                         <?php for ($i = 0; $i < count($registro); $i++ ) { ?>
                             <div class="row bg-secondary text-center text-white">
                             <div class="col-12 col-sm-2 border border-dark py-1"> <? echo $registro[$i]["nombre"]; ?> </div>
                             <div class="col-12 col-sm-2 border border-dark py-1"> <? echo $registro[$i]["apellido"]; ?> </div>
                             <div class="col-12 col-sm-2 border border-dark py-1"> <? echo $registro[$i]["edad"]; ?>  </div>
                             <div class="col-12 col-sm-4 border border-dark py-1"> <? echo $registro[$i]["Email"]; ?> </div>
                             <div class="col-12 col-sm-2 border border-dark py-1"> <? echo $registro[$i]["D.N.I"]; ?> </div>
                             </div>
                             <?php };?>
