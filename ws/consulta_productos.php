<?php 

include_once("../includes/conx_pdo.php");

$producto = array();


$sql = "SELECT id, codigo, estado, nombre, stock, medidas, v_lista, v_publicado, media, oferta, val_oferta 
        FROM productos";
$result = $base->prepare($sql);
$result->execute();
while($f = $result->fetch(PDO::FETCH_OBJ)){
    // array_push($phone, array('id' => $f->id, 'phone' => $f->request));
    array_push($producto,array('id' => $f->id, "codigo" => $f->codigo, 'estado' => $f->estado, "nombre" => $f->nombre, 'stock' => $f->stock,
                        "medidas" => $f->medidas, "v_lista" => $f->v_lista, "v_publicado" =>$f->v_publicado, "img" => $f->media, "oferta" => $f->oferta,
                        "val_oferta" => $f->val_oferta));
}


$base = null;
$result->closeCursor();

echo json_encode($producto);


?>