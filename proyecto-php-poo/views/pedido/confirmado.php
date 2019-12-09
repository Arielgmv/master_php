<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>
        Tu pedido ha sido gurdado con éxito, una vez que realices la trasferencia
        bancaria con el coste del pedido, será procesado y enviado.
    </p>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <h1>Tu pedido no ha podido procesarse</h1>    
<?php endif; ?>
