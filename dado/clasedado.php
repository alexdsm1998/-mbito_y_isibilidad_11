<?php

class jugadorDado
{
//atritubos en privado
private $minNumDado=0;
private $maxNumDado=12;
//Setters
public function setminNumDado($minNumDado){
  $this->minNumdado=$minNumDado;
}
public function setmaxNumDado($maxNumDado){
  $this->maxNumDado=$maxNumDado;
}
//Getters
public function getminNumDado(){
  return $this->minNumDado;
}

public function getmaxNumDado(){
  return $this->maxNumDado;
}

public function tirarDado(){
  
  return $this->tirarDado=rand($this->minNumDado,$this->maxNumDado);
}


}
 ?>
