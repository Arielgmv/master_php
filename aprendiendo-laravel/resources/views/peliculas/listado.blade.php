<!-- Imprimir por pantalla -->
<h1>{{$titulo}}</h1>
<h2>{{$listado[0]}}</h2>
<p>{{date('Y')}}</p>

<!--Esto es un comentario html-->
<?php
//Esto es un comentario php
?>

{{-- Esto es un comentario Laravel blade--}}

<!-- Mostrar si existe -->
<!--<?= isset($director) ? $director : 'No hay director'; ?>-->

{{-- $director or 'No hay ningun director' --}}

<!-- Condicionales -->
@if($titulo && count($listado) >=2 )
    <h1>El titulo existe y es este: {{$titulo}} y el listado es mayor a 2</h1>
@elseif($titulo)
    <h1>El titulo existe y el listado no es mayor a 5</h1>
@else
    <h1>El titulo no existe</h1>
@endif