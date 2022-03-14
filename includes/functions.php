<?php

function shorten(string $field, int $value2){
  if (strlen($field) > 200) {                  //if the string in the $field has a value and is > than 200
    $field = substr($field, 0, $value2) . "...";                 //show the first $value2 amount of $field
    echo $field;                                                 //echo said $field
  } else {
    $field = $field; echo $field;                               //else just show content
  }

};
