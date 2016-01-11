<html>
<header>
<title>Caso de Uso Google Tag Manager y Cityads. Tema Molanco</title>
<script>
  dataLayer =[{'product_id': '<?= $_GET['producto']?>'}];
</script>
</header>

<body>



<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TSGSF7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSGSF7');</script>
<!-- End Google Tag Manager -->




<h1 align="center">Detalles de un Producto</h1>

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
<form action="carrito_compra.php?producto=<?php echo $_GET['producto']?>&precio=<?php echo $_GET['precio']?>" method="post">
<div align="center">
Cantidad: <input type="text" name="cantidad" ><br>
<input type="submit" value="Add">
</div>
</form>
</body>
</html>
