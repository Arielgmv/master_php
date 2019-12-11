<?php if(isset($gestion)): ?>
<h1>Gestionar Pedidos</h1>
<?php else: ?>

<?php endif; ?>

<table>
    <tr>
        <th>Nº Pedido</th>
        <th>Coste</th>
        <th>Fecha</th>        
        <th>Estado</th>
    </tr>
    <?php
        while($ped = $pedidos->fetch_object()):       
    ?>

    <tr>
        <td>
            <a href="<?=base_url?>Pedido/detalle&id=<?=$ped->id?>"><?=$ped->id?></a>
        </td>
        <td>
            <?=$ped->coste?> Bs.
        </td>
        <td>
            <?=$ped->fecha?>
        </td>
        <td>
        <?=Utils::showStatus($ped->estado)?>
        </td>
    </tr>

        <?php endwhile; ?>
</table>