<?php

if(isset($_POST['submit'])){
  include_once 'dp.php';

  $mealname = mysqli_real_escape_string($conn, $_POST['meal_name']);
  $mealtype = mysqli_real_escape_string($conn, $_POST['meal_type']);
  $mealdate = mysqli_real_escape_string($conn, $_POST['meal_date']);
  $mealitem1 = mysqli_real_escape_string($conn, $_POST['meal_item_1']);
  $mealitem2 = mysqli_real_escape_string($conn, $_POST['meal_item_2']);
  $mealitem3 = mysqli_real_escape_string($conn, $_POST['meal_item_3']);
  $mealitem4 = mysqli_real_escape_string($conn, $_POST['meal_item_4']);
  $mealitem5 = mysqli_real_escape_string($conn, $_POST['meal_item_5']);

  if(empty($mealname) || empty($mealtype) || empty($mealdate) || empty($mealitem1 || empty($mealitem2) || empty($mealitem3) || empty($mealitem4) || empty($mealitem5) ){
    header("Location: ../newmeal.php?field=empty");
    exit();
  } else {
    header("Location: ..newmeal.php?notset");
  }
}
