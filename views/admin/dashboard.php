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
            <li class="nav-item active">
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
            <h1>Dashboard</h1>
            <!-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            </div> -->
          </div>


          <div class="row">

            <?php 

            $sqlTotalTeacher = "SELECT * FROM teacher";
            $resultTotalTeacher = mysqli_query($connection,$sqlTotalTeacher);
            $countTotalTeacher = mysqli_num_rows($resultTotalTeacher);

            $sqlTotalStudent = "SELECT * FROM student";
            $resultTotalStudent = mysqli_query($connection,$sqlTotalStudent);
            $countTotalStudent = mysqli_num_rows($resultTotalStudent);

            $sqlTotalSubject = "SELECT * FROM subject";
            $resultTotalSubject = mysqli_query($connection,$sqlTotalSubject);
            $countTotalSubject = mysqli_num_rows($resultTotalSubject);


            ?>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Teachers</h4>
                  </div>
                  <div class="card-body" style="padding:20px;font-size:30px">
                    <?php echo $countTotalTeacher; ?>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Students</h4>
                  </div>
                  <div class="card-body" style="padding:20px;font-size:30px">
                    <?php echo $countTotalStudent; ?>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Subjects</h4>
                  </div>
                  <div class="card-body" style="padding:20px;font-size:30px">
                    <?php echo $countTotalSubject; ?>
                  </div>
                </div>
              </div>
            </div>

       
          </div>
        </section>
      </div>
    </div>
    <br>
      <footer class="main-footer" style="background-color:rgba(40, 102, 199, 0.97)">
        <div class="container">
        <div class="footer-left text-white">
          ?? 2020 St. Joseph Christian School
        </div> 
      </div>
      </footer>
    </div>


   <!-- Menu for Footer Links -->
    <?php require("menu-footer.php"); ?>
    <!-- -->


  </body>
</html>