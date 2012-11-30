Crear formulario de Articulos

<?php
$Obj->name = "Articulos";
$Obj->alias = "Articulos";
$Obj->help = "Articulos";
$Obj->copy_from = "";
$Obj->Inheritance = "";
$Obj->File = "Articulos";
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
        F_NAME_ => "Id_Articulo",
        F_ALIAS_ => "Cod.Art",
        F_HELP_ => "Cod.Art",
        F_TYPE_ => "text",
        F_AUTONUM_ => "1",
        F_LENGTH_ => "5",
        F_DEC_ => "0",
        F_BROW_ => "1",
        F_ORD_ => "10",
        F_POSVAL_ => "Id_Articulo.get()>'0'",
        F_MESSAGE_ => "'ID DE ARTICULO DEBE SER MAYOR A CERO '",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "Descripcion",
        F_ALIAS_ => "Descripcion",
        F_HELP_ => "Descripcion",
        F_TYPE_ => "text",
        F_LENGTH_ => "50",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_ORD_ => "20",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "PrecioCompra",
        F_ALIAS_ => "Precio Compra",
        F_HELP_ => "Precio Compra",
        F_TYPE_ => "text",
        F_LENGTH_ => "10",
        F_DEC_ => "0",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_TOTAL_ => "1",
        F_ORD_ => "30",
        F_POSVAL_ => "PrecioCompra.get()>'0'",
        F_MESSAGE_ => "'PRECIOCOMPRA DEBE SER MAYOR A CERO'",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "PrecioVenta",
        F_ALIAS_ => "Precio Venta",
        F_HELP_ => "Precio Venta",
        F_TYPE_ => "text",
        F_LENGTH_ => "10",
        F_DEC_ => "0",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_TOTAL_ => "1",
        F_ORD_ => "40",
        F_INLINE_ => "1",
        F_POSVAL_ => "PrecioVenta.get()>'0'",
        F_MESSAGE_ => "'PRECIOVENTA DEBE SER MAYOR A CERO'",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "Stock",
        F_ALIAS_ => "Stock",
        F_HELP_ => "Stock",
        F_TYPE_ => "text",
        F_LENGTH_ => "10",
        F_DEC_ => "0",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_TOTAL_ => "1",
        F_ORD_ => "50",
        F_POSVAL_ => "Stock.get()>'0'",
        F_MESSAGE_ => "'STOCK DEBE SER MAYOR A CERO'",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "FechaAlta",
        F_ALIAS_ => "Fecha Alta",
        F_HELP_ => "Fecha Alta",
        F_TYPE_ => "date",
        F_BROW_ => "1",
        F_ORD_ => "60",
        F_INLINE_ => "1",
        V_DEFAULT_ => "thisDate_",
        C_CHANGE_ => "false",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstCodProd",
        F_ALIAS_ => "Estilo Codigo Producto",
        F_HELP_ => "Estilo Codigo Producto",
        F_TYPE_ => "formula",
        F_ORD_ => "70",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{Id_Articulo}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstDescripcion",
        F_ALIAS_ => "Estilo Descripcion de Articulos",
        F_HELP_ => "Estilo Descripcion de Articulos",
        F_TYPE_ => "formula",
        F_ORD_ => "80",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{Descripcion}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstPrecAdq",
        F_ALIAS_ => "Estilo de Precio Adquirido",
        F_HELP_ => "Estilo de Precio Adquirido",
        F_TYPE_ => "formula",
        F_ORD_ => "90",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{PrecioCompra}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstPrecVenta",
        F_ALIAS_ => "Estilo de Precio de Venta",
        F_HELP_ => "Estilo de Precio de Venta",
        F_TYPE_ => "formula",
        F_ORD_ => "100",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{PrecioVenta}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstCantExis",
        F_ALIAS_ => "Estilo de cantidad existente en Stock",
        F_HELP_ => "Estilo de cantidad existente en Stock",
        F_TYPE_ => "formula",
        F_ORD_ => "110",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{Stock}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstFechaProd",
        F_ALIAS_ => "Estilo de fecha de alta del producto",
        F_HELP_ => "Estilo de fecha de alta del producto",
        F_TYPE_ => "formula",
        F_ORD_ => "120",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{FechaAlta}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "DetalleProvedor",
        F_ALIAS_ => "Detalle Proveedor",
        F_HELP_ => "Detalle Proveedor",
        F_TYPE_ => "subform",
        F_OPTIONS_ => "'id_Det_Prov= '+Id_Articulo.get()",
        F_LINK_ => "db.det_Prov",
        F_SEND_ => "Id_Articulo.get()",
        F_BROW_ => "1",
        F_ORD_ => "130",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

?>