<?php

 require_once("../assets/config.php");

?>
<?php include("../assets/layouts/header.php"); ?>


<div id="CLIENTE-panel" class="panel-collapse collapse in">

                    <div class="panel-body">

                        <div class="col-md-12 text-center">

                            <div class="form-group">
                                <br>
                                
                                <button id="exect" abrir="subedatos4.py" type="button" class=" btn btn-default btn-md btn-md">
                                    <span class="glyphicon glyphicon" aria-hidden="true"> </span> carga masiva de datos
                                    <?php exec("python carga.py"); ?>

                                </button>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="container">


    <div class="col-md-12"><?php

        View::showViewFromTable("DATAPRUEBA", "Carga de datos", Array("photo" => false, "detail" => true));

        ?></div>

</div>


<?php include("../assets/layouts/footer.php"); ?>
