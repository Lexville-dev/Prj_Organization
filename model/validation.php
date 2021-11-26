<?php

//Validation of Title
  $input_title = trim($_POST["Title"]);
  if(empty($input_title)){
      $Title_err = "Please put a title.";
  } elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[A-Za-z0-9-_.\s]+$/")))){
      $Title_err = "Please enter a valid title";
  } else{
      $Title = $input_title;
    }

//Validation of Name
  $input_name = trim($_POST["Name"]);
  if(empty($input_name)){
      $Name_err = "Please put your name.";
  } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[A-Za-z\s]+$/")))){
      $Name_err = "Please enter a valid Name";
  } else{
      $Name = $input_name;
    }

//Validation of Contact Number
  $input_ConNum = trim($_POST["Contact Number"]);
  if(!ctype_digit($input_ConNum)){
      $Contact_Number_err = "Please enter a valid phone number";
  } else{
      $Contact_Number = $input_ConNum;
    }

//Validation of Email Address
  $input_email = trim($_POST["Email"]);
  if(empty($input_email)){
      $Email_err = "Please put your Email Address.";
  } elseif(!filter_var($input_email, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+.[A-Za-z]$/")))){
      $Email_err = "Please enter a valid Email Address";
  } else{
      $Email = $input_email;
    }

//Validation of Priority


//Validation of Content
  $input_content = trim($_POST["Content"]);
  if(empty($input_content)){
      $Content_err = "Why is your request empty?";
  } else{
      $Content = $input_content;
    }
