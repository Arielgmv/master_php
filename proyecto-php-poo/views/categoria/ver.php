<?php if(isset($categoria)): ?>
<<<<<<< HEAD
    <h1><?=$categoria->nombre?></h1>
    <?php if($productos->num_rows == 0): ?>
        <p>No hay productos para mostrar</p>
    <?php else: ?>    
        <?php while($product = $productos->fetch_object()): ?>
            <div class="product">
                <a href="<?=base_url?>Producto/ver&id=<?=$product->id?>">
                    <?php if($product->imagen != null): ?>
                        <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" />
                    <?php else: ?>
                        <img src="<?=base_url?>assets/img/camiseta.png" />
                    <?php endif; ?>
                    <h2><?=$product->nombre?></h2>
                </a>
                <p><?=$product->precio?></p>
                <a href="" class="button">Comprar</a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
=======
<h1></h1>
>>>>>>> f3a0926558a170ea5fb909caa5e739a32afcc4d8
<?php else: ?>
    <h1>La categoria no existe</h1>
<?php endif; ?>