<?php

 require_once("../assets/config.php");

?>
<?php include("../assets/layouts/header.php"); ?>

<?php if(in_array(Security::$permission, $permissions->modulo["PRODUCTOS"])): ?> 

<div class="container">


    <div class="col-md-12"><?php

        View::showViewFromTable("PRODUCTO", "Productos de Cooperativa", Array("photo" => false, "detail" => true));

        ?></div>

</div>

<?php endif; ?>

<?php include("../assets/layouts/footer.php"); ?>
