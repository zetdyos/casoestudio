<?php
  if (isset($_COOKIE['carrito'])) {
    $car = $_COOKIE['carrito'];
    $car= str_replace("/", ",", $car);
    $lista_productos=json_decode($car, true);



  }
  if(isset($_GET['op'])){
    setrawcookie('carrito',"");
  }
  else{
  $cantidad = $_POST['cantidad'];
  $precio   = $_GET['precio'];
  $producto = $_GET['producto'];
 $lista_productos[]= array('producto' => $producto, 'precio' => $precio, 'cantidad' => $cantidad, );
  $list = array();
  foreach ($lista_productos AS $valor){
          $list[$valor['producto']] = $valor['cantidad'];

        }

 $ar=json_encode($lista_productos);
  $ar= str_replace(",", "/", $ar);
   setrawcookie('carrito',$ar);
 }
?>

<html>
<header>
<title>Caso de Uso Google Tag Manager y Cityads. Tema Molanco</title>
</header>

<body>
<?php
  $ids_productos = array_keys($list);
  $cantidades_productos = array_values($list);
?>

<!-- Google Tag Manager -->
<script>
  dataLayer=[{
    'basket_products': '<?= implode(",",$ids_productos)?>',
    'basket_quantity':  '<?= implode(",",$cantidades_productos)?>'
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






<h1 align="center">Carrito de compra</h1>

<form action="checkout.php?click_id=115&utm_medium=cityads" method="post">


<table align="center" border="1px" style="border:1px blue solid;">
  <thead style="background-color:#cbcbcb;">
  <tr>
    <th width="40%">Producto</th>
    <th width="30%">Cantidad</th>
    <th width="30%">Precio</th>

  </tr>
  </thead>
  <tbody>

    <?php foreach ($lista_productos AS $valor): ?>

      <tr>

        <td><?php echo "Producto ". $valor['producto']?></td>
        <td><?php echo $valor['cantidad']?></td>
        <td style="color:red"><?php echo $valor['precio']?></td>

      </tr>
    <?php endforeach?>
  </tbody>
  </table>

  <table align="center">
    <thead>
      <tr>
        <th><a href="index.php">Inicio</a></th>
        <th><input type="submit" value="Checkout" id='pago_directo' class="pagos checkout"></th>
      </tr>
    </thead>
  </table>
</form>

</body>
</html>
