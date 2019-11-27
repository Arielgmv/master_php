<h1>Gestión de Productos</h1>

<a href="<?=base_url?>Producto/crear" class="button button-small">
    Crear producto
</a>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
    <?php while($pro = $productos->fetch_object()): ?>
        <tr>
            <td><?=$pro->id;?></td>
            <td><?=$pro->nombre;?></td>
            <td><?=$pro->precio;?></td>
            <td><?=$pro->stock;?></td>         
        </tr>
    <?php endwhile; ?>
</table>