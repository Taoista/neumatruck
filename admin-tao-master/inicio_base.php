<?php
    // *
    // * actualiza la base de datos de neumatruck 
    // *

    echo "inciio del proeycto"."<br>";

    include '../includes/conx.php';


    require_once 'modulos/PHPExcel/Classes/PHPExcel.php';
    $archivo = "db.xlsx";
    $inputFileType = PHPExcel_IOFactory::identify($archivo);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($archivo);
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();

    $uno        = array();    //        => codigo
    $dos        = array();    //        => estado
    $tres       = array();    //        => stock
    $cuatro     = array();    //        => v_pulicado
    $seis       = array();    //        => base
    $siete       = array();    //        => base
    // $v_oferta = array();


    for ($row = 1; $row <= $highestRow; $row++){
            array_push($uno,$sheet->getCell("A".$row)->getValue());     // codigo 
            array_push($dos,$sheet->getCell("B".$row)->getValue());     // estado
            array_push($tres,$sheet->getCell("C".$row)->getValue());     // stock
            array_push($cuatro,$sheet->getCell("D".$row)->getValue());     // v_pulicado
            array_push($cinco,$sheet->getCell("E".$row)->getValue());     // base
            array_push($seis,$sheet->getCell("G".$row)->getValue());     // stock
            array_push($siete,$sheet->getCell("H".$row)->getValue());     // stado
    }

    // for ($i=0; $i < count($uno) ; $i++) {

    //     echo $uno[$i]." => ".$dos[$i]." => ".$tres[$i]." => ".$cuatro[$i]."<br>";

    // }
    $p_descuento = 30;
    // el valor V_PUBLICADO es el valor sin IVa EN EL CUAL SE VE EN LA WEB
    for ($i=0; $i < count($uno) ; $i++) {
        $codigo         = $uno[$i];             // => codigo
        $venta_sis      = $tres[$i];
        $stock          = $seis[$i];
        $estado         = $siete[$i];
        $p_venta        = $venta_sis - round($venta_sis * "0.30");

        $insertar = mysql_query("UPDATE productos SET stock = '$stock', v_lista = '$venta_sis', v_publicado = '$p_venta' WHERE codigo = '$codigo' AND oferta = 0") or die(mysql_error());
        mysql_query($insertar);

        // $insertar = mysql_query("UPDATE productos SET stock = '$stock'  WHERE codigo = '$codigo'") or die(mysql_error());
        // mysql_query($insertar);

    }






    echo "termino_producto_base";



?>

