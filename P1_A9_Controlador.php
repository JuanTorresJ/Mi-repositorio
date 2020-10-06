 <?php

include_once('P1_A9_Usuario.php');

// $mUsuario = new Usuario();
// $mUsuario->nombre = "Rosa";
// $mUsuario->edad = 20;
// $mUsuario->save();
// echo var_dump($mUsuario);


// $mUsuarioCargado = Usuario::buscaUsuario($id);
// $mUsuarioCargado = Usuario::buscarUsuario(2);

// echo var_dump($mUsuarioCargado);



// $mUsuario=Usuario::all();



// //Cargamos el usuario
// //$mUsuarioCargado = Usuario::buscarUsuario(3);
// //$mUsuarioCargado->delete();

// //Consultamos todos para ver si se borro
// $mUsuarios=Usuario::all();


// // 
// $mUsuarioCargado = Usuario::buscarUsuario(2);
// //Con este validamos si contiene algo
// if (isset($mUsuarioCargado)) {
// 	$mUsuarioCargado->nombre = "Alicia";
// 	$mUsuarioCargado->edad = 22;
// 	$mUsuarioCargado-> save();
// }
// //Cone ste no validamos si contiene algo
// //$mUsuarioCargado->edad = 22;
// //$mUsuarioCargado-> save();

$mUsuarios = Usuario :: all();

//Ojo con el var_dump, nos ayuda a comprobar las funciones que realizamos
//echo var_dump($mUsuarios);