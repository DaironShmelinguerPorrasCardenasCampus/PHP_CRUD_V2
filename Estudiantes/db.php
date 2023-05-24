<!-- CREAMOS LAS CONSTANTES GLOBALES PARA LA CONECCIÓN  -->

<?php
if(!defined("DB_TYPE")){ // SI LA BD NO EXISTE, LA CREA
    define("DB_TYPE", "mysql"); //TIPO DE LA BASE DE DATOS
}

if(!defined("DB_HOST")){
    define("DB_HOST", "localhost");
}

if(!defined("DB_NAME")){
    define("DB_NAME", "campus");
}

if(!defined("DB_USER")){
    define("DB_USER", "campus");
}

if(!defined("DB_PWD")){
    define("DB_PWD", "campus2023");
}

?>