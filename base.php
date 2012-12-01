
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
;***************************************

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
;***************************
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

;***************************
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
;***************************
<?php
$Obj->name = "DetVentFact";
$Obj->alias = "Detalle  venta facturada";
$Obj->help = "Detalle  venta facturada";
$Obj->copy_from = "";
$Obj->Inheritance = "";
$Obj->File = "DetVentFact";
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
        F_NAME_ => "IdFactDet",
        F_ALIAS_ => "IdFactDet",
        F_HELP_ => "IdFactDet",
        F_TYPE_ => "text",
        F_AUTONUM_ => "1",
        F_ORD_ => "10",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "CodArt",
        F_ALIAS_ => "Codigo de Articulo",
        F_HELP_ => "Codigo de Articulo",
        F_TYPE_ => "text",
        F_MAKE_QUERY_ => "1",
        F_QUERY_ => "'SELECT Id_Articulo,Descripcion,PrecioVenta,PrecioCompra,Stock FROM Articulos WHERE Id_Articulo='+CodArt.get()",
        F_QUERY_REF_ => "CodArt.hasChanged()",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_ORD_ => "20",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "Descripcion",
        F_ALIAS_ => "Descripcion",
        F_HELP_ => "Descripcion",
        F_TYPE_ => "formula",
        F_LENGTH_ => "50",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_ORD_ => "30",
        F_FORMULA_ => "db('Descripcion')",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "PrecioVenta",
        F_ALIAS_ => "Precio Venta",
        F_HELP_ => "Precio Venta",
        F_TYPE_ => "formula",
        F_LENGTH_ => "10",
        F_BROW_ => "1",
        F_ORD_ => "40",
        F_FORMULA_ => "db('PrecioVenta')",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "Cantidad",
        F_ALIAS_ => "Cantidad",
        F_HELP_ => "Cantidad",
        F_TYPE_ => "text",
        F_LENGTH_ => "8",
        F_DEC_ => "0",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_ORD_ => "50",
        F_INLINE_ => "1",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "SubTotal",
        F_ALIAS_ => "SubTotal",
        F_HELP_ => "Sub Total",
        F_TYPE_ => "formula",
        F_LENGTH_ => "5",
        F_DEC_ => "2",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_TOTAL_ => "1",
        F_ORD_ => "60",
        F_FORMULA_ => "Cantidad.get()*PrecioVenta.get()",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "DescActiva",
        F_ALIAS_ => "Descripcion Activa",
        F_HELP_ => "Descripcion Activa",
        F_TYPE_ => "text",
        F_MAKE_QUERY_ => "1",
        F_QUERY_ => "'SELECT * FROM Articulos'",
        F_QUERY_REF_ => "DescActiva.hasChanged()",
        F_LENGTH_ => "30",
        F_BROW_ => "1",
        F_ORD_ => "70",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstDescActiva",
        F_ALIAS_ => "Estilo Descripcion Activa",
        F_HELP_ => "Estilo Descripcion Activa",
        F_TYPE_ => "formula",
        F_ORD_ => "80",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{DescActiva}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstIdFactDet",
        F_ALIAS_ => "Estilo factura Detalle",
        F_HELP_ => "Estilo factura Detalle",
        F_TYPE_ => "formula",
        F_ORD_ => "90",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{IdFactDet}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstIdCodArt",
        F_ALIAS_ => "Estilo CodArt",
        F_HELP_ => "Estilo CodArt",
        F_TYPE_ => "formula",
        F_ORD_ => "100",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{CodArt}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstPrecVenta",
        F_ALIAS_ => "Estilo de Precio de Venta",
        F_HELP_ => "Estilo de Precio de Venta",
        F_TYPE_ => "formula",
        F_ORD_ => "110",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{PrecioVenta}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstCantidad",
        F_ALIAS_ => "Estilo Cantidad",
        F_HELP_ => "Estilo Cantidad",
        F_TYPE_ => "formula",
        F_ORD_ => "120",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{Cantidad}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstSubTotal",
        F_ALIAS_ => "Estilo Sub Total",
        F_HELP_ => "Estilo Sub Total",
        F_TYPE_ => "formula",
        F_ORD_ => "130",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{SubTotal}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstDescripcion",
        F_ALIAS_ => "Estilo Descripcion de Articulos",
        F_HELP_ => "Estilo Descripcion de Articulos",
        F_TYPE_ => "formula",
        F_ORD_ => "140",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{Descripcion}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "VisActiva",
        F_ALIAS_ => "Visualizacion de Opciones",
        F_HELP_ => "Visualizacion de Opciones",
        F_TYPE_ => "subform",
        F_OPTIONS_ => "'Descripcion LIKE |{'+DesActiva.get()+'%}| '",
        F_LINK_ => "db.Articulos",
        F_SEND_ => "Descripcion.get()",
        F_LENGTH_ => "78",
        F_BROW_ => "1",
        F_NODB_ => "1",
        F_ORD_ => "150",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

