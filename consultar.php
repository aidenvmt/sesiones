<?php
include ('header.html');


echo ("<h2>Listado de pedidos - Selects</h2>");
?>
<?php
require_once('config.php');
echo("
    <table>
        <tr>
            <td>ID</td>
            <td>fecha pedido</td>
            <td>unidades</td>
            <td>producto</td>
            <td>eliminar</td>
        </tr>  



    ");
foreach ($conn->query('SELECT * FROM pedidos') as $row) {
    echo("
   <tr>
       <td>" . $row['id'] . "</td>
       <td>" . $row['producto'] . "</td>
       <td>" . $row['unidades'] . "</td>
       <td>" . $row['fecha_pedido'] . "</td>
       <td><a href='eliminar.php?id=" . $row['id'] . "'><ion-icon name='trash-outline'></ion-icon></a>
       <a href='actualizar.php?id=" . $row['id'] . "'><ion-icon name='reload-outline'></ion-icon></td>
       <td></td>
   </tr>");
}

    echo ("</table>");


?>



<?php
include ('footer.html');

?>