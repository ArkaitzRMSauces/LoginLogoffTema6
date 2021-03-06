<?php
    if(!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){ // si no se ha logueado le usuario
        header('Location: index.php'); // redirige al login
        exit;
    }
    if(isset($_REQUEST['borrarUsuario'])){
        UsuarioPDO::borrarUsuario($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO']->getCodUsuario());
        session_destroy();
        header("Location: index.php");
        exit;
    }
    if(isset($_REQUEST['cancelar'])){
        $_SESSION['paginaEnCurso'] = $controladores['inicio'];
        header("Location: index.php");        
        exit;
    }
    $vistaEnCurso = $vistas['borrar']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
    require_once $vistas['layout'];
?>