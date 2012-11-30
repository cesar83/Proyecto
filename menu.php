<?php
/** data.menu__.base.php  Principal    ( data_form )
 * 
 * @author 	ycube RAD Plus ( automatically Generated ) 
 * 
 */ 

$Obj->alias = "sistemaTrabajo";
$Obj->doc = "Principal";
$Obj->help = "Principal menu";
$Obj->Add(
    array(
        F_NAME_ => "ModuloStock",
        F_ALIAS_ => "Modulo Stock",
        F_HELP_ => "Modulo Stock",
        F_TYPE_ => "header",
        R_TABLE_ => "",
        F_OPER_ => "1_ Browse",
        F_LINK_ => "",
        F_FILTER_ => "",
        G_SHOW_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "Productos",
        F_ALIAS_ => "Productos",
        F_HELP_ => "Productos",
        F_TYPE_ => "menu",
        R_TABLE_ => "ModuloStock",
        F_OPER_ => "1_ Browse",
        F_LINK_ => "db.Articulos",
        F_FILTER_ => "",
        G_SHOW_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "Movimientos",
        F_ALIAS_ => "Movimientos",
        F_HELP_ => "Movimientos",
        F_TYPE_ => "header",
        R_TABLE_ => "",
        F_OPER_ => "1_ Browse",
        F_LINK_ => "",
        F_FILTER_ => "",
        G_SHOW_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "VentaFacturada",
        F_ALIAS_ => "Venta Facturada",
        F_HELP_ => "Venta Facturada",
        F_TYPE_ => "menu",
        R_TABLE_ => "Movimientos",
        F_OPER_ => "1_ Browse",
        F_LINK_ => "db.VentaFacturada",
        F_FILTER_ => "",
        G_SHOW_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "proveedor",
        F_ALIAS_ => "Proveedor",
        F_HELP_ => "Proveedor",
        F_TYPE_ => "menu",
        R_TABLE_ => "ModuloStock",
        F_OPER_ => "1_ Browse",
        F_LINK_ => "db.proveedor",
        F_FILTER_ => "",
        G_SHOW_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "bazar",
        F_ALIAS_ => "Bazar",
        F_HELP_ => "Bazar",
        F_TYPE_ => "menu",
        R_TABLE_ => "ModuloStock",
        F_OPER_ => "1_ Browse",
        F_LINK_ => "db.bazar",
        F_FILTER_ => "",
        G_SHOW_ => "1"));

?>