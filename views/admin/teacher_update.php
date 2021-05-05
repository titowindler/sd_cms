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

            $sqlUpdateTeacher = "SELECT * FROM teacher WHERE teacher_id = '$uid' ";
            $resultUpdateTeacher = mysqli_query($connection,$sqlUpdateTeacher);
           
          while($rowUpdateTeacher = mysqli_fetch_assoc($resultUpdateTeacher)) {
            $teacher_id = $rowUpdateTeacher['teacher_id'];
            $teacher_firstname = $rowUpdateTeacher['teacher_first_name'];
            $teacher_middlename = $rowUpdateTeacher['teacher_middle_name'];
            $teacher_lastname = $rowUpdateTeacher['teacher_last_name'];
            $teacher_contactnumber = $rowUpdateTeacher['teacher_contactnumber'];
          }



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
            <li class="nav-item active">
              <a href="teacher.php" class="nav-link"><i class="fas fa-chalkboard-teacher"></i><span>Teacher</span></a>
            </li>
            <li class="nav-item">
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
            <h1>Add Teacher</h1>
           </div>

      
          <div class="section-body">
            <div class="card">
             
              <div class="card-body">

                <div class="container">
                <form method="POST" action="../../backend/teacher.php" id="formTeacher">
                <div class="card-body">

                  <input type="hidden" name="teacher_id" value="<?php echo $teacher_id ?>">

                  <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputFirstName">Teacher First Name</label>
                        <input type="text" class="form-control" value="<?php echo $teacher_firstname ?>" name="teacher_firstname">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputMiddleName">Teacher Middle Name</label>
                        <input type="text" class="form-control" value="<?php echo $teacher_middlename ?>" name="teacher_middlename">
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputLastname">Teacher Last Name</label>
                      <input type="text" class="form-control" value="<?php echo $teacher_lastname ?>" name="teacher_lastname">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputLastname">Teacher Contact Number</label>
                      <input type="text" class="form-control" value="<?php echo $teacher_contactnumber ?>" name="teacher_contactnumber">
                    </div>
                  </div>
                  </div>
             
             
                <button type="submit" class="btn btn-outline-primary" name="updateTeacherSubmit">SUBMIT</button>
                <a href="teacher.php" class="btn btn-outline-danger">CLOSE</a>
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