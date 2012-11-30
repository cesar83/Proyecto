Formulario detalle facturacion bazar

<?php
$Obj->name = "detFactBaz";
$Obj->alias = "Detalle Bazar";
$Obj->help = "Detalle Bazar";
$Obj->copy_from = "";
$Obj->Inheritance = "";
$Obj->File = "detFacBaz";
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
        F_NAME_ => "IdFacBaz",
        F_ALIAS_ => "Id Detalle",
        F_HELP_ => "Id Detalle",
        F_TYPE_ => "text",
        F_AUTONUM_ => "1",
        F_BROW_ => "1",
        F_ORD_ => "10",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "codBaz",
        F_ALIAS_ => "Codigo Bazar",
        F_HELP_ => "Codigo Bazar",
        F_TYPE_ => "text",
        F_MAKE_QUERY_ => "1",
        F_QUERY_ => "'SELECT idBazar,descip,prec_compra,precio_venta,stock_bazar FROM bazar WHERE idBazar='+codBaz.get()",
        F_QUERY_REF_ => "codBaz.hasChanged()",
        F_BROW_ => "1",
        F_ORD_ => "20",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "descip",
        F_ALIAS_ => "Descripcion",
        F_HELP_ => "Descripcion",
        F_TYPE_ => "formula",
        F_BROW_ => "1",
        F_ORD_ => "30",
        F_FORMULA_ => "db('descip')",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "precio_venta",
        F_ALIAS_ => "Precio Venta",
        F_HELP_ => "Precio Venta",
        F_TYPE_ => "formula",
        F_BROW_ => "1",
        F_ORD_ => "40",
        F_FORMULA_ => "db('precio_venta')",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "cant",
        F_ALIAS_ => "Cantidad",
        F_HELP_ => "Cantidad",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "50",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "sub_total",
        F_ALIAS_ => "SubTotal",
        F_HELP_ => "SubTotal",
        F_TYPE_ => "formula",
        F_BROW_ => "1",
        F_ORD_ => "60",
        F_FORMULA_ => "cant.get()*precio_venta.get()",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

?>