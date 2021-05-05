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
          
          <!-- Menu Dropdodwn for changepassword, profile, settings and logout -->
            <?php require("menu-listdropdown.php"); 

            require("../../backend/dbconn.php");
            $connection = dbConn();


            $uid = $_GET['uid'];

            $sqlUpdateStudent = "SELECT * FROM student WHERE student_id = '$uid' ";
            $resultUpdateStudent = mysqli_query($connection,$sqlUpdateStudent);
           
          while($rowUpdateStudent = mysqli_fetch_assoc($resultUpdateStudent)) {
            $student_id = $rowUpdateStudent['student_id'];
            $student_firstname = $rowUpdateStudent['student_first_name'];
            $student_middlename = $rowUpdateStudent['student_middle_name'];
            $student_lastname = $rowUpdateStudent['student_last_name'];
            $student_contactnumber = $rowUpdateStudent['student_contactnumber'];
          }

          ?>

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
            <li class="nav-item active">
              <a href="student.php" class="nav-link"><i class="fas fa-user-friends"></i><span>Student</span></a>
            </li>
             <li class="nav-item">
              <a href="subject.php" class="nav-link"><i class="fas fa-book-open"></i><span>Subject</span></a>
            </li>
            <li class="nav-item">
              <a href="class.php" class="nav-link"><i class="fas fa-chalkboard"></i><span>Class</span></a>
            </li>  
          </ul>
        </div>
      </nav>

        <!-- Main Content -->
      <div class="main-content" style="min-height: 566px;">
        <section class="section">
          <div class="section-header">
            <h1>Add Student</h1>
           </div>

      
          <div class="section-body">
            <div class="card">
             
              <div class="card-body">

                <div class="container">
                <form method="POST" action="../../backend/student.php" id="formStudent">
                <div class="card-body">

                  <input type="hidden" value="<?php echo $student_id ?>" name="student_id">

                  <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputFirstName">Student First Name</label>
                        <input type="text" class="form-control" value="<?php echo $student_firstname ?>" name="student_firstname">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputMiddleName">Student Middle Name</label>
                        <input type="text" class="form-control" value="<?php echo $student_middlename ?>" name="student_middlename">
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputLastname">Student Last Name</label>
                      <input type="text" class="form-control" value="<?php echo $student_lastname ?>" name="student_lastname">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputLastname">Student Contact Number</label>
                      <input type="text" class="form-control" value="<?php echo $student_contactnumber ?>" name="student_contactnumber">
                    </div>
                  </div>
                  </div>
             
             
                <button type="submit" class="btn btn-outline-primary" name="updateStudentSubmit">SUBMIT</button>
                <a href="student.php" class="btn btn-outline-danger">CLOSE</a>
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