<?php
include 'conec/conec.php';
session_start();    
if ((isset($_SESSION['Cedula'])) && (isset($_SESSION['Tipo']))){
    if (isset($_SESSION['Tipo']) == "Administrador"){
        include 'use/sidebarAdmin.php';
    }else{
        include 'use/sidebarUser.php';
    }
}
include 'use/head.php'; 
?>
<!-- carrucel IMAGENES EM CARUCES un cambio de mierda
-->
<div class="limiter" >
    <div class="container-login100" style="background:linear-gradient(30deg, #ef0d0d, #490000, #2e2222)">
        <div class="wrap-login100" >
            <!-- carrucel -->
            <div class="col-lg-6 col-sm-4 d-none d-md-block d-lg-block mt-4">
                <div class="carousel slide p-t-160" data-ride="carousel" id="carouselExampleIndicators">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators">
                        </li>
                        <li data-slide-to="1" data-target="#carouselExampleIndicators">
                        </li>
                        <li data-slide-to="2" data-target="#carouselExampleIndicators">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="Responsive image" class=" rounded img-fluid" src="img/p1.jpg" style="height: 50vh">
                            </img>
                        </div>
                        <div class="carousel-item">
                            <img alt="Responsive image" class="rounded img-fluid" src="img/p2.jpg" style="height: 50vh">
                            </img>
                        </div>
                        <div class="carousel-item">
                            <img alt="Responsive image" class="rounded img-fluid" src="img/p3.jpg" style="height: 50vh">
                            </img>
                        </div>
                    </div>
                    <a class="carousel-control-prev p-t-160" data-slide="prev" href="#carouselExampleIndicators" role="button">
                        <span aria-hidden="true" class="carousel-control-prev-icon">
                        </span>
                        <span class="sr-only">
                            Previous
                        </span>
                    </a>
                    <a class="carousel-control-next p-t-160" data-slide="next" href="#carouselExampleIndicators" role="button">
                        <span aria-hidden="true" class="carousel-control-next-icon">
                        </span>
                        <span class="sr-only">
                            Next
                        </span>
                    </a>
                </div>
            </div>
            <!-- FIN carrucel -->    
            <form autocomplete="off" method="post" id="formLg">
                <div class="">
                    <img alt="" class="mx-auto rounded img-fluid d-block" src="img/img-01.png" style="height: 25vh">
                    </img>
                </div>
                <br/>
                <br/>   
                <span class="login100-form-title font-weight-bold">
                    Login
                </span>
                 <div class="wrap-input100 validate-input">
                    <input class="input100" id="username" type="text" name="Cedula" minlength="10" maxlength="10" onkeypress="return soloNumeros(event);" placeholder="Cédula" required type="text" required>
                        <span class="focus-input100">
                        </span>
                        <span class="symbol-input100">
                            <i aria-hidden="true" class="fas fa-user">
                            </i>
                        </span>
                    </input>
                </div>
                <div class="wrap-input100 validate-input" data-validate="">
                    <input class="input100" id="password"   type="password" name="passlg"  placeholder="Contraseña"  maxlength="25" required>
                        <span class="focus-input100">
                        </span>
                        <span class="symbol-input100">
                            <i aria-hidden="true" class="fa fa-lock">
                            </i>
                        </span>
                    </input>
                </div>    
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="Login" type="submit" >
                        Login
                    </button>
                </div>
            </form>
        </div> 
        </hr></br>
        <div class="justify-content-center font-weight-bold wrap-footer">
            <p class="p-letras-foot">
                Universidad Técnica de Ambato
            </p>
            <p class="p-letras-foot">
                Dirección: Av. Colombia y Chile - Ambato,Ecuador - Teléfono: (03)-2521081 - (03)-2523039
            </p>
        </div>
    </div>
</div>
<script src="js/main.js">
</script>
<script src="js/popper.min.js">
</script>
<script src="js/bootstrap.min.js">
</script>
<script src="js/all.js">
</script>

  </body>
</html>
