crear formulario detalle proveedor
<?php
$Obj->name = "det_Prov";
$Obj->alias = "Detalle Proveedor";
$Obj->help = "Detalle Proveedor";
$Obj->copy_from = "";
$Obj->Inheritance = "";
$Obj->File = "det_Prov";
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
        F_NAME_ => "id_Det_Prov",
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
        F_NAME_ => "rucP",
        F_ALIAS_ => "Ruc",
        F_HELP_ => "Ruc",
        F_TYPE_ => "text",
        F_MAKE_QUERY_ => "1",
        F_QUERY_ => "'SELECT ruc_p,nom_p,direc_p,telefono_p FROM proveedor WHERE ruc_p='+rucP.get()",
        F_QUERY_REF_ => "rucP.hasChanged()",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_ORD_ => "20",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "nom_p",
        F_ALIAS_ => "Proveedor",
        F_HELP_ => "Proveedor",
        F_TYPE_ => "formula",
        F_BROW_ => "1",
        F_ORD_ => "30",
        F_FORMULA_ => "db('nom_p')",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "telefono_p",
        F_ALIAS_ => "Telefono",
        F_HELP_ => "Telefono",
        F_TYPE_ => "formula",
        F_BROW_ => "1",
        F_ORD_ => "50",
        F_FORMULA_ => "db('telefono_p')",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "direc_p",
        F_ALIAS_ => "Direccion",
        F_HELP_ => "Direccion",
        F_TYPE_ => "formula",
        F_BROW_ => "1",
        F_ORD_ => "60",
        F_FORMULA_ => "db('direc_p')",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

?>