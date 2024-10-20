<?php

// Capturar los campos de la URL
// Datos de la empresa
$empresa = $_GET["empresa"];
$rtn = $_GET["rtn"];
$direccion = $_GET["direccion"];
$telefono = $_GET["telefono"];
$email = $_GET["email"];

// Datos de la factura
$date = $_GET["date"];
$folio = $_GET["Folio_1"];
$factura = $_GET["factura"];
$cai = $_GET["cai"];
$rango = $_GET["rango"];
$limite = $_GET["limite"];
$subtotal = $_GET["subtotal"];
$descuento = $_GET["descuento"];
$subtotalexe = $_GET["subtotalexe"];
$subtotalexo = $_GET["subtotalexo"];
$subtotalisv15 = $_GET["subtotalisv15"];
$subtotalisv18 = $_GET["subtotalisv18"];
$isv15 = $_GET["isv15"];
$isv18 = $_GET["isv18"];
$total = $_GET["total"];
$recibido = $_GET["recibido"];
$cambio = $_GET["cambio"];
$montoletras = $_GET["montoletras"];


// Datos del cliente
$cliente = $_GET["cliente"];
$rtncliente = $_GET["rtncliente"];
$direccioncliente = $_GET["direccioncliente"];
$telefonocliente = $_GET["telefonocliente"];
$emailcliente = $_GET["emailcliente"];
$ocexe = $_GET["ocexe"];
$ocexo = $_GET["ocexo"];
$nosag = $_GET["nosag"];


// Detalle de los productos
$descriptions= explode (",",$_GET["descriptions"]);
$quantitys= explode (",",$_GET["quantitys"]);
$price= explode (",",$_GET["price"]);
$subtproducto= explode (",",$_GET["subtproducto"]);
$descproducto= explode (",",$_GET["descproducto"]);
$isvproducto= explode (",",$_GET["isvproducto"]);
$amounts= explode (",",$_GET["amounts"]);

// Create new array
for ($i=0; $i < count($descriptions); $i++) { 
    $products[]= array(
        "description"=>$descriptions[$i],
        "quantity"=>$quantitys[$i],
        "price"=>$price[$i],
        "desc"=>$descproducto[$i],
        "isv"=>$isvproducto[$i],
        "amount"=>$amounts[$i],
    );
}





?>


<html><head>

<style type= "text/css">

    #thermal-pos {
        box-shadow: 0 0 0mm #EEE;
        margin: 0 auto;
        max-width: 80mm;
        line-height: 6mm;
    }

    #thermal-pos h2 {
        font-size: 4mm;
        line-height: 13px;
    }

    #thermal-pos .label {
        text-align: center;
        font-size: 5mm;
        line-height: 1.3
    }
    #thermal-pos .informasi {
        vertical-align: text-top;
        text-align: left;
        max-width: 45mm;
        word-wrap: break-word;
    }

    #thermal-pos .listitem {
        font-size: 4mm;
        height: 0mm;
        text-align: center;
    }
    #thermal-pos table {
        width: 100%;
    }

    #thermal-pos .item {
        max-width: 279mm;
        font-size: 4.2mm;
        word-wrap: break-word;
        width: 100%;
    }
    #thermal-pos .amount {
        vertical-align: center;
        text-align: right;
        font-size: 4.2mm;
    }

    #thermal-pos .price {
        vertical-align: center;
        text-align: center;
        font-size: 4.2mm;
    }

    #thermal-pos .desc {
        vertical-align: center;
        text-align: center;
        font-size: 4.2mm;
    }

    #thermal-pos .qty {
        vertical-align: center;
        text-align: center;
        font-size: 4.2mm;
    }

    #thermal-pos .Isv {
        vertical-align: center;
        text-align: right;
        font-size: 4.2mm;

    }
    #thermal-pos .bawah {
        margin-top: 5mm;
        text-align: center;
        height: 90px;
        page-break-after: auto;
    }
    #thermal-pos .detail1 {
        margin-top: 5mm;
        text-align: right;
        page-break-after: auto;
    }

    #thermal-pos .detail {
        margin-top: 5mm;
        text-align: left;
        page-break-after: auto;
    }

    #all {
      font-family: Arial, sans-serif;
    }

</style>

</head>

