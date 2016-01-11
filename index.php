
<?php
if(isset($_GET['op'])){
    setrawcookie('carrito',"");
  }
?>
<html>
<header>
<title>Caso de Uso Google Tag Manager y Cityads. Tema Molanco</title>
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

<h1 align="center">Caso de Uso Google Tag Manager y Cityads</h1>
<table align="center" border="1px" style="border:1px blue solid;">
  <thead style="background-color:#cbcbcb;">
  <tr>
    <th width="30%">Producto</th>
    <th width="30%">Precio</th>
    <th width="20%">Adicionar al carrito</th>
    <th width="20%">Ver como caso especial</th>
     </tr>
  </thead>
  <tbody>
  <tr>
  <td>Producto 1</td>
  <td>100</td>
  <td><a href="detalle_producto.php?producto=1&precio=100">Comprar</a></td>
  <td><div align="center"><strong><a href="caso_especial.php?producto=1&precio=100">Especial</a></strong></div></td>

  <tr>
  <td>Producto 2</td>
  <td>200</td>
  <td><a href="detalle_producto.php?producto=2&precio=200">Comprar</a></td>
  <td><div align="center"><strong><a href="caso_especial.php?producto=2&precio=200">Especial</a></strong></div></td>
  </tr>

  <tr>
  <td>Producto 3</td>
  <td>300</td>
  <td><a href="detalle_producto.php?producto=3&precio=300">Comprar</a></td>
  <td><div align="center"><strong><a href="caso_especial.php?producto=3&precio=300">Especial</a></strong></div></td>
  </tr>
  <tr>
  <td>Producto 4</td>
  <td>400</td>
  <td><a href="detalle_producto.php?producto=4&precio=400">Comprar</a></td>
  <td><div align="center"><strong><a href="caso_especial.php?producto=4&precio=400">Especial</a></strong></div></td>
  </tr>



</tbody>
</table>

</body>
</html>
