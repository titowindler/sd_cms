<?php

require("dbconn.php");

if(isset($_POST['addSubjectSubmit'])) {
	insertSubject();
}

function insertSubject() {
	$conn = dbConn();
	$code=$_POST['subject_code'];
	$name=$_POST['subject_name'];

	$sql = "INSERT INTO `subject`(`subject_id`,`subject_code`, `subject_name`) 
	VALUES (NULL,'$code','$name')";
	$result = mysqli_query($conn,$sql);

	if($result == true) {
		$success = "Successfully Added A New Subject";
			header("location:../views/admin/subject.php?s=".$success);
	} else {
		echo "error";
	}
}


if(isset($_POST['updateSubjectSubmit'])){
  subjectUpdate();
}

function subjectUpdate(){
	$conn = dbConn();
	$subjectId 	= $_POST['subject_id'];
	$code 		= $_POST['subject_code'];
	$name 		= $_POST['subject_name'];
	
	$sql = "UPDATE `subject` SET `subject_code`='$code', `subject_name`='$name'  WHERE `subject_id`= '$subjectId' ";
    $result = mysqli_query($conn, $sql);


    if($result){
      $str="Updated subject information";
      header("Location:../views/admin/subject.php?info-msg=".$str);
      }else{
        $str="Error update subject";
        header("Location:../views/admin/subject.php?danger-msg=".$str);
      }
}

?>