<?php

if(isset($_POST['registrarse'])){

    require_once("RegistroUser.php");
    $registrar = new RegistrarUser();

    $registrar->setIdCamper($_POST['camper']);
    $registrar->setEmail($_POST['email']);
    $registrar->setUsername($_POST['username']);
    $registrar->setPassword($_POST['password']);



    if($registrar->checkUser($_POST['email'])){
        echo "<script> alert('EL USUARIO YA EXISTE EN LA BASE DE DATOS');document.location = 'loginRegister.php'</script>";
    }else{
        $registrar->InsertData();
        echo "<script> alert('USUARIO REGISTRADO EXITOSAMENTE');document.location = '../Home/home.php'</script>";
    }
}







?>