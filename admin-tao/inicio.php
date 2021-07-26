<?php
    include '../includes/conx.php';


    require_once 'modulos/PHPExcel/Classes/PHPExcel.php';
    $archivo = "db.xlsx";
    $inputFileType = PHPExcel_IOFactory::identify($archivo);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($archivo);
    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();

    $uno = array();     //      => codigo
    $dos = array();     //      => estado
    $tres = array();    //     => stock
    $cuatro = array();  //   => v_publicado
    $cinco = array();   //  => v_lista
    // $v_oferta = array();
    for ($row = 1; $row <= $highestRow; $row++){
            array_push($uno,$sheet->getCell("A".$row)->getValue());     // CODIGO 
            array_push($dos,$sheet->getCell("B".$row)->getValue());     // ESTADO
            array_push($tres,$sheet->getCell("C".$row)->getValue());    // STOCK
            array_push($cuatro,$sheet->getCell("D".$row)->getValue());  // V_PUBLICADO
            array_push($cinco,$sheet->getCell("E".$row)->getValue());  // V_LISTA
    }



    // for ($i=0; $i < count($uno) ; $i++) {

    //     echo $uno[$i]." => ".$dos[$i]." => ".$tres[$i]." => ".$cuatro[$i]."<br>";

    // }


    // el valor V_PUBLICADO es el valor sin IVa EN EL CUAL SE VE EN LA WEB

    for ($i=0; $i < count($uno) ; $i++) {
        $codigo = $uno[$i];         // => CODIGO
        $estado = $dos[$i];         // => ESTADO
        $stock = $tres[$i];         // => STOCK
        $valor = $cuatro[$i];       // => V_PUBLICADO
        $lista = $cinco[$i];        // => V_LISTA
        $insertar = mysql_query("UPDATE productos SET estado = '$estado', stock ='$stock', v_lista = '$lista' ,v_publicado = '$valor'  WHERE codigo = '$codigo' AND oferta = 0") or die(mysql_error());
        mysql_query($insertar);

    }







    echo "termino";



?>

