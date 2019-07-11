<?php


require_once("../assets/config.php");

$cliente = Controller::$connection->query("SELECT * FROM cliente");

$cliente = $cliente->fetchAll(PDO::FETCH_NUM);

?>


<?php include("../assets/layouts/header.php"); ?>


<div class="container">

    <div class="col-md-12">




    <?php if(in_array(Security::$permission, $permissions->modulo["ADMINS"])): ?> 

<h1>Soy Admin</h1>

<?php endif; ?>

<?php if(in_array(Security::$permission, $permissions->modulo["SUPERVISOR"])): ?> 

<h1>Soy Supervisor</h1>

<?php endif; ?>

<?php if(in_array(Security::$permission, $permissions->modulo["OPERADOR"])): ?> 

<h1>Soy Operador</h1>

<?php endif; ?>





    </div>

</div>



<?php include("../assets/layouts/footer.php"); ?>
