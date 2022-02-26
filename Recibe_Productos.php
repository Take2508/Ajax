<?php
    $nombre = $_POST['nombre'];
    $costo = $_POST['costo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $minimo = $_POST['minimo'];
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Costo</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Stock Minimo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
                <td><?php echo $nombre ?></td>
                <td><?php echo $costo ?></td>
                <td><?php echo $precio ?></td>
                <td><?php echo $stock ?></td>
                <td><?php echo $minimo ?></td>
            </tr>
        </tbody>
    </table>
</div>