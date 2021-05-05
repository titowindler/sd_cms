<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>CLASS MANAGEMENT SYSTEM</title>
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
  
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body style="background: #2866C7;">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">


           <div class="card card-primary" style="box-shadow: 10px 10px #193D75;border-radius: 25px;">
              <div class="card-header">  
                <h4>Forgot Password</h4>
                <div class="card-header-action">
                    <a href="index.php" class="text-small">Return to login</a>
                  </div>
              </div>
               <div class="card-body">
                <p class="text-muted">To request a password reset. Please go to the IT Department and present your School ID. To the administrator.</p>

                

                  <div class="text-center mt-4 mb-3">
                  </div> 
               </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/vendors/jquery/jquery.min.js"></script>

  <script src="assets/js/stisla.js"></script>
  <script src="assets/vendors/bootstrap/js/bootstrap.js"> </script>

  <script src="assets/vendors/jquery-nicescroll/js/jquery.nicescroll.js"> </script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>


<script type="text/javascript">
  
  $(document).ready(function() {


      $('#fail-alert').hide();
      $('#empty-alert').hide();

      $('#emailForm').submit(function(e) {
        e.preventDefault();

        var email = $("#email").val();
        
  if(email!="") {     
    $.ajax({
        type: "POST",
        url: 'controllers/loginTest.php',
        data: {
            login:2,
            email: email
        },
        cache: false,
        success: function(dataResult) {
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==201){
             $("#fail-alert").show();
               $("#empty-alert").hide();
          }
          else if(dataResult.statusCode==202){
               alert('teacher');  
            console.log(dataResult);
          }
          else if(dataResult.statusCode==203){
            // $("#error").show();
            // $('#error').html('Email ID already exists !');
              alert('student');
            console.log(dataResult);
          }
        }
    });

   } else {
         $("#empty-alert").show();
          $("#fail-alert").hide(); 
      } 
      
});

});
</script>


</body>
</html>
