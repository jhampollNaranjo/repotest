<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>   
    <?php 
    	require_once('../controller/controller.php');
     ?>
    <h1 class="text-center">Listado de Users</h1>
    <div class="container">
        <div class="col-md-6">
            <div class="row">
                <div class="table-responsive">
                    <table  class="table">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>last name</th>
                                <th>Age</th>
                            </tr>
                        </thead>
                        
                        <?php foreach($datos as $row): ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['last_name']?></td>
                                <td><?php echo $row['edad']?></td>
                                <td><a href="../controller/controller.php?id=<?php echo $row['id']?>">Eliminar</a></td>
                            </tr>
                        </tbody>
                        <?php endforeach;?>
                    </table>
                </div>
                <a href="adduser.php"  class="btn btn-primary btn-sm">agregar</a>
            </div>
        </div>
    </div>
</body>
</html>