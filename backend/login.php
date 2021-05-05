<?php 

require("dbconn.php");
session_start();

$connection = dbConn();

if(isset($_POST['login'])) {

$found = 0;
$secret = "test"; // change password soon
$str = "Invalid Username or Password!";

if(isset($_POST['username']) && isset($_POST['password'])){
  $user = $_POST['username'];
  $pass = md5($_POST['password']);
 
  //Fetches from Teachers
   $sql = "SELECT * FROM teacher WHERE (`teacher_username` LIKE '$user') AND (`teacher_password` LIKE '$pass')";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['teacher_id'] = $row['teacher_id'];
        $_SESSION['uName'] = $row['teacher_first_name'].' '.$row['teacher_middle_name'].' '. $row['teacher_last_name'];
        $found = 1;
        header('location:../views/teacher/dashboard.php'); 
    }
        
  //Fetches from student
    $sql = "SELECT * FROM student WHERE (`student_username` LIKE '$user') AND (`student_password` LIKE '$pass')";
    $result = mysqli_query($connection, $sql); 
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['uName'] = $row['student_first_name'].' '.$row['student_middle_name'].' '.$row['student_last_name'];
        $found = 1;
        header('location:../views/student/dashboard.php');
    }

    //Fetches from admin
    $sql = "SELECT * FROM admin WHERE (`admin_username` LIKE '$user') AND (`admin_password` LIKE '$pass')";
    $result = mysqli_query($connection, $sql); 
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = $secret;
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['uName'] = $row['admin_first_name'].' '.$row['admin_middle_name'].' '.$row['admin_last_name'];
        $found = 1;
        header('location:../views/admin/dashboard.php');
        }
    if($found != 1){
      $alert = "Invalid Account";
      header('location:../index.php?invalid='.$alert);
    } 
  }
}

?>

