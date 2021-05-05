<!-- Header Links -->
  <?php require("menu-header.php");?>
<!-- -->

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar" style="background-color:rgba(40, 102, 199, 0.97)">
        <a href="dashboard.php" class="navbar-brand sidebar-gone-hide text-capitalize">CLASS MANAGEMENT SYSTEM</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
      
       <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          
            <?php require("menu-listdropdown.php"); 

            require("../../backend/dbconn.php");

            $connection = dbConn();

            $class_id = $_GET['cid'];

            ?>
          <!-- -->

        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link"><i class="fas fa-columns"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="teacher.php" class="nav-link"><i class="fas fa-chalkboard-teacher"></i><span>Teacher</span></a>
            </li>
            <li class="nav-item">
              <a href="student.php" class="nav-link"><i class="fas fa-user-friends"></i><span>Student</span></a>
            </li>
             <li class="nav-item">
              <a href="subject.php" class="nav-link"><i class="fas fa-book-open"></i><span>Subject</span></a>
            </li>
            <li class="nav-item active">
              <a href="class.php" class="nav-link"><i class="fas fa-chalkboard"></i><span>Class</span></a>
            </li>  
          </ul>
        </div>
      </nav>

        <!-- Main Content -->
      <div class="main-content" style="min-height: 566px;">
        <section class="section">
          <div class="section-header">
            <h1>Add Students to Class Mango</h1>
           </div>

      
          <div class="section-body">
            <div class="card">

             
              <div class="card-body">

                <div class="container">
                <form method="POST" action="../../backend/studentlist.php" id="formStudent">
                <div class="card-body">

                  <input type="hidden" value="<?php echo $class_id ?>" name="classID">


                  <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputAddStudents">Add Students</label>
                           <select class="form-control" id="add_assign_subject"  name="add_students">
                              <option hidden value="">Add Students</option>


                          <?php



                      $sqlStudent = "SELECT * FROM student 
                      ";
                      $resultStudent = mysqli_query($connection,$sqlStudent);

                      while($rowStudent = mysqli_fetch_assoc($resultStudent)) {

                        //
                        $student_id = $rowStudent['student_id'];
                        $student_accountnumber = $rowStudent['student_accountnumber'];
                        $student_firstname = ucfirst($rowStudent['student_first_name']);
                        $student_middlename = ucfirst($rowStudent['student_middle_name']);
                        $student_lastname = ucfirst($rowStudent['student_last_name']);

            
                        ?>
                              <option value="<?php echo $student_id ?>"><?php echo $student_firstname ?> <?php echo $student_middlename[0] ?>. <?php echo $student_lastname ?> </option>

                            <?php } ?>

                            </select>
                      </div>
                    </div>
                  
                  </div>
             
             
                <button type="submit" class="btn btn-outline-primary" name="addListOfStudentAddSubmit">SUBMIT</button>
                <a href="list_of_student.php?cid=<?php echo $class_id?>" class="btn btn-outline-danger">CLOSE</a>
              </form>
               </div>
                </div>


                <div class="card-footer bg-whitesmoke"> </div>
            </div>
          </div>
         </section>
      </div>


    </div>
    <br>
      <footer class="main-footer" style="background-color:rgba(40, 102, 199, 0.97)">
        <div class="container">
        <div class="footer-left text-white">
          © 2020 St. Joseph Christian School
        </div> 
      </div>
      </footer>
    </div>


   <!-- Menu for Footer Links -->
    <?php require("menu-footer.php"); ?>
    <!-- -->


  </body>
</html>