<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>
        Tu pedido ha sido gurdado con éxito, una vez que realices la trasferencia
        bancaria a la cuenta 767657576576 con el coste del pedido, será procesado y enviado.
    </p>
    <br />
    <h3>Datos del pedido:</h3>
    <pre>
        Numero de pedido:
        Total a pagar:
        Productos:
    </pre>
    
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <h1>Tu pedido no ha podido procesarse</h1>    
<?php endif; ?>
