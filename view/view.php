<?php 
	require_once('../controller/controller.php');
 ?>
<h1>Listado de Users</h1>
<table border="2">
    <tr>
      <td>name</td>
      <td>last name</td>
    </tr>
    
    <?php foreach($datos as $row): ?>
    <tr>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td><a href="../controller/controller.php?id=<?php echo $row['id']?>">Eliminar</a></td>
    </tr>
<?php endforeach;?>
<button><a href="adduser.php">agregar</a></button>
</table>