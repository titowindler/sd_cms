<?php

require("dbconn.php");

if(isset($_POST['addTeacherSubmit'])) {
	insertTeacher();
}

function insertTeacher() {
  $conn = dbConn();
  $t_fname = $_POST['teacher_firstname'];
  $t_lname = $_POST['teacher_lastname'];
  $t_mname = $_POST['teacher_middlename'];
  $contact = $_POST['teacher_contactnumber'];

  // get unique id number 
  $getUniqueSql = "SELECT COUNT(*) FROM teacher
  ";
  $getUniqueResult = mysqli_query($conn,$getUniqueSql);
  $displayUnique = mysqli_fetch_array($getUniqueResult);
  $getUniqueYear = date("Y");
  $username = 'SJCST'.''.$getUniqueYear.''.$displayUnique[0];
  $pass = md5($username);
  

  $sql = "INSERT INTO teacher (teacher_id,teacher_accountnumber,teacher_username,teacher_password,teacher_first_name,teacher_middle_name,teacher_last_name,teacher_contactnumber) VALUES
  (NULL,'$username','$username','$pass','$t_fname','$t_mname','$t_lname','$contact')";

  $result = mysqli_query($conn,$sql);

  if($result){
    $str="Added Teacher Account";
    header("Location:../views/admin/teacher.php?s=".$str);
    }else{
        $str="Error Adding teacher";
        header("Location:../views/admin/teacher.php?f=".$str);
    }
  }

// soft delete for subject data
if(isset($_POST['updateTeacherSubmit'])){
  teacherUpdate();
}

function teacherUpdate(){
  $conn = dbConn();
  $teacherId      = $_POST['teacher_id'];
  $firstname      = $_POST['teacher_firstname'];
  $middlename     = $_POST['teacher_middlename'];
  $lastname       = $_POST['teacher_lastname'];
  $contact        = $_POST['teacher_contactnumber'];
  
  $sql = "UPDATE `teacher` SET `teacher_first_name` = '$firstname', `teacher_middle_name` = '$middlename', `teacher_last_name` = '$lastname', `teacher_contactnumber` = '$contact' WHERE `teacher_id`= '$teacherId' ";
    $result = mysqli_query($conn, $sql);

  if($result){
    $str="Updated Teacher Account";
    header("Location:../views/admin/teacher.php?s=".$str);
    }else{
      $str="Error update teacher information";
      header("Location:../views/admin/teacher.php?f=".$str);
    }
}

?>