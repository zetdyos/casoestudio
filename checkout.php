<?php
    if (isset($_COOKIE['carrito'])) {

        $car = $_COOKIE['carrito'];
        $car= str_replace("/", ",", $car);
        $lista_productos=json_decode($car, true);
        $list = array();
        $order_total = 0;


        foreach ($lista_productos AS $valor){
          $list[$valor['producto']] = $valor['cantidad'];
          $order_total = $order_total+ $valor['precio'];
        }


        $ids_productos = array_keys($list);
        $cantidades_productos = array_values($list);
        $order_id=100;
        $descuento = 0;


  }
    setrawcookie('carrito',"");
?>
<html>
<header>

</header>

<body>
<?php
$lista_backend = array();
foreach ($lista_productos AS $valor){
       $lista_backend []  = array(
       'pid'=>$valor['producto'],
       'pn' =>'Producto '.$valor['producto'],
       'up' => $valor['precio'],
       'pd'=>0,
       'pc'=>'Categoria 1',
       'qt'=>$valor['cantidad']

       );
}

$basket = json_encode($lista_backend);

?>
<!-- Google Tag Manager -->
<script>
  dataLayer=[{
    'order_products': '<?= implode(",",$ids_productos)?>',
    'order_quantity':  '<?= implode(",",$cantidades_productos)?>',
    'order_id' : '<?=md5($order_id)?>', // Regresar el OrderID (de preferencia criptografiado en MD5)
    'order_total' : '<?=number_format((float)$order_total, 2, '.', '') ?>', // Regresar el valor total del pedido usando siempre PUNTO para separar decimales
    'customer_type' : 'Tipo 1', //Clocar variable qeu contenga este dato, este valor es de ejemplo
    'payment_method' : 'Pago directo',//Cloar variable qeu contenga este dato, este valor es de ejemplo
    'currency' : 'MX',//Clocar variable qeu contenga este dato, este valor es de ejemplo
    'coupon' : '<?= rand()?>',//Clocar variable que contenga este dato, este valor es de ejemplo
    'discount': '<?=number_format((float)$descuento, 2, '.', '') ?>',
    'basket':'<?= $basket?>'
  }];
</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TSGSF7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSGSF7');</script>
<!-- End Google Tag Manager -->

 <h1>Gracias por su compra...</h1>
 <th><a href="index.php">Inicio</a></th>

</body>
</html>
