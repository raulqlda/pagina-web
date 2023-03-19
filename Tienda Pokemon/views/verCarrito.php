<div class="container">
    <h2 style="text-align: center"> <br> Carrito </br></h2>
    <?php
    if(!empty($_SESSION['carrito'])){
        echo " <table class='table'> <tr> <th>Nombre</th> <th>Precio</th> </tr>";
        foreach ($data as $producto){
            echo "<tr>
            <td hidden>".$producto['id_producto']."</td>
            <td>".$producto['nombre']."</td>";
            echo "<td>".$producto['precio']."</td>";
        }
        echo "</tr>";
        echo "</table>";
    } else {
        echo "<div class='alert alert-danger'><p style='text-align: center;'>Carrito vacio</p></div>";
    }
?>
</div>
<!-- <div>
    <ul class="nav nav-pills">
        <li class="nav-item" style="background-color: green"><a href="" class="nav-link active" aria-current="page">Comprar</a></li>
    </ul>
</div> -->