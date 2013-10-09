<?php
header('Content-Type: text/html; charset=utf-8');
define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "rz");
define("MYSQL_PASS", "rz");
define("MYSQL_DB", "db5");

require("libs/mysql.class.php");
require_once './libs/PHPExcel/IOFactory.php';


$objReader = PHPExcel_IOFactory::createReader('OOCalc');
$objPHPExcel = $objReader->load("productos.ods");

$rowIterator = $objPHPExcel->getActiveSheet()->getRowIterator();

$sheet = $objPHPExcel->getActiveSheet();

$array_data = array();

foreach($rowIterator as $row){
    $rowIndex = $row->getRowIndex ();
    $array_data[$rowIndex] = array('producto_nombre'=>'', 'subcat_nombre'=>'',
    						'precio'=>'', 'imagenes'=>'', 'descripcion'=>'');
     
    $cell = $sheet->getCell('A' . $rowIndex);
    $array_data[$rowIndex]['producto_nombre'] = $cell->getCalculatedValue();

    $cell = $sheet->getCell('B' . $rowIndex);
    $array_data[$rowIndex]['subcat_nombre'] = $cell->getCalculatedValue();

    $cell = $sheet->getCell('C' . $rowIndex);
    $array_data[$rowIndex]['precio'] = $cell->getCalculatedValue();

    $cell = $sheet->getCell('D' . $rowIndex);
    $array_data[$rowIndex]['imagenes'] = $cell->getCalculatedValue();

    $cell = $sheet->getCell('E' . $rowIndex);
    $array_data[$rowIndex]['descripcion'] = $cell->getCalculatedValue();        
}

$db = new MySQL();

foreach($array_data as $array)
{
    $db->insert($array, 'productos');
	print_r($array);
}



