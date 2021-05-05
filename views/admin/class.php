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
            <h1>Class</h1>
            </div>

   
        <div class="section-body">
            <div class="card">
              <div class="card-header">
                 <h4></h4>
                  <div class="card-header-action">
                    <a href="class_add.php" class="btn btn-success btn-sm">Add Class</a>
                  </div>
              </div>

            <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered" id="table-subject">
                        <thead class="thead-light">
                          <tr>
                            <th>Class Name</th>
                            <th>Class Grade Level</th>
                            <th>Assign Subject</th>
                            <th>Assign Teacher</th>
                            <th>List of Students</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                      <?php 

                      $sqlClass = "SELECT * FROM class
                      JOIN subject ON class.class_subject = subject.subject_id 
                      JOIN teacher ON class.class_adviser = teacher.teacher_id
                      ";
                      $resultClass = mysqli_query($connection,$sqlClass);

                      while($rowClass = mysqli_fetch_assoc($resultClass)) {

                        $class_id   = $rowClass['class_id'];
                        $class_name = ucfirst($rowClass['class_name']);
                        $class_gradelevel = ucfirst($rowClass['class_gradelevel']);
                        $class_section = ucfirst($rowClass['class_section']);
                        
                        //
                        $subject_code = strtoupper($rowClass['subject_code']);
                        $subject_name = ucfirst($rowClass['subject_name']);

                        //
                        $teacher_firstname = ucfirst($rowClass['teacher_first_name']);
                        $teacher_middlename = ucfirst($rowClass['teacher_middle_name']);
                        $teacher_lastname = ucfirst($rowClass['teacher_last_name']);

                      ?>


                        <tr>
                          <td><?php echo $class_name ?> - <?php echo $class_section ?></td>
                          <td><?php echo $class_gradelevel ?></td>
                          <td><?php echo $subject_name ?></td>
                          <td><?php echo $teacher_firstname ?> <?php echo $teacher_middlename ?> <?php echo $teacher_lastname ?></td>
                          <td><center><a href="list_of_student.php?cid=<?php echo $class_id ?>" class="btn btn-primary btn-sm text-white"> VIEW</a></td>
                          <td>
                            <a href="class_update.php?uid=<?php echo $class_id?>" class="btn btn-primary btn-sm text-white">UPDATE</a> 
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