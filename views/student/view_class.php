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

            session_start();

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
              <a href="view_class.php" class="nav-link"><i class="fas fa-chalkboard"></i><span>View Class</span></a>
            </li>
            </ul>
        </div>
      </nav>

  <!-- Main Content -->
      <div class="main-content" style="min-height: 566px;">
        <section class="section">
          <div class="section-header">
            <h1>View Class</h1>
          </div>

      
          <div class="section-body">
            <div class="card">
             
              <div class="card-body">
                 <div class="table-responsive">
                    <table class="table table-bordered">
                       <thead class="thead-light">
                          <tr>
                            <th>Class Name</th>
                            <th>Class Grade Level</th>
                            <th>Assign Teacher</th>
                            <th>Subject Name</th>
                          </tr>
                        </thead>
                        <tbody>

                      <?php

                      $sqlClassListStudent = "SELECT * FROM studentlist
                      JOIN class ON studentlist.classID = class.class_id 
                      JOIN student ON studentlist.studentID = student.student_id
                      JOIN subject ON class.class_subject = subject.subject_id
                      JOIN teacher ON class.class_adviser = teacher.teacher_id
                      WHERE  studentlist.studentID = '$_SESSION[student_id]'
                      ";
                      $resultClassListStudent = mysqli_query($connection,$sqlClassListStudent);

                      while($rowClassListStudent = mysqli_fetch_assoc($resultClassListStudent)) {

                        $studentlist_id = $rowClassListStudent['studentlist_id'];
                        //$student_grade = $rowClassListStudent['student_grade'];

                        $class_id   = $rowClassListStudent['class_id'];
                        $class_name = ucfirst($rowClassListStudent['class_name']);
                        $class_gradelevel = ucfirst($rowClassListStudent['class_gradelevel']);
                        $class_section = ucfirst($rowClassListStudent['class_section']);
                        
                        //
                        $subject_code = strtoupper($rowClassListStudent['subject_code']);
                        $subject_name = ucfirst($rowClassListStudent['subject_name']);

                        //
                        $teacher_firstname = ucfirst($rowClassListStudent['teacher_first_name']);
                        $teacher_middlename = ucfirst($rowClassListStudent['teacher_middle_name']);
                        $teacher_lastname = ucfirst($rowClassListStudent['teacher_last_name']);

                        //
                        $student_accountnumber = $rowClassListStudent['student_accountnumber'];
                        $student_firstname = ucfirst($rowClassListStudent['student_first_name']);
                        $student_middlename = ucfirst($rowClassListStudent['student_middle_name']);
                        $student_lastname = ucfirst($rowClassListStudent['student_last_name']);

            
                        ?>


                        <tr>
                          <td><?php echo $class_name ?> - <?php echo $class_section ?></td>
                          <td><?php echo $class_gradelevel ?></td>
                          <td><?php echo $teacher_firstname ?> <?php echo $teacher_middlename[0] ?>. <?php echo $teacher_lastname ?></td>
                          <td><?php echo $subject_name?></td>
                       
                        </tr>

                      <?php } ?>
                   
                        </tbody>
                      </table>
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