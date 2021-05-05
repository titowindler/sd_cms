<?php

require("dbconn.php");

if(isset($_POST['addListOfStudentAddSubmit'])) {
	insertStudentList();
}

function insertStudentList() {
	$conn = dbConn();
	$class_id   = $_POST['classID'];
	$student_id = $_POST['add_students'];
	$student_grade = '0';

	$fetch = "SELECT * FROM studentlist WHERE (`classID` LIKE '$class_id') AND (`studentID` LIKE '$student_id')";
	$fetchResult = mysqli_query($conn, $fetch);
    $fetchNumRows = mysqli_num_rows($fetchResult);

   if($fetchNumRows < 1) {
	$sql = "INSERT INTO `studentlist`(`studentlist_id`,`classID`, `studentID`) 
	VALUES (NULL,'$class_id','$student_id')";
	$result = mysqli_query($conn,$sql);



	if($result == true) {
		$success = "Successfully Added A New Subject";
			header("location:../views/admin/list_of_student.php?cid=$class_id&s=".$success);
	} else {
		echo "error";
	  }
	}else{
	  $alert = "Invalid! You cannot add the same student twice";
	  header("location:../views/admin/list_of_student.php?cid=$class_id&invalid=".$alert);
	}
  }



if(isset($_GET['remove'])){
  removeStudentList();
}

function removeStudentList(){
	$conn = dbConn();
	$studentlist_id 	= $_GET['remove'];
	$class_id 		    = $_GET['cid'];
	
	$sql = "DELETE FROM studentlist WHERE studentlist_id = '$studentlist_id' ";
    $result = mysqli_query($conn, $sql);


    if($result){
      $str="Updated subject information";
      header("Location:../views/admin/list_of_student.php?cid=$class_id&info-msg=".$str);
      }else{
        $str="Error update subject";
        header("Location:../views/admin/list_of_student.php.php?danger-msg=".$str);
      }
}

if(isset($_POST['addFinalGradeSubmit'])){
  finalGradeStudentList();
}

function finalGradeStudentList(){
	$conn = dbConn();
	$cid = $_POST['class_id'];
	$studentlist_id 	= $_POST['studentlist_id'];
	$grade 			    = $_POST['final_grade'];
	
	$sql = "UPDATE studentlist SET student_grade = '$grade' WHERE studentlist_id = '$studentlist_id' ";
    $result = mysqli_query($conn, $sql);


    if($result){
      $str="Updated subject information";
      header("Location:../views/teacher/view_list_of_student.php?cid=$cid&info-msg=".$str);
      }else{
        $str="Error update subject";
        header("Location:../views/teacher/view_list_of_student.php?danger-msg=".$str);
      }
}


?>