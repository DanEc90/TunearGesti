<?php
include 'conec/conec.php';
session_start();    
if ((isset($_SESSION['Cedula'])) && (isset($_SESSION['Tipo']))){
    $tipo = $_SESSION['Tipo'];
    if ($tipo == "Administrador"){
        include 'use/sidebarAdmin.php';
    }else{
        include 'use/sidebarUser.php';
    }
    include 'use/head.php'; 
    include 'use/boxes.php';
    ?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<main class="col-md-10 float-left col px-5 pl-md-2 pt-2 main mt-4 tipografia">
<!-- AQUI DEBE IR EL RESTO DE CODIGO DE LA PAGINA ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="container-fluid" id="nav">
        <h5 style="color: #7f8c8d">
                <i class="fab fa-pagelines" >
                </i>
                Gestión Alimentos Cerdos
            </h5>
            <div class="container-fluid d-flex justify-content-center">
                <!-- Button trigger modal -->
                <button type="button" class="boton btn btn-primary" data-toggle="modal" data-target="#modal_new_al">
                    <i class="fa fa-plus girar">
                    </i>
                    Agregar Registro
                </button>

                <!-- Modal Insertar cerdo-->
                <div class="modal fade" id="modal_new_al" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" >
                                <h5 class="modal-title" id="exampleModalLongTitle" >Nuevo Registro - Alimento Cerdos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form autocomplete="off" enctype="multipart/form-data" id="form_new_al" method="post">
                                    <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Alimento
                                </label>
                                <div class="col-lg-7 mx-auto">
                                    <input class="form-control" name="NomAliEta" id="NomAliEta" required="" type="text" minlength="4" maxlength="50">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Porción (Gr/Día)
                                </label>
                                <div class="col-lg-7 mx-auto">
                                    <input class="form-control" name="CantAliEta" id="CantAliEta" required="" type="text" minlength="1" maxlength="4" onkeypress="return soloNumeros(event);">
                                    </input>
                                </div>
                            </div>                                                      
                                 
                                    </br>
                                    </br>
                                    <div class="modal-footer">
                                        <button type="button" class="boton btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="boton btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Editar Peso-->
        <div class="modal fade" id="modal_edit_al" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Editar Área</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>                            
                        </button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off" enctype="multipart/form-data" id="form_edit_al" method="post">
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    <div class="container-fluid table-responsive" id="tabla">
        <table class="table text-center table-light table-hover" id="table">
            <thead style="background-color: #6c7ae0">
                <tr>
                    <th>
                        Alimento
                    </th>
                    <th>
                        Porción
                    </th>                    
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php

                $get = $db->query("SELECT * FROM alimentoetapa WHERE NomAliEta != 'Indefinida' ");
                $res = $get->fetchAll(PDO::FETCH_OBJ);
                foreach ($res as $n) {

                        ?>
                        <tr idal="<?php echo $n->IdAliEta; ?>">
                            <td>
                                <?php echo $n->NomAliEta; ?>
                            </td>
                            <td>
                                <?php echo $n->CantAliEta; ?> (Gr/Día)
                            </td>                                                        
                            <td>
                                <div class="dropdown">
                                    <button class="boton btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                        <i class="fas fa-cog mr-1">
                                        </i>
                                        Opción
                                        <span class="caret">
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <h6 class="dropdown-header">
                                            Registro:
                                        </h6>
                                        <li>
                                            <a class="dropdown-item btn_edit_ali">
                                                <i class="fas fa-edit mr-2">
                                                </i>
                                                Editar
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item btn_elim_ali">
                                                <i class="fas fa-trash-alt mr-2">
                                                </i>
                                                &nbsp;Borrar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
            </tbody>
        </table>
    </div>
    <!-- HASTA AQUI EL RESTO DEL CODIGO///////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////////////////// -->
</main>
<?php
}else{
    ?>
    <script> 
        window.location="index.php"; 
    </script>
    <?php
}
?>
<script src="js/popper.min.js">
</script>
<script src="js/main.js">
</script>
<script src="js/bootstrap.min.js">
</script>
<script src="js/fontawesome-all.js">
</script>