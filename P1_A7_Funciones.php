
<?php



function imprimirSalto(){
    echo "<br><strong>Impreso desde función</strong><br>";
}


function salto(){
    echo "<br><br>"; 
}




function Titulo($titulo){
    echo"<br><strong>$titulo<strong><br>";
}





function getTitulo($titulo){
    return "<br><strong>$titulo<strong><br>";
}




function getTituloImprimiendo($titulo){
    echo "<br><strong>Impreso desde función<strong><br>";
    return "<br><strong>$titulo<strong><br>";
}




function tituloDefault($titulo = "Titulo por defecto"){
    echo "<br><strong>$titulo<strong><br>";
}




function sumaUno($numeroEntrada){
    $numeroEntrada++;
    echo "$numeroEntrada (impreso desde función sumaUno) <br>";
}



function sumaUnoPorReferencia(& $numeroEntrada){
    $numeroEntrada++;
    echo "$numeroEntrada (impreso desde función sumaUnoPorReferencia) <br>";
}





// function sumaUno($numero){
    function sumaUnoEjercicio(&$numero){
        $numero = $numero + 1;
      
}

  echo "<br>";



?>
