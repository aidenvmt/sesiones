<?php
include('header.html');
require_once('config.php');
echo("<h2>Eliminar pedidos</h2>");

foreach ($conn->query('SELECT * from pedidos where id='.$_GET['id'].';') as $row){
    echo('<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">'.$row['fecha_pedido'].'</h5>
    <h6 class="card-subtitle mb-2 text-muted">'.$row['producto'].'</h6>
    <p class="card-text">'.$row['unidades'].'</p>
    <form action="" method="post">
        <button type="submit" class="btn btn-primary">Eliminar definitivamente</a>
    </form>
  </div>
</div>
');
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $conn->query('DELETE FROM pedidos WHERE id='.$_GET['id'].';');
    header('location:consultar.php');
}
?>

<?php
include('footer.html');
?>