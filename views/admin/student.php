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
            <h1>Student</h1>
          </div>

      
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                 <h4></h4>
                  <div class="card-header-action">
                    <a href="student_add.php" class="btn btn-success btn-sm">Add Student</a>
                    </div>
              </div>

              <div class="card-body">
                 <div class="table-responsive">
                    <table class="table table-bordered">
                       <thead class="thead-light">
                          <tr>
                            <th>Student Account</th>
                            <th>Student Name</th>
                            <th>Student Contact Number</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                      <?php 

                      $sqlStudent = "SELECT * FROM student";
                      $resultStudent = mysqli_query($connection,$sqlStudent);

                      while($rowStudent = mysqli_fetch_assoc($resultStudent)) {

                        $student_id = $rowStudent['student_id'];
                        $student_accountnumber = $rowStudent['student_accountnumber'];
                        $student_first_name = ucfirst($rowStudent['student_first_name']);
                        $student_middle_name = ucfirst($rowStudent['student_middle_name']);
                        $student_last_name = ucfirst($rowStudent['student_last_name']);
                        $student_contactnumber = $rowStudent['student_contactnumber'];
                        

                      ?>
                      
                        <tr>
                          <td><?php echo $student_accountnumber ?></td>
                          <td><?php echo $student_first_name ?> <?php echo $student_middle_name[0] ?>. <?php echo $student_last_name ?></td>
                          <td><?php echo $student_contactnumber ?></td>
                          
                          <td>
                            <a href="student_update.php?uid=<?php echo $student_id ?>" class="btn btn-primary btn-sm text-white"> UPDATE</a> 
                          </td>
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