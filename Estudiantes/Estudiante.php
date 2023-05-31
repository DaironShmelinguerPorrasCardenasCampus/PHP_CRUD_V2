<?php

require_once("../Config/db.php");
require_once("../Config/Conectar.php");

class Estudiante extends Conectar{
    //atributos se llaman como los campos de la tabla

    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    private $skills;
    private $review;
    private $ser;
    private $ingles;
    private $especialidad;
     //conexion a la base de datos

    //CONSTRUCTOR
    public function __construct($id = 0 , $nombres= "", $direccion = "", $logros = "",$skills = "",$review="",$ser="",$ingles="",$especialidad="", $dbCnx = "")
    {
        $this->id = $id ;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;
        $this->skills = $skills;
        $this->review = $review;
        $this->ser = $ser;
        $this->ingles = $ingles ;
        $this->especialidad = $especialidad;
        parent::__construct($dbCnx);
    }

    //MÉTODOS

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this-> id;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }
    public function getNombres(){
        return $this-> nombres;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function getDireccion(){
        return $this-> direccion;
    }

    public function setLogros($logros){
        $this->logros = $logros;
    }
    public function getLogros(){
        return $this-> logros;
    }

    
    public function setSkills($skills){
        $this->skills = $skills;
    }
    public function getSkills(){
        return $this-> skills;
    }

    public function setReview($review){
        $this->review  = $review ;
    }
    public function getReview(){
        return $this-> review ;
    }

    public function setSer($ser){
        $this->ser  = $ser;
    }
    public function getSer(){
        return $this-> ser;
    }

    public function setIngles($ingles){
        $this->ingles  = $ingles;
    }
    public function getIngles(){
        return $this-> ingles ;
    }

    public function setEspecialidad($especialidad){
        $this->especialidad  = $especialidad;
    }
    public function getEspecialidad(){
        return $this-> especialidad ;
    }
    //INSERTAR
    public function insertData(){
        try {
            $stm = $this -> dbCnx -> prepare("INSERT INTO campers(nombres,direccion,logros,skills,review,ser,ingles,especialidad) values(?,?,?,?,?,?,?,?)");// método para inserytar datos en la database - tabla campers
            $stm -> execute([$this->nombres , $this->direccion, $this->logros, $this->skills,$this-> review ,$this-> ser,$this-> ingles ,$this-> especialidad]);//
        } catch (Exception $e) {
            return $e->getMessage();
        }
       
    
    }
    //SELECCIONAR - RECUPERACIÓN DE FILAS DE LA BASE DE DATOS
    public function selectAll(){ 
        try {
            $stm = $this-> dbCnx -> prepare("SELECT * FROM campers");
            $stm-> execute();
            return $stm-> fetchAll();//recurso de PDO
        } catch (Exception  $e) {
            return $e->getMessage();
        }
    }
    //ELIMINAR
    public function delete(){
        try {
            $stm = $this-> dbCnx -> prepare("DELETE FROM campers WHERE  id = ?");
            $stm-> execute([$this->id]);
            return $stm-> fetchAll();
            echo "<script>alert('USUARIO BORRADO EXITOSAMENTE DE LA DATABASE');document.location='estudiantes.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //ACTUALIZAR PARTE 1 - AQUÍ ES DONDE TRAEMOS LOS DATOS A LA PÁGITA EDITARESTUDIANTES.PHP
    public function selectOne(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM campers WHERE id = ?");
            $stm-> execute([$this->id]);
            return $stm-> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //ACTUALIZAR PARTE 2 - AQUÍ ACTUALIZAMOS ESOS DATOS EN LA DATABASE
    public function update(){
        try {
            $stm = $this -> dbCnx -> prepare("UPDATE campers SET nombres = ? , direccion = ?, logros = ?, skills = ?, review = ?, ser = ?, ingles = ?, especialidad = ?  WHERE id = ?");
            $stm-> execute([$this->nombres,$this->direccion,$this->logros,$this->skills,$this->review,$this->ser,$this->ingles,$this->especialidad,$this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
}








?>