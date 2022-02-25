<?php

function shorten($field, int $value2){

  $field = $field;
  $value2 = $value2;

  if (strlen($field) > 200) {                                 //if the string in the $content row then
    $field = substr($field, 0, $value2) . "..."; echo $field; //show the first 256 charecters of Content

  } else {
    $field = $field; echo $field;                             //else just show content
  }

};
