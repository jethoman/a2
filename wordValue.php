<?php

  class WordValue {

  private $alphabet;
  private $scrabVal;

  public function __construct($pathToJson){
    $alphabetJson = file_get_contents($pathToJson);
    $this->alphabet = json_decode($alphabetJson, true);
  }

  public function calcWordValue(String $scrab, $bonus, $bingo){

    $scrabs = str_split($scrab);
    $wordSize = sizeof($scrabs);
    foreach ($scrabs as $entries => $entry) {
      #cycling through my entered word
       foreach ($this->alphabet as $letters =>$letter) {
            # since all of my alphabet is all caps I am converting my entry
             if (strtoupper($entry)==$letters){
               $this->scrabVal = $this->scrabVal + $letter['value'];

               continue;
             }
       }

    }
    if($bonus == 'double')
    {
      $this->scrabVal = $this->scrabVal * 2;
    } elseif($bonus == 'triple') {
      $this->scrabVal = $this->scrabVal * 3;
    }
    if($bingo == 'yes' and $wordSize >= 7)
    {
      $this->scrabVal = $this->scrabVal + 50;
    }
    return $this->scrabVal;


  } #end of function

} #end of class


 ?>
