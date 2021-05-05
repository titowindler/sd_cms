<!-- Header Links -->
  <?php require("menu-header.php");?>
<!-- -->

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar" style="background-color:rgba(40, 102, 199, 0.97)">
        <a href="dashboard.php" class="navbar-brand sidebar-gone-hide text-capitalize">St. Joseph Christian School</a>
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
            <h1>Add Class</h1>
           </div>

      
          <div class="section-body">
            <div class="card">
             
              <div class="card-body">

                <div class="container">
                <form method="POST" action="../../backend/class.php" id="formStudent">
                <div class="card-body">

                  <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputClassName">Class Name</label>
                        <input type="text" class="form-control" name="class_name">
                      </div>
                     <div class="form-group col-md-4">
                        <label for="inputClassName">Class Section</label>
                         <select class="form-control" id="add_assign_subject"  name="class_section">
                              <option hidden value="">Choose A Class Section</option>
                              <option value="I">I</option>
                              <option value="II">II</option>
                              <option value="III">III</option>
                              <option value="IV">IV</option>
                              <option value="V">V</option>
                             </select>
                          </div>
                       <div class="form-group col-md-4">
                        <label for="inputClassName">Class Grade Level</label>
                            <select class="form-control" id="add_assign_subject"  name="class_gradelevel">
                              <option hidden value="">Choose A Grade Level</option>
                              <option value="Grade 1">Grade 1</option>
                              <option value="Grade 2">Grade 2</option>
                              <option value="Grade 3">Grade 3</option>
                              <option value="Grade 4">Grade 4</option>
                              <option value="Grade 5">Grade 5</option>
                              <option value="Grade 6">Grade 6</option>
                              <option value="Grade 7">Grade 7</option>
                              <option value="Grade 8">Grade 8</option>
                              <option value="Grade 9">Grade 9</option>
                              <option value="Grade 10">Grade 10</option>
                            </select>
                         </div>
                                  
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputAssignSubject">Assign Subject</label>
                           <select class="form-control" id="add_assign_subject"  name="assign_subject">
                              <option hidden value="">Assign Subject</option>
                            <?php 

                            $sqlAssignSubject = "SELECT * FROM subject";
                            $resultAssignSubject = mysqli_query($connection,$sqlAssignSubject);

                            while($rowAssignSubject = mysqli_fetch_assoc($resultAssignSubject)) {

                              $subject_id = $rowAssignSubject['subject_id'];
                              $subject_code = strtoupper($rowAssignSubject['subject_code']);
                              $subject_name = ucfirst($rowAssignSubject['subject_name']);

                            ?>
                            
                            <option value="<?php echo $subject_id ?>"><?php echo $subject_code ?> - <?php echo $subject_name ?></option>

                            <?php } ?>
                          </select>
                      </div>
                    <div class="form-group col-md-4">
                      <label for="inputAssignTeacher">Assign Teacher</label>
                       <select class="form-control" id="add_assign_teacher"  name="assign_teacher">
                              <option hidden value="">Assign Teacher</option>
                          <?php 

                            $sqlAssignTeacher = "SELECT * FROM teacher";
                            $resultAssignTeacher = mysqli_query($connection,$sqlAssignTeacher);

                            while($rowAssignTeacher = mysqli_fetch_assoc($resultAssignTeacher)) {

                              $teacher_id = $rowAssignTeacher['teacher_id'];
                              $teacher_firstname = ucfirst($rowAssignTeacher['teacher_first_name']);
                              $teacher_middlename = ucfirst($rowAssignTeacher['teacher_middle_name']);
                              $teacher_lastname = ucfirst($rowAssignTeacher['teacher_last_name']);

                            ?>

                              <option value="<?php echo $teacher_id ?>"><?php echo $teacher_firstname ?> <?php echo $teacher_middlename[0] ?>. <?php echo $teacher_lastname ?></option>
                              <?php } ?>
                          </select>
                    </div>
                  </div>
                  </div>
             
             
                <button type="submit" class="btn btn-outline-primary" name="addClassSubmit">SUBMIT</button>
                <a href="class.php" class="btn btn-outline-danger">CLOSE</a>
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