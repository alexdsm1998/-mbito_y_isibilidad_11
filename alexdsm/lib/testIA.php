<?php


/**
 *
 */
class testIA
{
public $columna='4';
public $fila='2';
public $tipo='';

//nave_humanos
  public $navesHumano=[];


//get
public function getColumna() {
 return $this->columnas;

}

public function getfila() {
 return $this->fila;

}
//set

public function setFila($fil) {
$this->fila=$fil;

}

public function setColumna($col){
$this->columnas=$col;
 }

 public function setnumNavesHum(){
   $this->numNavesHum= -3;
 }

//arrays
public $navesHumano=[
1=>["tipo"=>"nodriza",
    "col"=>0,
    "fil"=>0],
2=>["tipo"=>"destructor",
    "col"=>1,
    "fil"=>0],
 ];
}
 ?>