?>
;***************************
<?php
$Obj->name = "proveedor";
$Obj->alias = "Proveedor";
$Obj->help = "Proveedor";
$Obj->copy_from = "";
$Obj->Inheritance = "";
$Obj->File = "proveedor";
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
        F_NAME_ => "ruc_p",
        F_ALIAS_ => "Ruc",
        F_HELP_ => "Ruc",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "20",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "nom_p",
        F_ALIAS_ => "Proveedor",
        F_HELP_ => "Proveedor",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "30",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "direc_p",
        F_ALIAS_ => "Direccion",
        F_HELP_ => "Direccion",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "40",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "telefono_p",
        F_ALIAS_ => "Telefono",
        F_HELP_ => "Telefono",
        F_TYPE_ => "text",
        F_BROW_ => "1",
        F_ORD_ => "60",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

?>
;***************************
<?php
$Obj->name = "VentaFacturada";
$Obj->alias = "Venta Facturada";
$Obj->help = "Venta Facturada";
$Obj->copy_from = "";
$Obj->Inheritance = "";
$Obj->File = "VentaFacturada";
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
        F_NAME_ => "IdFactura",
        F_ALIAS_ => "Id Facturacion",
        F_HELP_ => "Id Facturacion",
        F_TYPE_ => "text",
        F_AUTONUM_ => "1",
        F_LENGTH_ => "10",
        F_DEC_ => "0",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_ORD_ => "10",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "Destinatario",
        F_ALIAS_ => "Destinatario",
        F_HELP_ => "Destinatario",
        F_TYPE_ => "text",
        F_LENGTH_ => "50",
        F_BROW_ => "1",
        F_REQUIRED_ => "1",
        F_ORD_ => "20",
        F_FORMULA_ => "db('Descripcion')",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "Condicion",
        F_ALIAS_ => "Condicion",
        F_HELP_ => "Condicion",
        F_TYPE_ => "select_list",
        F_OPTIONS_ => "MONOTRIBUTISTA, RESPONSABLE INSCRIPTO",
        F_BROW_ => "1",
        F_ORD_ => "30",
        F_INLINE_ => "1",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "DetalleFacturad",
        F_ALIAS_ => "Detalle Facturacion",
        F_HELP_ => "Detalle Facturacion",
        F_TYPE_ => "subform",
        F_OPTIONS_ => "'IdFactDet= '+IdFactura.get()",
        F_LINK_ => "db.DetVentFact",
        F_SEND_ => "IdFactura.get()",
        F_BROW_ => "1",
        F_NODB_ => "1",
        F_ORD_ => "60",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "DetFacturadaBaz",
        F_ALIAS_ => "Detalle Bazar",
        F_HELP_ => "Detalle Bazar",
        F_TYPE_ => "subform",
        F_OPTIONS_ => "'IdFacBaz='+IdFactura.get()",
        F_LINK_ => "db.detFactBaz",
        F_SEND_ => "IdFactura.get()",
        F_BROW_ => "1",
        F_ORD_ => "65",
        G_SHOW_ => "1",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstIdFactura",
        F_ALIAS_ => "Estilo Id Factura",
        F_HELP_ => "Estilo Id Factura",
        F_TYPE_ => "formula",
        F_ORD_ => "70",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{IdFactura}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstDestinatario",
        F_ALIAS_ => "Estilo del destinatario",
        F_HELP_ => "Estilo del destinatario",
        F_TYPE_ => "formula",
        F_ORD_ => "80",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{Destinatario}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

$Obj->Add(
    array(
        F_NAME_ => "EstCondicion",
        F_ALIAS_ => "Estilo de condicion",
        F_HELP_ => "Estilo de condicion",
        F_TYPE_ => "formula",
        F_ORD_ => "90",
        C_VIEW_ => "false",
        F_FORMULA_ => "document.getElementById(|{Condicion}|).setAttribute(|{style}|,|{height:30px;color:blue;font-size:20px;}|)",
        G_SHOW_ => "7",
        G_CHANGE_ => "1"));

?>
