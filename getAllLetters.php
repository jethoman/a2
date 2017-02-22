<?php

  require('tools.php');
  require('Form.php');
  require('wordValue.php');

  use DWA\Form;

  $WordValue = new WordValue('data/alphabet.json');
  $scrabVal = 0;

  $form = new Form($_GET);

  $scrab = sanitize($form->get('word',''));

  $bonus = $form->get('bonus','');

  $bingo = $form->get('bingo','');
  $errors =[];
  if($form->isSubmitted())
  {
    $errors = $form->validate([
      'word' => 'required|alpha'
    ]);


    $scrabEntry = $WordValue->calcWordValue($scrab,$bonus,$bingo);
  }

?>
