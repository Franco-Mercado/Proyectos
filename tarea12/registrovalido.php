<?php
function login($u,$c) {
    $validoUs = "franco";
    $passValida = md5("1234");
    if ($u == $validoUs && $c == $passValida) {
        setcookie("usuario",$validoUs);
        echo "valido";
        
    
    }
    else
    {
        header("Location: index.php");  
    }
}

?>