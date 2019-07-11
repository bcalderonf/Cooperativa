<?php


 require_once("../assets/config.php");

?>
<?php include("../assets/layouts/header.php"); ?>

<?php if(in_array(Security::$permission, $permissions->modulo["FIEL"])): ?> 

<div class="container">


    <div class="col-md-12"><?php

        View::showViewFromTable("FIEL", "Cliente Fidelizados", Array("photo" => false, "detail" => true));

        ?></div>



</div>

<?php endif; ?>

<?php include("../assets/layouts/footer.php"); ?>
