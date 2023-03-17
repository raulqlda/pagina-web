<div class="container">
    <?php echo "<h1>".$data['nombre']. "</h1>";
    ?>
</div>
<div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item"><?php echo "<img src=".$data['imagen']." width='150' height='150'>";?></li>
        <li class="nav-item" style="margin-left: 5%"><?php echo "<p style='text-align: right; display: inline-block; font-size: 22px;'>".$data['descripcion']."</p>";?>  </li>
    </ul>
</div>
<div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item"><?php echo "<p class='nav-link active' aria-current='page' style='background-color:red;'>".$data['precio']."₽</p>";?></li>
    </ul>
</div>