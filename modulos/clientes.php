<?php


 require_once("../assets/config.php");

?>
<?php include("../assets/layouts/header.php"); ?>

<?php if(in_array(Security::$permission, $permissions->modulo["CLIENTES"])): ?> 

<div class="container">


    <div class="col-md-12"><?php

        View::showViewFromTable("CLIENTE", "Manejo de Clientes", Array("photo" => true, "detail" => true), "table_cliente");

        ?></div>



</div>



<h1>Soy AMISNISTRADOR</h1>

<?php endif; ?>

<script type="text/javascript">

<?php if(!in_array(Security::$permission, $permissions->modulo["ADMINS"])): ?>
$("#saldo").attr("disabled", true);

<?php endif; ?>

</script>


<?php include("../assets/layouts/footer.php"); ?>
