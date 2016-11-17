<?php

class ia
{

//propiedades

  public $mapaCol="4";
  public $mapaFil="4";
  public $numNaves="3";
  public $navesHumano=[];
  public $navesIA=[];






//GETTERS
  public function getNave() {
    return $this->numNaves;
  }
  public function getnavesIA(){
    $this->NavesIA[1]["fil"]=1;
    $this->navesIA[1]["col"]=1;
     return $this->navesIA;


  }
  public function getNavesHumano(){
    return $this->navesHumano;
  }

  public function getFila() {
    return $this->mapaFil;
  }

  public function getcolumna() {
    return $this->mapaCol;

  }


//SETTERS

  public function setMapaCol($mapaCol){
      if($mapaCol>3 ){
         $this->mapaCol = 3;

      }elseif ($mapaCol<0) {
        $this->mapaCol = 0;

      }else{
        $this->mapaCol = $mapaCol;
      }

  }

  public function setMapaFil($mapaFil){
      if($mapaFil>3 ){
         $this->mapaFil = 3;

 }    elseif ($mapaFil<0) {
        $this->mapaFil = 0;

 }    else{
        $this->mapaFil = $mapaFil;
  }

  }

  public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }

  public function setNavesIA($id,$tipo,$col,$fil){
    $this->navesIA[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ]:
  }

//RAMDOM
  public function randompos() {
	$this->columna=rand(0,3);

	$this->fila=rand(0,3);
  }


}

?>
