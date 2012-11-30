formulario bazar

<?php
$Obj->name = "bazar";
$Obj->alias = "Roperia";
$Obj->help = "Roperia";
$Obj->copy_from = "";
$Obj->Inheritance = "";
$Obj->File = "bazar";
$Obj->Filter = "";
$Obj->Sort = "";
$Obj->p_insert = "";
$Obj->p_change = "";
$Obj->p_delete = "";
$Obj->Zebra = "white,lightblue";
$Obj->Noedit = "";
$Obj->NoInsert = "";
$Obj->Limit = "";
$Obj->Add(
    array(
        F_NAME_ => "idBazar",
        F_ALIAS_ => "Id Bazar",
        F_HELP_ => "Id Bazar",
        F_TYPE_ => "text",
        F_AUTONUM_ => "1",
        F_BROW_ => "1",
        F_ORD_ => "10",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "descip",
        F_ALIAS_ => "Descripcion",
        F_HELP_ => "Descripcion",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "20",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "prec_compra",
        F_ALIAS_ => "Precio Compra",
        F_HELP_ => "Precio Compra",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "50",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "precio_venta",
        F_ALIAS_ => "Precio Venta",
        F_HELP_ => "Precio Venta",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "60",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "stock_bazar",
        F_ALIAS_ => "Stock",
        F_HELP_ => "Stock",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "70",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "fecha",
        F_ALIAS_ => "Fecha Alta",
        F_HELP_ => "Fecha Alta",
        F_TYPE_ => "date",
        F_BROW_ => "1",
        F_ORD_ => "80",
        F_INLINE_ => "1",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

?>