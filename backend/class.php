<?php

require("dbconn.php");

if(isset($_POST['addClassSubmit'])) {
	insertClass();
}

function insertClass() {
  $conn = dbConn();

  $class_name = $_POST['class_name'];
  $class_section = $_POST['class_section'];
  $class_gradelevel = $_POST['class_gradelevel'];
  $assign_subject = $_POST['assign_subject'];
  $assign_teacher = $_POST['assign_teacher'];

  $sql = "INSERT INTO class (class_id,class_name,class_gradelevel,class_section,class_subject,class_adviser) VALUES
  (NULL,'$class_name','$class_gradelevel','$class_section','$assign_subject','$assign_teacher')";

  $result = mysqli_query($conn,$sql);

  if($result){
    $str="Added Teacher Account";
    header("Location:../views/admin/class.php?s=".$str);
    }else{
        $str="Error Adding teacher";
        header("Location:../views/admin/class.php?f=".$str);
    }
  }

// soft delete for subject data
if(isset($_POST['updateClassSubmit'])){
  classUpdate();
}

function classUpdate(){
  $conn = dbConn();

  $classId            = $_POST['class_id'];
  $class_name         = $_POST['class_name'];
  $class_section      = $_POST['class_section'];
  $class_gradelevel   = $_POST['class_gradelevel'];
  $assign_subject     = $_POST['assign_subject'];
  $assign_teacher     = $_POST['assign_teacher'];
  
  $sql = "UPDATE `class` SET `class_name` = '$class_name', `class_section` = '$class_section', `class_gradelevel` = '$class_gradelevel', `class_subject` = '$assign_subject' , `class_adviser` = '$assign_teacher' WHERE `class_id`= '$classId' ";
    $result = mysqli_query($conn, $sql);

  if($result){
    $str="Updated Teacher Account";
    header("Location:../views/admin/class.php?s=".$str);
    }else{
       
      $str="Error update teacher information";
      header("Location:../views/admin/class.php?f=".$str);
    }
}

?>