<body id="all">
    <div id="thermal-pos">
    <div class= "label">
            <b><?php echo $empresa ?></b>
            <br> 
            <div class= "label">
            <b>RTN: <?php echo $rtn ?></b>
            <br>
            </div>
            <div class= "label">
            <b>Direccion: <?php echo $direccion ?></b>
            <br>
            </div>   
            <div class= "label">
            <b>Telefono: <?php echo $telefono ?></b>
            <br>
            <div class= "label">
            <b>Email: <?php echo $email ?></b>
            <br>
            </div>    
        </div>

        <div alig='center'>------------------------------------------------</div>
        <div alig='center'>FACTURA</div>
        <div alig='center'>------------------------------------------------</div>

        <table>
            <tr>
                <td class="informasi">Factura:</td>
                <td class="informasi"><?php echo $factura ?></td>
            </tr>
            <tr>
                <td class="informasi">Fecha:</td>
                <td class="informasi"><?php echo $date ?></td>
            </tr>
            <tr>
                <td class="informasi">CAI:</td>
                <td class="informasi"><?php echo $cai ?></td>
            </tr>
            <tr>
                <td class="informasi">Rango:</td>
                <td class="informasi"><?php echo $rango ?></td>
            </tr>            
            <tr>
                <td class="informasi">Limite:</td>
                <td class="informasi"><?php echo $limite ?></td>
            </tr>            
        </table>
        <div alig='center'>------------------------------------------------</div>       
        <div alig='center'>Datos del cliente</div>
        <div alig='center'>------------------------------------------------</div>
        <table>
            <tr>
                <td class="informasi">Cliente:</td>
                <td class="informasi"><?php echo $cliente ?></td>
            </tr>
            <tr>
                <td class="informasi">RTN:</td>
                <td class="informasi"><?php echo $rtncliente ?></td>
            </tr>
            <tr>
                <td class="informasi">Direccion:</td>
                <td class="informasi"><?php echo $direccioncliente ?></td>
            </tr>
            <tr>
                <td class="informasi">Telefono:</td>
                <td class="informasi"><?php echo $telefonocliente ?></td>
            </tr>
        </table>
        <div alig='center'>------------------------------------------------</div>

        <div alig='center'>Datos del cliente exonerado</div>
        <div alig='center'>------------------------------------------------</div> 
        <table>
            <tr>
                <td class="informasi">O. C. Exenta:</td>
                <td class="informasi"><?php echo $ocexe ?></td>
            </tr>
            <tr>
                <td class="informasi">O. C. Exonerada:</td>
                <td class="informasi"><?php echo $ocexo ?></td>
            </tr>
            <tr>
                <td class="informasi">No. Reg. SAG:</td>
                <td class="informasi"><?php echo $nosag ?></td>
            </tr>

        </table>
        <div alig='center'>------------------------------------------------</div>
        <div alig= "center" >Detalle</div>
        <div alig='center'>------------------------------------------------</div>             

        <table>
            <tr class="listitem">
                <td>
                    <h2>Cant</h2>
                </td>
                <td>
                    <h2>Precio</h2>
                </td>
                <td>
                    <h2>Desc.</h2>
                </td>
                <td>
                    <h2>Isv</h2>
                </td>
                <td>
                    <h2>Monto</h2>
                </td>
            </tr>
            </table>
            

            <table>
            <tr class="listitem">
<?php
            foreach($products as $product) {
                echo'
                <tr>
                <td colspan="5" class="descriptions">'.$product["description"].'</td>
                </tr>
                <tr class="listitem">
                <td class="qty">'.$product["quantity"].'</td>
                <td class="Price">'.$product["price"].'</td>
                <td class="Desc">'.$product["desc"].'</td>
                <td class="Isv">'.$product["isv"].'</td>
                <td class="Amount">'.$product["amount"].'</td>
                </tr>
                ';
            }
            ?>
            </tr>
            
        </table>
        
        <div alig='center'>------------------------------------------------</div>
        <table>
        <tr>
                <td class="detail">Subtotal</td>
                <td class="detail1">L<?php echo $subtotal?></td>
        </tr>
        <tr>
                <td class="detail">Descuento</td>
                <td class="detail1">L<?php echo $descuento?></td>
        </tr>
        <tr>
                <td class="detail">Subtotal exento:</td>
                <td class="detail1">L<?php echo $subtotalexe?></td>
        </tr>
        <tr>
                <td class="detail">Subtotal exonerado:</td>
                <td class="detail1">L<?php echo $subtotalexo?></td>
        </tr>
        <tr>
                <td class="detail">Subtotal 15%:</td>
                <td class="detail1">L<?php echo $subtotalisv15?></td>
        </tr>
        <tr>
                <td class="detail">Subtotal 18%:</td>
                <td class="detail1">L<?php echo $subtotalisv18?></td>
        </tr>
        <tr>
                <td class="detail">Impuesto 15%:</td>
                <td class="detail1">L<?php echo $isv15?></td>
        </tr>
        <tr>
                <td class="detail">Impuesto 18%:</td>
                <td class="detail1">L<?php echo $isv18?></td>
        </tr>
        <tr>
                <td class="detail">Total venta:</td>
                <td class="detail1">L<?php echo $total ?></td>
        </tr>
        <tr>
                <td class="detail">Recibido:</td>
                <td class="detail1">L<?php echo $recibido ?></td>
        </tr>
        <tr>
                <td class="detail">Cambio:</td>
                <td class="detail1">L<?php echo $cambio ?></td>
        </tr>
        </table>


        <div alig='center'>------------------------------------------------</div>
        <tr>
                <td class="informasi">Son:</td>
                <td class="informasi"><?php echo $montoletras ?></td>
        </tr>   
        <div alig='center'>------------------------------------------------</div>
        <div alig= "center" >Gracias por su compra!!</div>
        <div alig= "center" >Original: Cliente, Copia: Emisor</div>


<?php function abrirDocumentoPDF($ruta) {

// Define la ruta del archivo PDF
$ruta = $ruta;

// Obtiene el mime type del archivo PDF
$mime_type = mime_content_type($ruta);

// Abre el archivo PDF en el navegador
header("Content-type: $mime_type");
readfile($ruta);

}                
?>
<script>
window.onload = function() {
    window.print();
};
</script>
