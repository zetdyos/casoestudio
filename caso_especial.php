
<?php
  $cantidad = 1;
  $precio   = $_GET['precio'];
  $producto = $_GET['producto'];
  $lista_productos[]= array('producto' => $producto, 'precio' => $precio, 'cantidad' => $cantidad, );

  $list = array();
  $order_total = 0;


  foreach ($lista_productos AS $valor){
    $list[$valor['producto']] = $valor['cantidad'];
    $order_total = $order_total+ $valor['precio'];
  }


  $ids_productos = array_keys($list);
  $cantidades_productos = array_values($list);
  $order_id = rand();
  $descuento = 0;

 $ar =json_encode($lista_productos);
 $ar = str_replace(",", "/", $ar);
 setrawcookie('carrito',$ar);

?>
<html>
<header>
<title>Caso de Uso Google Tag Manager y Cityads. Team Molanco</title>
<script>
  dataLayer =[{'product_id': '<?= $producto?>'}];
</script>
</header>

<body>

<?php
$lista_backend = array();
foreach ($lista_productos AS $valor){
       $lista_backend []  = array(
       'pid'=>$valor['producto'],
       'pn' =>'Producto '.$valor['producto'],
       'up' => $valor['precio'],
       'pd'=>0.0,
       'pc'=>'Categoria 1',
       'qt'=>$valor['cantidad']

       );
}

$basket = json_encode($lista_backend);

?>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TSGSF7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSGSF7');</script>
<!-- End Google Tag Manager -->

<h1 align="center">Carrito de Compra</h1>

<table align="center" border="1px" style="border:1px blue solid;">
  <thead style="background-color:#cbcbcb;">
  <tr>
    <th width="40%">Producto</th>
    <th width="60%">Descripción</th>

  </tr>
  </thead>
  <tbody>
    <tr>
    <td><div style="border:1px blue solid"><strong><?php echo 'Producto '.$_GET['producto']?></strong></div></td>
    <td><div><strong> Precio:</strong> <strong style="color:red"><?php echo $_GET['precio']?></strong></div>
    <div style="border-top:1px black solid"><strong> Peso:</strong>10g</div>
    <div style="border-top:1px black solid"><strong> Tamaño: </strong>15x15 cm</div>
    <div style="border-top:1px black solid"><strong> Color: </strong>Rojo</div>
    </td>
    </tr>
  </tbody>
</table>
<form action="thankyou.php?producto=<?= $producto?>&precio=<?= $precio?>" method="post">
<div align="center">
  <input type="submit" value="Checkout" id='pago_directo' class="pagos checkout"
        onclick="function (){
                  dataLayer.push({
                    'order_products': '<?= implode(",",$ids_productos)?>',
                    'order_quantity':  '<?= implode(",",$cantidades_productos)?>',
                    'order_id' : '<?= md5($order_id)?>', // Regresar el OrderID (de preferencia criptografiado en MD5)
                    'order_total' : '<?= number_format((float)$order_total, 2, '.', '') ?>', // Regresar el valor total del pedido usando siempre PUNTO para separar decimales
                    'customer_type' : 'Tipo 1', //Clocar variable qeu contenga este dato, este valor es de ejemplo
                    'payment_method' : 'Pago directo',//Cloar variable qeu contenga este dato, este valor es de ejemplo
                    'currency' : 'MX',//Clocar variable qeu contenga este dato, este valor es de ejemplo
                    'coupon' : '<?= rand()?>',//Clocar variable que contenga este dato, este valor es de ejemplo
                    'discount': '<?= number_format((float)$descuento, 2, '.', '') ?>',
                    'basket':'<?= $basket?>'
                  });
      }">
</div>
</form>
</body>
</html>
