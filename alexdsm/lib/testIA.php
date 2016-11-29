<?php


/**
 *
 */
class testIA
{
public $columna='4';
public $fila='2';
public $tipo='';
//get
public function getColumna() {
 return $this->columnas;

}

public function getfila() {
 return $this->fila;


//set

public function setFila($fil) {
$this->fila=$fil;

}

public function setColumna($col){
$this->columnas=$col;
 }

//arrays

public function setNave1($tipo,$col,$fil){
  $this->nave1[]=[
    $tipo:'nodriza',
    $col:'0',
    $fil:'0',
  ];
}

public function setNave2($tipo,$col,$fil){
  $this->nave2[]=[
    $tipo:'destructor',
    $col:'1',
    $fil:'0'
  ];
}











 ?>
