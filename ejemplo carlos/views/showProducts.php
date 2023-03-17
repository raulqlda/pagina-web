
<!--
    Vista que muestra los datos en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<div class="container">
    <h1> Listado de productos </h1>

    <table class="table">
        <tr><th hidden>Id Producto</th><th>Nombre</th> <th>Mas</th> <th>Comprar</th></tr>
        <?php
            foreach ($data as $article){
                echo "<tr>
                      <td hidden>".$article['id_producto']."</td>
                      <td>".$article['nombre']."</td>";
                      $enlace='<a href="index.php?controller=ProductController&action=getProductById&id_product='.$article['id_producto'].'">Ver mas... </a>';
                      $enlace2='<a href="index.php?controller=ProductController&action=anadirCarrito&id_product='.$article['id_producto'].'">Añadir al carrito</a>';
                      echo "<td>".$enlace."</td>";
                      echo "<td>".$enlace2."</td>
                      </tr>"; 
            }
        ?>
    </table>
</div>
